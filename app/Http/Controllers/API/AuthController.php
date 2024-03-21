<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Session;
use Exception;
use Illuminate\Support\Facades\Hash;
use App\Traits\CustomException;
use App\Traits\PhoneNumber;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Carbon;

class AuthController extends Controller
{
    use CustomException;
    use PhoneNumber;

    public function __construct()
    {
    }

    public function doLogin(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'login_id' => 'required|min:1|max:100',
                'password' => 'required|string|min:1|max:200',
            ]);

            if ($validator->fails()) {
                throw new Exception($validator->errors()->all()[0]);
            }

            $loginId = $request->login_id;
            $loginIdType = 'PHONE';
            $validateEmail = Validator::make(
                ['email' => $request->login_id],
                [
                    'email' => 'required|email',
                ],
            );
            if ($validateEmail->passes()) {
                $loginIdType = 'EMAIL';
            }

            if ($loginIdType == 'PHONE') {
                $validate = $this->validatePhoneNumber($request->login_id);
                if (!$validate['isValid']) {
                    throw new Exception(
                        'LOGIN_ID_AND_PASSWORD_COMBINATION_INVALID',
                    );
                }
                $loginId = $validate['fullNumber'];
            }

            $user = null;
            $query = User::with(['role', 'role.roleAbilities']);
            switch ($loginIdType) {
                case 'PHONE':
                    $query = $query->where('mobile', $loginId);
                    break;
                case 'EMAIL':
                    $user = $query->where('email', $loginId);
                    break;
                default:
                    throw new Exception('LOGIN_ID_TYPE_NOT_HANDLE');
            }
            $user = $query->first();

            if (!$user || !$user->role) {
                throw new Exception(
                    'LOGIN_ID_AND_PASSWORD_COMBINATION_INVALID',
                );
            }

            if (!Hash::check($request->password, $user->password)) {
                throw new Exception(
                    'LOGIN_ID_AND_PASSWORD_COMBINATION_INVALID',
                );
            }

            if ($user->register_status !== 'APPROVED') {
                switch ($user->register_status) {
                    case 'REJECTED':
                        throw new Exception('USER_REGISTER_STATUS_REJECTED');
                        break;
                    case 'ACCEPTED':
                        throw new Exception('USER_REGISTER_STATUS_ACCEPTED');
                        break;
                    default:
                        throw new Exception(
                            'USER_REGISTER_STATUS_NOT_APPROVED',
                        );
                }
            }

            if ($user->status !== 'ENABLE') {
                switch ($user->register_status) {
                    case 'DISABLE':
                        throw new Exception('USER_STATUS_DISABLE');
                        break;
                    default:
                        throw new Exception('USER_STATUS_NOT_ENABLE');
                }
            }

            $abilityIds = [];

            foreach ($user->role->roleAbilities as $roleAbility) {
                if ($roleAbility->is_enable) {
                    array_push($abilityIds, $roleAbility->ability_id);
                }
            }

            // create token
            $token = $user->createToken(
                env('APP_NAME', ''),
                $abilityIds,
                now()->addWeek(),
            )->plainTextToken;

            $rsp = [
                'message' => 'success',
                'token' => $token,
            ];

            return response()->json($rsp, 200, []);
        } catch (Exception $e) {
            return $this->generateApiError($e->getMessage());
        }
    }

    public function getRegisterOptions(Request $request)
    {
        try {
            $userRoles = UserRole::select(['id', 'name'])
                ->where('is_show', true)
                ->get();

            $rsp = [
                'message' => 'success',
                'user_roles' => $userRoles,
            ];

            return response()->json($rsp, 200, []);
        } catch (Exception $e) {
            return $this->generateApiError($e->getMessage());
        }
    }

    public function doRegister(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|regex:/^[0-9A-Za-z ]+$/|min:1|max:100',
                'mobile' =>
                    'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:6|max:20',
                'email' => 'required|email|min:5|max:150',
                'role_id' => 'required|regex:/^[0-9A-Za-z\_]+$/|min:2|max:100',
                'password' => 'required|string|min:6|max:200',
                'confirm_password' => 'required|string|same:password',
            ]);

            if ($validator->fails()) {
                throw new Exception($validator->errors()->all()[0]);
            }

            //check mobile
            $validateMobile = $this->validatePhoneNumber($request->mobile);
            if (!$validateMobile['isValid']) {
                throw new Exception('MOBILE_FORMAT_INVALID');
            }

            $userMobile = User::where(
                'mobile',
                $validateMobile['fullNumber'],
            )->first();
            if ($userMobile) {
                throw new Exception('MOBILE_ALREADY_REGISTERED');
            }

            $userEmail = User::where(
                'email',
                strtolower($request->email),
            )->first();
            if ($userEmail) {
                throw new Exception('EMAIL_ALREADY_REGISTERED');
            }

            //check role id
            $userRole = UserRole::where('id', strtoupper($request->role_id))
                ->where('is_show', true)
                ->first();
            if (!$userRole) {
                throw new Exception('USER_ROLE_ID_INVALID');
            }

            $user = new User();
            $user->name = strtoupper($request->name);
            $user->mobile = $validateMobile['fullNumber'];
            $user->email = strtolower($request->email);
            $user->password = Hash::make($request->password);
            $user->register_status = 'ACCEPTED';
            $user->register_status_updated_at = Carbon::now();
            $user->status = 'DISABLE';
            $user->role_id = $userRole->id;
            $user->remember_token = false;
            $user->save();

            $rsp = [
                'message' => 'accepted',
                'user' => [
                    'name' => $user->name,
                    'mobile' => $user->mobile,
                    'email' => $user->email,
                ],
            ];

            return response()->json($rsp, 201, []);
        } catch (Exception $e) {
            return $this->generateApiError($e->getMessage());
        }
    }
}

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

            $abilityIds = [];

            foreach ($user->role->roleAbilities as $roleAbility) {
                array_push($abilityIds, $roleAbility->ability_id);
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

    public function registerOption(Request $request)
    {
        try {
            $userRoles = UserRole::select(['id', 'name'])
                ->where('id', '!=', 'SUPER_ADMIN')
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
                'mobile' => 'required|numeric|min:1|max:20',
                'email' => 'required|email|min:1|max:200',
            ]);

            if ($validator->fails()) {
                throw new Exception($validator->errors()->all()[0]);
            }
        } catch (Exception $e) {
            return $this->generateApiError($e->getMessage());
        }
    }
}

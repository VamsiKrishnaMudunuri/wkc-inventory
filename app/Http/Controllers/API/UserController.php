<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Session;
use Exception;
use DB;
use App\Traits\CustomException;
use App\Traits\PhoneNumber;
use App\Models\User;
use App\Models\UserRole;
use Carbon\Carbon;

class UserController extends Controller
{
    use CustomException;
    use PhoneNumber;

    public function __construct()
    {
    }

    public function getUsers(Request $request)
    {
        try {
            $perPage = 10;
            $page = 1;
            $validator = Validator::make($request->all(), [
                'page' => 'nullable|integer|min:1',
                'per_page' => 'nullable|integer|min:1',
                'user_id' => 'nullable|integer|min:1',
                'ext_id' => 'nullable|string|min:36|max:36',
                'name' => 'nullable|string|min:2|max:100',
                'mobile' => 'nullable|string|min:6|max:20',
                'email' => 'nullable|email|min:5|max:150',
                'register_status' => 'nullable|string|min:2|max:100',
                'status' => 'nullable|string|min:2|max:100',
                'role_id' => 'nullable|string|min:2|max:100',
                'date_from' => 'nullable|date_format:Y-m-d',
                'date_to' => 'nullable|date_format:Y-m-d',
            ]);
            if ($validator->fails()) {
                throw new Exception($validator->errors()->all()[0]);
            }
            if (isset($request->page)) {
                $page = $request['page'];
            }
            if (isset($request->per_page)) {
                $perPage = $request['per_page'];
            }

            $users = User::select(['users.*']);

            if ($request->user_id) {
                $users = $users->where('id', $request->user_id);
            }
            if ($request->ext_id) {
                $users = $users->where('ext_id', $request->ext_id);
            }
            if ($request->name) {
                $users = $users->where(
                    'name',
                    'like',
                    '%' . $request->name . '%',
                );
            }
            if ($request->mobile) {
                $users = $users->where(
                    'mobile',
                    'like',
                    '%' . $request->mobile . '%',
                );
            }
            if ($request->email) {
                $users = $users->where(
                    'email',
                    'like',
                    '%' . $request->email . '%',
                );
            }
            if ($request->register_status) {
                $users = $users->where(
                    'register_status',
                    strtoupper($request->register_status),
                );
            }
            if ($request->status) {
                $users = $users->where('status', strtoupper($request->status));
            }
            if ($request->role_id) {
                $users = $users->where(
                    'role_id',
                    strtoupper($request->role_id),
                );
            }

            if ($request->date_from || $request->date_to) {
                if ($request->date_from && $request->date_to) {
                    $users = $users->whereBetween('users.created_at', [
                        $request->date_from . '',
                        $request->date_to . ' 23:59:59',
                    ]);
                } else {
                    if ($request->date_from && !$request->date_to) {
                        $users = $users->where(
                            'users.created_at',
                            '>=',
                            $request->date_from . '',
                        );
                    }
                    if (!$request->date_from && $request->date_to) {
                        $users = $users->where(
                            'users.created_at',
                            '<=',
                            $request->date_to . ' 23:59:59',
                        );
                    }
                }
            }

            $users = $users->with(['role']);
            $users = $users
                ->orderBy('id', 'ASC')
                ->paginate($perPage, ['*'], 'page', $page);
            $usersData = $users->getCollection()->transform(function ($value) {
                return $value;
            });

            $rsp = [
                'message' => 'success',
                'users' => $usersData,
                'pagination' => [
                    'page' => (int) $page,
                    'per_page' => (int) $perPage,
                ],
            ];

            return response()->json($rsp, 200, []);
        } catch (Exception $e) {
            return $this->generateApiError($e->getMessage());
        }
    }

    public function getUsersOptions(Request $request)
    {
        try {
            $registerStatuses = [
                [
                    'id' => 'ACCEPTED',
                ],
                [
                    'id' => 'APPROVED',
                ],
                [
                    'id' => 'REJECTED',
                ],
            ];

            $statuses = [
                [
                    'id' => 'ENABLE',
                ],
                [
                    'id' => 'DISABLE',
                ],
            ];

            $userRoles = UserRole::select(['id', 'name'])->get();

            $rsp = [
                'message' => 'success',
                'register_statuses' => $registerStatuses,
                'statuses' => $statuses,
                'user_roles' => $userRoles,
                'user' => $request->middleware->user,
                'user_id' => $request->middleware->userId,
            ];

            return response()->json($rsp, 200, []);
        } catch (Exception $e) {
            return $this->generateApiError($e->getMessage());
        }
    }

    public function updateUserRegisterStatusById(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'register_status' =>
                    'required|string|min:2|max:100|in:APPROVED,REJECTED',
            ]);
            if ($validator->fails()) {
                throw new Exception($validator->errors()->all()[0]);
            }

            $userId = $request->user_id ? $request->user_id : null;
            if (!$userId) {
                throw new Exception('USER_ID_REQUIRED');
            }

            DB::beginTransaction();
            try {
                $user = User::where('id', $userId)->lockForUpdate()->first();
                if (!$user) {
                    throw new Exception('USER_ID_INVALID');
                }
                if ($user->register_status == 'APPROVED') {
                    throw new Exception(
                        'USER_REGISTER_STATUS_ALREADY_APPROVED',
                    );
                }
                if (
                    $user->register_status !== 'ACCEPTED' &&
                    $user->register_status !== 'REJECTED'
                ) {
                    throw new Exception('USER_REGISTER_STATUS_INVALID');
                }
                $user->register_status = $request->register_status;
                $user->register_status_updated_at = Carbon::now();
                $user->status = 'ENABLE';
                $user->save();
                DB::commit();
            } catch (Exception $e) {
                DB::rollback();
                throw new Exception($e->getMessage());
            }

            $rsp = [
                'message' => 'success',
            ];

            return response()->json($rsp, 200, []);
        } catch (Exception $e) {
            return $this->generateApiError($e->getMessage());
        }
    }

    public function updateUserById(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|regex:/^[0-9A-Za-z ]+$/|min:1|max:100',
                'mobile' =>
                    'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:6|max:20',
                'email' => 'required|email|min:5|max:150',
            ]);
            if ($validator->fails()) {
                throw new Exception($validator->errors()->all()[0]);
            }

            $userId = $request->user_id ? $request->user_id : null;
            if (!$userId) {
                throw new Exception('USER_ID_REQUIRED');
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

            $userEmail = User::where(
                'email',
                strtolower($request->email),
            )->first();

            DB::beginTransaction();
            try {
                $user = User::where('id', $request->user_id)
                    ->lockForUpdate()
                    ->first();
                if (!$user) {
                    throw new Exception('USER_ID_INVALID');
                }

                if (
                    $user->role_id == 'ADMIN' &&
                    (string) $user->id !== (string) $request->middleware->userId
                ) {
                    if (
                        !$request->middleware->user->tokenCan(
                            'UPDATE_USER_ADMIN',
                        )
                    ) {
                        throw new Exception('UNAUTHORIZED');
                    }
                }

                if (
                    $userMobile &&
                    (string) $userMobile->id !== (string) $user->id
                ) {
                    throw new Exception('MOBILE_ALREADY_REGISTERED');
                }

                if (
                    $userEmail &&
                    (string) $userEmail->id !== (string) $user->id
                ) {
                    throw new Exception('EMAIL_ALREADY_REGISTERED');
                }

                $user->name = strtoupper($request->name);
                $user->mobile = $validateMobile['fullNumber'];
                $user->email = strtolower($request->email);
                $user->save();
                DB::commit();
            } catch (Exception $e) {
                DB::rollback();
                throw new Exception($e->getMessage());
            }

            $rsp = [
                'message' => 'success',
            ];

            return response()->json($rsp, 200, []);
        } catch (Exception $e) {
            return $this->generateApiError($e->getMessage());
        }
    }

    public function updateUserRoleById(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'role_id' => 'required|string|min:2|max:100',
            ]);
            if ($validator->fails()) {
                throw new Exception($validator->errors()->all()[0]);
            }

            $userId = $request->user_id ? $request->user_id : null;
            if (!$userId) {
                throw new Exception('USER_ID_REQUIRED');
            }
            $user = null;

            //check role id
            $userRole = UserRole::where(
                'id',
                strtoupper($request->role_id),
            )->first();
            if (!$userRole) {
                throw new Exception('USER_ROLE_ID_INVALID');
            }
            if ($userRole->id == 'SUPER_ADMIN') {
                throw new Exception('USER_ROLE_ID_INVALID');
            }

            DB::beginTransaction();
            try {
                $user = User::where('id', $userId)->lockForUpdate()->first();
                if (!$user) {
                    throw new Exception('USER_ID_INVALID');
                }

                if ($user->role_id == $userRole->id) {
                    throw new Exception('USER_ROLE_ALREADY_UPDATED');
                }

                if ($userRole->id == 'ADMIN') {
                    if (
                        !$request->middleware->user->tokenCan(
                            'UPDATE_USER_ADMIN_ROLE',
                        )
                    ) {
                        throw new Exception('UNAUTHORIZED');
                    }
                }

                $user->role_id = $userRole->id;
                $user->save();
                DB::commit();
            } catch (Exception $e) {
                DB::rollback();
                throw new Exception($e->getMessage());
            }

            // revoke all token for that user
            $user->tokens()->delete();

            $rsp = [
                'message' => 'success',
            ];

            return response()->json($rsp, 200, []);
        } catch (Exception $e) {
            return $this->generateApiError($e->getMessage());
        }
    }

    public function updateUserStatusById(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'status' => 'required|string|min:2|max:100|in:ENABLE,DISABLE',
            ]);
            if ($validator->fails()) {
                throw new Exception($validator->errors()->all()[0]);
            }

            $userId = $request->user_id ? $request->user_id : null;
            if (!$userId) {
                throw new Exception('USER_ID_REQUIRED');
            }
            $user = null;

            DB::beginTransaction();
            try {
                $user = User::where('id', $request->user_id)
                    ->lockForUpdate()
                    ->first();
                if (!$user) {
                    throw new Exception('USER_ID_INVALID');
                }

                if ($user->status == $request->status) {
                    throw new Exception('USER_STATUS_ALREADY_UPDATED');
                }

                if ($user->register_status !== 'APPROVED') {
                    throw new Exception('USER_REGISTER_STATUS_NOT_APPROVED');
                }

                if (
                    $user->role_id == 'ADMIN' &&
                    (string) $user->id !== (string) $request->middleware->userId
                ) {
                    if (
                        !$request->middleware->user->tokenCan(
                            'UPDATE_USER_ADMIN',
                        )
                    ) {
                        throw new Exception('UNAUTHORIZED');
                    }
                }

                $user->status = strtoupper($request->status);
                $user->save();
                DB::commit();
            } catch (Exception $e) {
                DB::rollback();
                throw new Exception($e->getMessage());
            }

            // revoke all token for that user
            $user->tokens()->delete();

            $rsp = [
                'message' => 'success',
            ];

            return response()->json($rsp, 200, []);
        } catch (Exception $e) {
            return $this->generateApiError($e->getMessage());
        }
    }
}

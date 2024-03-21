<?php

namespace App\Traits;

use Illuminate\Support\Collection;
use Exception;

trait CustomException
{
    public function generateApiError($message)
    {
        $status = 400;
        $data = [
            'error' => [
                'code' => '0',
                'name' => 'UNKNOWN_ERROR',
                'message_lang' => [
                    'en' => 'Unknown Error',
                ],
                'info' => $message,
            ],
        ];
        $findMessage = $this->findErrorMessageByMessage($message);
        if ($findMessage['messageCollection']) {
            $data['error'] = $findMessage['messageCollection'];
            $status = $findMessage['status'];
        }

        return response()->json($data, $status);
    }

    public function getErrorMessages()
    {
        $errorMessageCollections = Collection::make([
            [
                'status' => 400,
                'code' => '0',
                'name' => 'UNKNOWN_ERROR',
                'default_name' => '',
                'message_lang' => [
                    'en' => 'Unknown Error',
                ],
                'info' => null,
            ],
            [
                'status' => 404,
                'code' => '1',
                'name' => 'PAGE_NOT_FOUND',
                'default_name' => '',
                'message_lang' => [
                    'en' => 'Page Not Found',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '2',
                'name' => 'UNAUTHORIZED',
                'default_name' => '',
                'message_lang' => [
                    'en' => 'Unauthorized',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '3',
                'name' => 'UNAUTHENTICATED',
                'default_name' => '',
                'message_lang' => [
                    'en' => 'Unauthenticated',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '4',
                'name' => 'TOKEN_REQUIRED',
                'default_name' => '',
                'message_lang' => [
                    'en' => 'Token Required',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10001',
                'name' => 'LOGIN_ID_REQUIRED',
                'default_name' => 'The login id field is required.',
                'message_lang' => [
                    'en' => 'Login ID Required',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10002',
                'name' => 'PASSWORD_REQUIRED',
                'default_name' => 'The password field is required.',
                'message_lang' => [
                    'en' => 'Password Required',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10003',
                'name' => 'LOGIN_ID_AND_PASSWORD_COMBINATION_INVALID',
                'default_name' => '',
                'message_lang' => [
                    'en' => 'Invalid Login ID and / or Password Combination',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10004',
                'name' => 'NAME_INPUT_REQUIRED',
                'default_name' => 'The name field is required.',
                'message_lang' => [
                    'en' => 'Name Required',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10005',
                'name' => 'NAME_INPUT_FORMAT_INVALID',
                'default_name' => 'The name field format is invalid.',
                'message_lang' => [
                    'en' => 'Invalid Name Input Format',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10006',
                'name' => 'MOBILE_INPUT_REQUIRED',
                'default_name' => 'The mobile field is required.',
                'message_lang' => [
                    'en' => 'Mobile Number Required',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10007',
                'name' => 'MOBILE_INPUT_FORMAT_INVALID',
                'default_name' => 'The mobile field format is invalid.',
                'message_lang' => [
                    'en' => 'Invalid Mobile Input Format',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10008',
                'name' => 'MOBILE_INPUT_LENGTH_MIN_INVALID',
                'default_name' =>
                    'The mobile field must be at least 6 characters.',
                'message_lang' => [
                    'en' => 'Invalid Mobile Input Minimum Length',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10009',
                'name' => 'EMAIL_INPUT_REQUIRED',
                'default_name' => 'The email field is required.',
                'message_lang' => [
                    'en' => 'Email Required',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10010',
                'name' => 'EMAIL_INPUT_INVALID',
                'default_name' =>
                    'The email field must be a valid email address.',
                'message_lang' => [
                    'en' => 'Invalid Email Input',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10011',
                'name' => 'ROLE_ID_INPUT_REQUIRED',
                'default_name' => 'The role id field is required.',
                'message_lang' => [
                    'en' => 'Role ID Required',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10012',
                'name' => 'ROLE_ID_INPUT_FORMAT_INVALID',
                'default_name' => 'The role id field format is invalid.',
                'message_lang' => [
                    'en' => 'Invalid Role ID Input Format',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10013',
                'name' => 'PASSWORD_INPUT_LENGTH_MIN_INVALID',
                'default_name' =>
                    'The password field must be at least 6 characters.',
                'message_lang' => [
                    'en' => 'Password must be at least 6 characters',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10014',
                'name' => 'CONFIRM_PASSWORD_INPUT_REQUIRED',
                'default_name' => 'The confirm password field is required.',
                'message_lang' => [
                    'en' => 'Confirm Password Required',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10015',
                'name' => 'CONFIRM_PASSWORD_INPUT_MISMATCH_PASSWORD',
                'default_name' =>
                    'The confirm password field must match password.',
                'message_lang' => [
                    'en' => 'Confirm password must be match with password',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10016',
                'name' => 'MOBILE_FORMAT_INVALID',
                'default_name' => '',
                'message_lang' => [
                    'en' => 'Invalid Mobile Number Format',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10017',
                'name' => 'USER_ROLE_ID_INVALID',
                'default_name' => '',
                'message_lang' => [
                    'en' => 'Invalid User Role ID',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10018',
                'name' => 'MOBILE_ALREADY_REGISTERED',
                'default_name' => '',
                'message_lang' => [
                    'en' => 'Mobile Number Already Registered',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10019',
                'name' => 'EMAIL_ALREADY_REGISTERED',
                'default_name' => '',
                'message_lang' => [
                    'en' => 'Email Already Registered',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10020',
                'name' => 'USER_REGISTER_STATUS_REJECTED',
                'default_name' => '',
                'message_lang' => [
                    'en' =>
                        'Your account registration was rejected. Please contact administrator',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10021',
                'name' => 'USER_REGISTER_STATUS_ACCEPTED',
                'default_name' => '',
                'message_lang' => [
                    'en' =>
                        'Your account registration still in progress. Please wait for admin approval or contact administrator',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10022',
                'name' => 'USER_REGISTER_STATUS_NOT_APPROVED',
                'default_name' => '',
                'message_lang' => [
                    'en' =>
                        'Your account registration was not approved. Please contact administrator',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10023',
                'name' => 'USER_STATUS_DISABLE',
                'default_name' => '',
                'message_lang' => [
                    'en' =>
                        'Your account was disable. Please contact administrator',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10024',
                'name' => 'USER_STATUS_NOT_ENABLE',
                'default_name' => '',
                'message_lang' => [
                    'en' =>
                        'Your account status not enable. Please contact administrator',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10025',
                'name' => 'USER_ID_INVALID',
                'default_name' => '',
                'message_lang' => [
                    'en' => 'Invalid User ID',
                ],
                'info' => null,
            ],
            [
                'status' => 400,
                'code' => '10026',
                'name' => 'USER_ROLE_ALREADY_UPDATED',
                'default_name' => '',
                'message_lang' => [
                    'en' => 'User Role Already Updated',
                ],
                'info' => null,
            ],
        ]);

        return $errorMessageCollections;
    }

    public function findErrorMessageByMessage($msg)
    {
        $messageCollection = null;
        $status = 400;
        try {
            $collections = $this->getErrorMessages();
            $messageCollection = $collections
                ->filter(function ($value, $key) use ($msg) {
                    if (
                        $value['name'] == $msg ||
                        $value['default_name'] == $msg
                    ) {
                        return $value;
                    }
                })
                ->first();
        } catch (Exception $e) {
        }
        if ($messageCollection) {
            $status = $messageCollection['status'];
            unset($messageCollection['default_name']);
            unset($messageCollection['status']);
        }
        return [
            'messageCollection' => $messageCollection,
            'status' => $status,
        ];
    }
}

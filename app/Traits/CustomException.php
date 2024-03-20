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
        if ($findMessage) {
            $data['error'] = $findMessage;
        }

        return response()->json($data, $status);
    }

    public function getErrorMessages()
    {
        $errorMessageCollections = Collection::make([
            [
                'code' => '0',
                'name' => 'UNKNOWN_ERROR',
                'default_name' => 'Unknown Error',
                'message_lang' => [
                    'en' => 'Unknown Error',
                ],
                'info' => null,
            ],
            [
                'code' => '1',
                'name' => 'PAGE_NOT_FOUND',
                'default_name' => 'Page Not Found',
                'message_lang' => [
                    'en' => 'Page Not Found',
                ],
                'info' => null,
            ],
            [
                'code' => '2',
                'name' => 'UNAUTHORIZED',
                'default_name' => 'Unauthorized',
                'message_lang' => [
                    'en' => 'Unauthorized',
                ],
                'info' => null,
            ],
            [
                'code' => '10001',
                'name' => 'LOGIN_ID_REQUIRED',
                'default_name' => 'The login id field is required.',
                'message_lang' => [
                    'en' => 'Login ID Required',
                ],
                'info' => null,
            ],
            [
                'code' => '10002',
                'name' => 'PASSWORD_REQUIRED',
                'default_name' => 'The password field is required.',
                'message_lang' => [
                    'en' => 'Password Required',
                ],
                'info' => null,
            ],
            [
                'code' => '10003',
                'name' => 'LOGIN_ID_AND_PASSWORD_COMBINATION_INVALID',
                'default_name' => '',
                'message_lang' => [
                    'en' => 'Invalid Login ID and / or Password Combination',
                ],
                'info' => null,
            ],
        ]);

        return $errorMessageCollections;
    }

    public function findErrorMessageByMessage($msg)
    {
        $messageCollection = null;
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
            unset($messageCollection['default_name']);
        }
        return $messageCollection;
    }
}

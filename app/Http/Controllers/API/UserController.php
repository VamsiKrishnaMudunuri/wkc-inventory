<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Session;
use Exception;
use App\Traits\CustomException;
use App\Models\User;

class UserController extends Controller
{
    use CustomException;

    public function __construct()
    {
    }

    public function getUsers(Request $request)
    {
        try {
            $rsp = [
                'message' => 'success',
            ];

            return response()->json($rsp, 200, []);
        } catch (Exception $e) {
            return $this->generateApiError($e->getMessage());
        }
    }
}

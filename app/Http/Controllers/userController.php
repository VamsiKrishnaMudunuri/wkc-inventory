<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Session;

class userController extends Controller
{
    public function welcome(Request $request)
    {

        if(empty($access_token)){
            $access_token = Session::get('access_token');
        } else {
            $access_token = $request->access_token;
        }
        return view('adminLte.dashboard', compact('access_token'));
    }

    public function addSession(Request $request)
    {
        try {
            $accessToken = '';
            if ( $request->access_token) {
                $session = [

                    'access_token' => $request->access_token
                ];
                session($session);
            } else {
                throw new Exception("INVALID_DATA");
            }
            return response()->json([
                "message" => "success",
                "session" => $session
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                "error" => [
                    "message" => $e->getMessage(),
                ]
            ], 400);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');

    }
}

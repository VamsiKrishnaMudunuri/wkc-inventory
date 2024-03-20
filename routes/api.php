<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Traits\CustomException;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(
    [
        'prefix' => '/v1/registers',
        'middleware' => [],
    ],
    function () {
        Route::post('/', [AuthController::class, 'doRegister']);
    },
);

// Route::fallback(function () {
//     $status = 400;
//     $data = [
//         'error' => [
//             'code' => '1',
//             'name' => 'PAGE_NOT_FOUND',
//             'message_lang' => [
//                 'en' => 'Page Not Found',
//             ],
//             'info' => null,
//         ],
//     ];

//     return response()->json($data, $status);
// });

Route::any('{url?}/{sub_url?}', function () {
    $status = 400;
    $data = [
        'error' => [
            'code' => '1',
            'name' => 'PAGE_NOT_FOUND',
            'message_lang' => [
                'en' => 'Page Not Found',
            ],
            'info' => null,
        ],
    ];

    return response()->json($data, $status);
});

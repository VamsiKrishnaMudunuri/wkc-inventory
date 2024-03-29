<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::post('/session', 'UserController@addSession');

Route::get('/welcome/{access_token}', 'UserController@welcome');

Route::get('/logout', 'UserController@logout');

Route::get('/refridgerator', function () {
    return view('adminLte.refridgerator');
});
Route::get('/request', function () {
    return view('adminLte.request');
});
Route::get('/production_requests', function () {
    return view('adminLte.production_requests');
});
Route::get('/milk', function () {
    return view('adminLte.milk');
});
Route::get('/2', function () {
    return view('adminLte.2');
});
Route::get('/3', function () {
    return view('adminLte.3');
});
Route::get('/areas', function () {
    return view('adminLte.areas');
});
Route::get('/dashboard/{access_token}', 'UserController@welcome');

Route::get('/publish_form', function () {
    return view('adminLte.publish_form');
});
Route::get('/jfcode_add', function () {
    return view('adminLte.jfcode_add');
});
Route::get('/history', function () {
    return view('adminLte.history');
});
Route::get('/donation_history', function () {
    return view('adminLte.donation_history');
});
Route::get('/jfcode_list', function () {
    return view('adminLte.jfcode_list');
});
Route::get('/scan_qr', function () {
    return view('adminLte.scan_qr');
});
Route::get('/requesters', function () {
    return view('adminLte.admin.requesters');
});
Route::get('/approval_team', function () {
    return view('adminLte.admin.approval_team');
});
Route::get('/portal_users', function () {
    return view('adminLte.admin.portal_users');
});
Route::get('/adjust_inventory', function () {
    return view('adminLte.admin.adjust_inventory');
});
Route::get('/inventory_data', function () {
    return view('adminLte.audit.inventory_data');
});
Route::get('/inventory_count', function () {
    return view('adminLte.audit.inventory_count');
});
Route::get('/approve_user', function () {
    return view('adminLte.admin.approve_user');
});
Route::get('/make_entry', function () {
    return view('adminLte.make_entry');
});
Route::get('/count_result', function () {
    return view('adminLte.audit.count_result');

});









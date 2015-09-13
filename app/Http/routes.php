<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'User', 'prefix' => 'api/v1'], function () {
    Route::resource('user', 'UserController', ['except' => ['create', 'edit']]);
});

Route::get('give-me-token', function () {
    return csrf_token();
});

Route::post('guzzle', function () {

    $client = new \GuzzleHttp\Client();
    $body = ['akun' => 'Akun Saya', 'kode_rekening' => '02'];
    $response = $client->post('http://appsim.dev/api/v1/akun', [
        'form_params' => $body,
        'headers'     => [
            'X-Requested-With' => 'XMLHttpRequest'
        ]
    ]);

    echo $response->getBody();
});

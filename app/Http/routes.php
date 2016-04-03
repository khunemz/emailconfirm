<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::resource('register', 'RegisterController',[
        'only' => ['index', 'store']
    ]);

    Route::resource('login', 'LoginController', [
        'only' => ['index', 'store']
    ]);

    Route::get('logout', 'LogoutController@index', [
        'only' => ['index']
    ]);


    Route::get('email/verify', [
        'uses' => 'EmailController@verify',
        'as' => 'email.verify'
    ]);

    Route::get('email/confirm', [
        'uses' => 'EmailController@confirm',
        'as' => 'email.confirm'
    ]);

    Route::post('email', [
        'uses' => 'EmailController@store',
        'as' => 'email.store'
    ]);

    Route::resource('user', 'UserController', [
        'only' => ['index']
    ]);

    // Password reset link request routes...
    Route::get('password/email', 'Auth\PasswordController@getEmail');
    Route::post('password/email', 'Auth\PasswordController@postEmail');

    // Password reset routes...
    Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('password/reset', 'Auth\PasswordController@postReset');

});



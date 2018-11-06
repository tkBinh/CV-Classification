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

Route::get('/', 'MainController@index');
Route::get('login', 'MainController@getLoginPage')->name('login');
Route::get('upload-success', 'MainController@getSuccessUploadPage')->name('upload_success');
Route::get('upload-file', 'MainController@getUploadPage')->name('upload_file');
Route::get('upload-file-error', 'MainController@getUploadErrorPage')->name('upload_file_error');

/* Google Login */
Route::get('auth/google', 'SocialLoginController@redirectToProvider')->name('google.login');
Route::get('auth/google/callback', 'SocialLoginController@handleProviderCallback');


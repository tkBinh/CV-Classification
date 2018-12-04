<?php

use \Illuminate\Support\Facades\Route;
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

//Admin
Route::get('admin/login', 'Admin\AdminController@getLoginPage')->name('admin.login');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'adminLogin' ], function
() {
    Route::get('/', 'AdminController@home')->name('dashboard');
    //Manage
    Route::get('manage', 'AdminController@getManagePage')->name('manage');
    Route::get('manage/{manager}', 'AdminController@detail')->name('manage.detail');
    Route::get('manage/{manager}/edit', 'AdminController@edit')->name('manage.edit');
    Route::post('manage/delete', 'AdminController@delete')->name('manage.delete');
});

//Social Login (Google)
Route::get('auth/google', 'Auth\SocialLoginController@redirectToProvider')->name('google.login');
Route::get('auth/google/callback', 'Auth\SocialLoginController@handleProviderCallback');
Route::get('logout', 'Auth\SocialLoginController@logout')->name('logout');

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\LoginController@login');
Route::get('/admin', 'AdminController@index')->name('admin');


Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin/password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/password/reset', 'Admin\ResetPasswordController@reset')->name('admin.password.update');

//Route::post('logout', 'Admin\LoginController@logout')->name('logout');



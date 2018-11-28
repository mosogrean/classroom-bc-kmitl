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

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');




// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Email Verification Routes...
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'is_admin'], function () {
    Route::get('/admin/dashboard','Admin\DashboardController@index')->name('admin.dashboard');




});

Route::get('/admin/user/register','Admin\UserController@registerPage')->name('admin.user.register');
Route::post('/admin/user/register/store', 'Admin\UserController@registerStore')->name('admin.user.register.store');
Route::get('/admin/user/list', 'Admin\UserController@listPage')->name('admin.user.list');
Route::get('/admin/user/list/teacher', 'Admin\UserController@teacherListPage')->name('admin.user.list.teacher');
Route::get('/admin/user/list/student', 'Admin\UserController@studentListPage')->name('admin.user.list.student');
Route::get('/admin/user/list/teacher/{id}', 'Admin\UserController@teacherInfo')->name('admin.user.list.teacher.info');
Route::get('/admin/user/list/student/{id}', 'Admin\UserController@studentInfo')->name('admin.user.list.student.info');

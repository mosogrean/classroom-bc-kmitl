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
    Route::get('/admin/user/register','Admin\UserController@registerPage')->name('admin.user.register');
    Route::post('/admin/user/register/store', 'Admin\UserController@registerStore')->name('admin.user.register.store');
    Route::get('/admin/user/list', 'Admin\UserController@listPage')->name('admin.user.list');
    Route::get('/admin/user/list/teacher', 'Admin\UserController@teacherListPage')->name('admin.user.list.teacher');
    Route::get('/admin/user/list/student', 'Admin\UserController@studentListPage')->name('admin.user.list.student');
    Route::get('/admin/user/list/teacher/{id}', 'Admin\UserController@teacherInfo')->name('admin.user.list.teacher.info');
    Route::get('/admin/user/list/student/{id}', 'Admin\UserController@studentInfo')->name('admin.user.list.student.info');
    Route::get('/admin/classroom/create','Admin\ClassroomController@createPage')->name('admin.classroom.create');
    Route::post('/admin/classroom/create/store', 'Admin\ClassroomController@createStore')->name('admin.classroom.create.store');
    Route::get('/admin/classroom/list', 'Admin\ClassroomController@listPage')->name('admin.classroom.list');
    Route::get('/admin/classroom/list/teacher_room', 'Admin\ClassroomController@teacherRoomPage')->name('admin.classroom.list.teacher_room');
    Route::get('/admin/classroom/list/student_room', 'Admin\ClassroomController@studentRoomPage')->name('admin.classroom.list.student_room');
    Route::get('/admin/classroom/list/teacher_and_student_room', 'Admin\ClassroomController@teacherAndStudentRoomPage')->name('admin.classroom.list.teacher_and_student_room');
    Route::get('/admin/classroom/list/teacher_room/{room}', 'Admin\ClassroomController@teacherRoomInfo')->name('admin.classroom.list.teacher_room.info');
    Route::get('/admin/classroom/list/student_room/{room}', 'Admin\ClassroomController@studentRoomInfo')->name('admin.classroom.list.student_room.info');
    Route::get('/admin/classroom/list/teacher_and_student_room/{room}', 'Admin\ClassroomController@teacherAndStudentRoomInfo')->name('admin.classroom.list.teacher_and_student_room.info');
    Route::get('/admin/classroom/list/teacher_room/{room}/reserve', 'Admin\ClassroomController@teacherRoomReservePage')->name('admin.classroom.list.teacher_room.info.reserve');
    Route::get('/admin/classroom/list/student_room/{room}/reserve', 'Admin\ClassroomController@studentRoomReservePage')->name('admin.classroom.list.student_room.info.reserve');
    Route::get('/admin/classroom/list/teacher_room/{room}/reserve/{time}', 'Admin\ClassroomController@teacherRoomReserveTime')->name('admin.classroom.list.teacher_room.info.time');
    Route::get('/admin/classroom/list/student_room/{room}/reserve/{time}', 'Admin\ClassroomController@studentRoomReserveTime')->name('admin.classroom.list.student_room.info.time');
    Route::get('/admin/classroom/list/teacher_and_room/{room}/reserve', 'Admin\ClassroomController@teacherAndStudentRoomReservePage')->name('admin.classroom.list.teacher_and_student_room.info.reserve');
    Route::get('/admin/classroom/list/teacher_and_room/{room}/reserve/{time}', 'Admin\ClassroomController@teacherAndStudentRoomReserveTime')->name('admin.classroom.list.teacher_and_student_room.info.time');

});


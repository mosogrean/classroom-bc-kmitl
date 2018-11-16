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

Route::get('/wel', 'WelcomeController@index')->name('welcome');
Auth::routes();

Route::get('/login','LoginController@login')->name('login');

Route::get('/password/forgot','ForgotPasswordController@forgot')->name('password.forgot');
Route::get('/password/reset','ResetPasswordController@reset')->name('password.reset');

/*Route::get('/','ClassroomController@index')->name('classroom.home');
Route::get('/bookstore','BookController@store')->name('admin.table');
Route::get('/book/view','BookController@view')->name('teacher.');
Route::get('/book/edit/{id}', 'BookController@edit')->name('book.edit');
Route::post('/book/edit/store', 'BookController@storeEdit')->name('book.store.edit');
Route::get('/book/delete/{id}', 'BookController@delete')->name('book.delete');
*/

Route::post('/register/admin','RegisterController@registerAdmin')->name('admin.register');
Route::post('/register/teacher','RegisterController@registerTeacher')->name('teacher.register');
Route::post('/register/student','RegisterController@registerStudent')->name('student.register');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/profile','ClassroomController@getAdmin')->name('admin.profile');
Route::get('/teacher/profile','ClassroomController@getTeacher')->name('teacher.profile');
Route::get('/student/profile','ClassroomController@getStudent')->name('student.profile');
Route::get('/admin/view','ClassroomController@viewAdmin')->name('admin.classroom');
Route::get('/teacher/view','ClassroomController@viewTeacher')->name('teacher.classroom');
Route::get('/student/view', 'ClassroomController@viewStudent')->name('student.classroom');
Route::post('/admin/reserve/{id}','ClassroomController@reserveAdmin')->name('admin.reserve');
Route::post('/teachere/reserve/{id}','ClassroomController@reserveTeacher')->name('teacher.reserve');
Route::post('/student/reserve/{id}','ClassroomController@reserveStudent')->name('student.reserve');
Route::post('/admin/reserved','ClassroomController@reservedAdmin')->name('admin.reserved');
Route::post('/teacher/reserved','ClassroomController@reservedTeacher')->name('teacher.reserved');
route::post('/student/reserved','ClassroomController@resercedStudent')->name('student.reserved');
Route::get('/admin/edit/{id}','ClassroomController@editAll')->name('admin.edit');
Route::post('/admin/edit/update','ClassroomController@updateAdmin')->name('admin.update');
Route::get('/teacher/edit/{id}','ClassroomController@editTeacher')->name('teacher.edit');
Route::post('/student/edit/update','ClassroomController@updateTeacher')->name('teacher.update');
Route::get('/student/edit/{id}','ClassroomController@editStudent')->name('student.edit');
Route::post('/student/edit/update','ClassroomController@updateStudent')->name('student.update');
Route::get('/admin/cancel/{id}','ClassroomController@cancel')->name('admin.cancel');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<?php


Route::get('/teacher/dashboard','Teacher\DashboardController@index')->name('teacher.dashboard');
Route::get('/teacher/dashboard/{room}','Teacher\DashboardController@roomInfo')->name('teacher.dashboard.room');
Route::get('/teacher/dashboard/{room}/open','Teacher\DashboardController@open')->name('teacher.open');
Route::get('/teacher/dashboard/{room}/unlock','Teacher\DashboardController@unlock')->name('teacher.unlock');
Route::get('/teacher/dashboard/{room}/unreserve','Teacher\DashboardController@unreserve')->name('teacher.unreserve');


Route::get('/teacher/classroom/teacher','Teacher\ClassroomController@teacherRoom')->name('teacher.classroom.teacher');
Route::get('/teacher/classroom/teacher/{room}','Teacher\ClassroomController@tcalendar')->name('teacher.tcalendar');
Route::get('/teacher/classroom/teacher/date-picker/{room}','Teacher\ClassroomController@ttimePicker')->name('teacher.ttime');
Route::get('/teacher/classroom/teacher/reservation/{room}','Teacher\ClassroomController@tReservation')->name('teacher.treservation');


Route::get('/teacher/classroom/teacher_and_student','Teacher\ClassroomController@teacherAndStudentRoom')->name('teacher.classroom.teacherAndStudent');
Route::get('/teacher/classroom/teacher_and_student/{room}','Teacher\ClassroomController@tsClass')->name('teacher.tsClass');
Route::get('/teacher/classroom/teacher_and_student/class/{room}','Teacher\ClassroomController@tscalendar')->name('teacher.tscalendar');

Route::get('/teacher/profile','Teacher\ProfileController@index')->name('teacher.profile');
Route::get('/teacher/profile/edit','Teacher\ProfileController@tedit')->name('teacher.profile.edit');

Route::get('/teacher/create_class','Teacher\CreateController@index')->name('teacher.create');
Route::get('/teacher/create_class/complete','Teacher\CreateController@created')->name('teacher.created');

Route::get('/teacher/add_token','Teacher\AddController@index')->name('teacher.add');
Route::get('/teacher/add_token/choose_class','Teacher\AddController@class')->name('teacher.class');
Route::get('/teacher/add_token/choose_class/telecom01','Teacher\AddController@sid')->name('teacher.student');

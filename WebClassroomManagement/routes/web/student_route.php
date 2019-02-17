<?php

Route::get('/student/dashboard','Student\DashboardController@index')->name('student.dashboard');
Route::get('/student/dashboard/{room}','Student\DashboardController@roomInfo')->name('student.dashboard.room');

Route::get('/student/classroom/student','Student\ClassroomController@studentRoom')->name('student.classroom.student');
Route::get('/student/classroom/student/{room}','Student\ClassroomController@scalendar')->name('student.scalendar');
Route::get('/student/classroom/student/date-picker/{room}','Student\ClassroomController@stimePicker')->name('student.stime');

Route::get('/student/classroom/teacher_and_student','Student\ClassroomController@teacherAndStudentRoom')->name('student.classroom.teacherAndStudent');
Route::get('/student/classroom/teacher_and_student/{room}','Student\ClassroomController@tscalendar')->name('student.tscalendar');
Route::get('/student/classroom/teacher_and_student/date-picker/{room}','Student\ClassroomController@tstimePicker')->name('student.tstime');

Route::get('/student/history','Student\HistoryController@index')->name('student.history');
Route::get('/student/history/{room}','Student\HistoryController@roomInfo')->name('student.history.room');

Route::get('/student/join_class','Student\JoinController@index')->name('student.join');

Route::get('/student/profile','Student\ProfileController@index')->name('student.profile');

<?php

Route::get('/student/dashboard','Student\DashboardController@index')->name('student.dashboard');

Route::get('/teacher/classroom/student','Student\ClassroomController@studentRoom')->name('student.classroom.student');
Route::get('/teacher/classroom/student/{room}','Student\ClassroomController@calendar')->name('student.calendar');

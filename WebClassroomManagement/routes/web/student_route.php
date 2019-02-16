<?php

Route::get('/student/dashboard','Student\DashboardController@index')->name('student.dashboard');

Route::get('/student/classroom/student','Student\ClassroomController@studentRoom')->name('student.classroom.student');
Route::get('/student/classroom/student/{room}','Student\ClassroomController@calendar')->name('student.calendar');

Route::get('/student/classroom/teacher_and_student','Student\ClassroomController@teacherAndStudentRoom')->name('student.classroom.teacherAndStudent');

Route::get('/student/history','Student\HistoryController@index')->name('student.history');

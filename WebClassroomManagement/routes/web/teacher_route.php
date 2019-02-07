<?php


Route::get('/teacher/dashboard','Teacher\DashboardController@index')->name('teacher.dashboard');
Route::get('/teacher/classroom/teacher','Teacher\ClassroomController@teacherRoom')->name('teacher.classroom.teacher');
Route::get('/teacher/classroom/teacher/{room}','Teacher\ClassroomController@calendar')->name('teacher.calendar');
Route::get('/teacher/classroom/teacher/time-picker/{room}','Teacher\ClassroomController@timePicker')->name('teacher.time');

Route::get('/teacher/classroom/teacher_and_student','Teacher\ClassroomController@teacherAndStudentRoom')->name('teacher.classroom.teacherAndStudent');

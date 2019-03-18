<?php


Route::get('/teacher/dashboard','Teacher\DashboardController@index')->name('teacher.dashboard');
Route::get('/teacher/dashboard/{room}','Teacher\DashboardController@roomInfo')->name('teacher.dashboard.room');

Route::get('/teacher/classroom/teacher','Teacher\ClassroomController@teacherRoom')->name('teacher.classroom.teacher');
Route::get('/teacher/classroom/teacher/{room}','Teacher\ClassroomController@tcalendar')->name('teacher.tcalendar');
Route::get('/teacher/classroom/teacher/date-picker/{room}','Teacher\ClassroomController@ttimePicker')->name('teacher.ttime');

Route::get('/teacher/classroom/teacher_and_student','Teacher\ClassroomController@teacherAndStudentRoom')->name('teacher.classroom.teacherAndStudent');
Route::get('/teacher/classroom/teacher_and_student/{room}','Teacher\ClassroomController@tsClass')->name('teacher.tsClass');

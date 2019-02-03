<?php


Route::get('/teacher/dashboard','Teacher\DashboardController@index')->name('teacher.dashboard');
Route::get('/teacher/dashboard/history','Teacher\HistoryController@index')->name('teacher.history');
Route::get('/teacher/classroom/teacher','Teacher\ClassroomController@teacherRoom')->name('teacher.classroom.teacher');
Route::get('/teacher/classroom/teacher/{room}','Teacher\ClassroomController@calendar')->name('teacher.calendar');
Route::get('/teacher/dashboard/classroom/teacher_room/{room}','Teacher\ClassroomController@TeacherRoomInfo')->name('teacher.classroom.teacher_room.info');


<?php


Route::get('/teacher/dashboard','Teacher\DashboardController@index')->name('teacher.dashboard');
Route::get('/teacher/dashboard/history','Teacher\HistoryController@index')->name('teacher.history');
Route::get('/teacher/dashboard/classroom','Teacher\ClassroomController@index')->name('teacher.classroom');
Route::get('/teacher/dashboard/classroom/teacher_room','Teacher\ClassroomController@TeacherRoom')->name('teacher.classroom.teacher_room');
Route::get('/teacher/dashboard/classroom/teacher_room/{room}','Teacher\ClassroomController@TeacherRoomInfo')->name('teacher.classroom.teacher_room.info');

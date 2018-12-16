<?php

Route::get('/student/dashboard','Student\DashboardController@index')->name('student.dashboard');
Route::get('/student/profile','Student\ProfileController@index')->name('student.profile');
Route::get('/student/dashboard/history','Student\HistoryController@index')->name('student.history');

Route::get('/student/dashboard/classroom','Student\ClassroomController@index')->name('student.classroom');
Route::get('/student/dashboard/classroom/student_room','Student\ClassroomController@studentRoom')->name('student.classroom.student_room');
Route::get('/student/dashboard/classroom/teacher_and_student_room','Student\ClassroomController@teacherAndStudentRoom')->name('student.classroom.teacher_and_student_room');
Route::get('/student/dashboard/classroom/student_room/{room}','Student\ClassroomController@studentRoomInfo')->name('student.classroom.student_room.info');
Route::get('/student/dashboard/classroom/student_room/{room}/{time}','Student\ClassroomController@studentRoomTime')->name('student.classroom.student_room.info.time');

Route::get('/student/dashboard/reserve','Student\ReserveController@index')->name('student.reserve');

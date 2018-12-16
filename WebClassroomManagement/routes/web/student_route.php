<?php

Route::get('/student/dashboard','Student\DashboardController@index')->name('student.dashboard');
Route::get('/student/profile','Student\ProfileController@index')->name('student.profile');

Route::get('/student/dashboard/history','Student\HistoryController@index')->name('student.history');

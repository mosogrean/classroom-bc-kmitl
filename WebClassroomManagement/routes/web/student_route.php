<?php

Route::get('/student/dashboard','Student\DashboardController@index')->name('student.dashboard');
Route::get('/student/profile','Student\ProfileController@index')->name('student.profile');

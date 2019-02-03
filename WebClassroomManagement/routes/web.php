<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

require "web/auth.php";
require "web/admin_route.php";
require "web/student_route.php";
require "web/teacher_route.php";

Route::get('/teacher-dashboard', function (){
    return view('teacher_n.dashboard');
})->name('teacher_n.dashboard');

Route::get('/teacher-troom', function (){
   return view('teacher_n.troom');
})->name('teacher_n.troom');

Route::get('/teacher-reserv', function(){
   return view('teacher_n.reroom');
})->name('teacher_n.reroom');

Route::get('/teacher-reserve/calendar', function (\Illuminate\Http\Request $request){
    return view('teacher_n.reroom');
})->name('t-res-date');

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
    return view('index');
});

//Route::resource('posts', 'PostsController');


Route::get('dashboard', function(){
	return view('dashboard');
});

// Route::get('student', function(){
// 	return view('student');
// });

// Route::get('events', function(){
// 	return view('events');
// });

Route::get('attendance', function(){
	return view('attendance');
});

Route::get('reports', function(){
	return view('reports');
});
Route::resource('posts', 'PostsController');
Route::resource('students', 'StudentsController');
Route::resource('events', 'EventsController');
Route::resource('attendances', 'AttendancesController');
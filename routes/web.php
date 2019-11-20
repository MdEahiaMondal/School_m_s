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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//******************************** Backend ***************************************

// Auth
Route::get('/', function () {
    return redirect()->route('login');
});


// admistration
Route::resource('/admin', 'Backend\AdminController');
Route::resource('/permission', 'Backend\PermissionController');
Route::resource('/role', 'Backend\RoleController');



//teacher
Route::resource('teacher', 'Backend\TeacherController');


//Parents
Route::resource('parent', 'Backend\ParntController')->middleware('role:admin');


//Students
Route::resource('students', 'Backend\StudentController')->middleware('role:admin');

//Class
Route::resource('all_classes', 'Backend\AllClassController')->middleware('role:admin');


//Attendance
Route::resource('attendances', 'Backend\AttendanceController');

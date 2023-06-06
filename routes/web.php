<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InstructorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom'); 
Route::get('home', [LoginController::class, 'home'])->name('home');
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});
Route::resource('users', UserController::class );
Route::resource('courses', CourseController::class );
Route::resource('lectures', LectureController::class );
Route::resource('attendance', AttendanceController::class );
Route::resource('students', StudentController::class );
Route::resource('instructors', InstructorController::class );





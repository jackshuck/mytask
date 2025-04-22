<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\teachersubController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [teacherController::class, 'home'])->name('teacher.home');

Route::get('/teacher/login', [teacherController::class, 'loginForm'])->name('teacher.loginForm');

Route::post('/teacher/login', [teacherController::class, 'login'])->name('teacher.login');

Route::get('/teacher/dashboard', [teacherController::class, 'dashboard'])->name('teacher.dashboard');

Route::post('/teacher/logout', [teacherController::class, 'logout'])->name('teacher.logout');

Route::get('/teacher/dashboard/addsubject',[teacherController::class,'dashsub'])->name('teacher.dashboard.subject');


Route::get('/teacher/dashboard/addsubject',[teachersubController::class,'create'])->name('teacher.dashboard.subject');
Route::post('/teacher/dashboard/store', [teachersubController::class, 'store'])->name('teacher.dashboard.subject.store');
// Route::get('/teacher/dashboard', [teachersubController::class, 'dashboard'])->name('teacher.dashboard');

Route::get('/teacher/loginasstudent', [teacherController::class, 'loginstu'])->name('teacher.loginstu');
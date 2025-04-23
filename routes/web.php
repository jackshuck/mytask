<?php
use App\Http\Controllers\StudentAuthController;
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


Route::get('/teacher/subject/create', [TeachersubController::class, 'create'])->name('teacher.dashboard.subject.create');
Route::post('/teacher/subject/store', [TeachersubController::class, 'store'])->name('teacher.dashboard.subject.store');
Route::get('/teacher/subject/index', [TeachersubController::class, 'dashboard'])->name('teacher.dashboard.subindex');


Route::get('/register', [StudentAuthController::class, 'showRegister'])->name('student.register');
Route::post('/register', [StudentAuthController::class, 'register']);

Route::get('/login', [StudentAuthController::class, 'showLogin'])->name('student.login');
Route::post('/login', [StudentAuthController::class, 'login']);

Route::get('/welcome', [StudentAuthController::class, 'dashboard'])->name('student.welcome');

Route::post('/logout', [StudentAuthController::class, 'logout'])->name('student.logout');


Route::get('/studentshow',[StudentAuthController::class,'showStudents'])->name('dashboard.stuindex');


//crudd operation

// Student management routes
Route::get('/student/{id}/edit', [StudentAuthController::class, 'edit'])->name('teacher.dashboard.studentedit');
Route::put('/student/{id}', [StudentAuthController::class, 'update'])->name('student.update');
Route::delete('/student/{id}', [StudentAuthController::class, 'destroy'])->name('student.destroy');
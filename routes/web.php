<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\UniversitasController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/aboutus', function () {
        return view('aboutus');
    })->name('about');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('/membership', function () {
        return view('membership');
    })->name('membership');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'postRegister'])->name('register.post');

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('login.post');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/univ/{slug}', [UniversitasController::class, 'index'])->name('info.univ');

    Route::get('/course/{slug}', [CourseController::class, 'index'])->name('course.index');

    Route::get('/course/{slug}/{course}/{lesson}', [LessonController::class, 'index'])->name('lesson.index');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

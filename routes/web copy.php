<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [homeController::class, 'home'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('students', StudentController::class);
    Route::resource('dosens', DosenController::class);
    Route::resource('courses', CourseController::class);
});
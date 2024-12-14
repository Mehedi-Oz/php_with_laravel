<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

//HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');

//StudentController
Route::post('/add-student', [StudentController::class, 'index'])->name('add.student');

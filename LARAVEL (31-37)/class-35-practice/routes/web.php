<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

//HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');

//StudentController
Route::post('/add-student', [StudentController::class, 'index'])->name('add.student');
Route::get('/student-list', [StudentController::class, 'studentList'])->name('student.list');
Route::get('/edit-student/{id}', [StudentController::class, 'studentEdit'])->name('edit.student');
Route::post('/delete-student', [StudentController::class, 'StudentDelete'])->name('delete.student');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;

//HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');

//StudentController
Route::post('/add-student', [StudentController::class, 'index'])->name('add.student');
Route::get('/student-list', [StudentController::class, 'studentList'])->name('student.list');
Route::get('/edit-student/{id}', [StudentController::class, 'studentEdit'])->name('edit.student');
Route::post('/delete-student', [StudentController::class, 'studentDelete'])->name('delete.student');
Route::post('/update-student', [StudentController::class, 'studentUpdate'])->name('update.student');

//DepartmentController
Route::get('/add-department', [DepartmentController::class, 'index'])->name('add.department');
Route::get('/manage-department', [DepartmentController::class, 'index'])->name('manage.department');
Route::post('/new-department', [DepartmentController::class, 'saveDepartment'])->name('new.department');

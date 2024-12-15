<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;


//HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');


//StudentController
Route::post('/add-student', [StudentController::class, 'addStudent'])->name('add.student');
Route::get('/student-list', [StudentController::class, 'listStudent'])->name('list.student');
Route::get('/edit-student/{id}', [StudentController::class, 'editStudent'])->name('edit.student');
Route::post('/delete-student', [StudentController::class, 'deleteStudent'])->name('delete.student');
Route::post('/update-student', [StudentController::class, 'updateStudent'])->name('update.student');


//DepartmentController
Route::get('/department', [DepartmentController::class, 'index'])->name('department');
Route::post('/add-department', [DepartmentController::class, 'addDepartment'])->name('add.department');
Route::get('/department-list', [DepartmentController::class, 'listDepartment'])->name('list.department');
Route::get('/edit-department/{id}', [DepartmentController::class, 'editDepartment'])->name('edit.department');
Route::post('/delete-department', [DepartmentController::class, 'deleteDepartment'])->name('delete.department');
Route::post('/update-department', [DepartmentController::class, 'updateDepartment'])->name('update.department');

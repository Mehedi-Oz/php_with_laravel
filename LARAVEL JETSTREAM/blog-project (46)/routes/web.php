<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CommentController;


//BlogController
Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('/blog-details/{slug}', [BlogController::class, 'blogDetails'])->name('blog.details');


//CustomerController
Route::get('/register-customer', [CustomerController::class, 'index'])->name('register.customer');
Route::post('/new-customer', [CustomerController::class, 'saveCustomer'])->name('new.customer');
Route::get('/manage-customer', [CustomerController::class, 'manageCustomer'])->name('manage.customer');

Route::get('/login-customer', [CustomerController::class, 'loginCustomer'])->name('login.customer');
Route::post('/login-customer', [CustomerController::class, 'loginCheckCustomer'])->name('login.customer');
Route::get('/logout-customer', [CustomerController::class, 'logoutCustomer'])->name('logout.customer');

Route::post('/update-customer', [CustomerController::class, 'updateCustomer'])->name('customer.update');
Route::get('/edit-customer/{id}', [CustomerController::class, 'editCustomer'])->name('customer.edit');
Route::post('/delete-customer', [CustomerController::class, 'deleteCustomer'])->name('customer.delete');

Route::group(['middleware' => 'blogUser'], function () {
    Route::post('/new-comment', [CommentController::class, 'saveComment'])->name('new.comment');
});

//middleware
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //DashboardController
//    Route::post('/new-comment', [])
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    //CategoryController - CATEGORY
    Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('add.category');
    Route::post('/new-category', [CategoryController::class, 'saveCategory'])->name('new.category');
    Route::get('/manage-category', [CategoryController::class, 'manageCategory'])->name('manage.category');


    Route::post('/update-category', [CategoryController::class, 'updateCategory'])->name('category.update');
    Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory'])->name('category.edit');
    Route::get('/status-category/{id}', [CategoryController::class, 'statusCategory'])->name('category.status');
    Route::post('/delete-category', [CategoryController::class, 'deleteCategory'])->name('category.delete');


    //AuthorController - AUTHOR
    Route::get('/add-author', [AuthorController::class, 'addAuthor'])->name('add.author');
    Route::post('/new-author', [AuthorController::class, 'saveAuthor'])->name('new.author');
    Route::get('/manage-author', [AuthorController::class, 'manageAuthor'])->name('manage.author');


    Route::post('/update-author', [AuthorController::class, 'updateAuthor'])->name('author.update');
    Route::get('/edit-author/{id}', [AuthorController::class, 'editAuthor'])->name('author.edit');
    Route::get('/status-author/{id}', [AuthorController::class, 'statusAuthor'])->name('author.status');
    Route::post('/delete-author', [AuthorController::class, 'deleteAuthor'])->name('author.delete');

    //BlogController - BLOG
    Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('add.blog');
    Route::post('/new-blog', [BlogController::class, 'saveBlog'])->name('new.blog');
    Route::get('/manage-blog', [BlogController::class, 'manageBlog'])->name('manage.blog');


    Route::post('/update-blog', [BlogController::class, 'updateBlog'])->name('blog.update');
    Route::get('/edit-blog/{id}', [BlogController::class, 'editBlog'])->name('blog.edit');
    Route::get('/status-blog/{id}', [BlogController::class, 'statusBlog'])->name('blog.status');
    Route::post('/delete-blog', [BlogController::class, 'deleteBlog'])->name('blog.delete');
});

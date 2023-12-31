<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [SubjectController::class, 'index']);
// Route::get('/subjects/create', [SubjectController::class, 'create']);
// Route::post('/subjects/add', [SubjectController::class, 'store']);
// Route::get('/subjects/edit/{id}', [SubjectController::class, 'edit']);
// Route::post('/subjects/update/', [SubjectController::class, 'update']);
// Route::delete('/subjects/delete/{id}', [SubjectController::class, 'destroy'])->name('subjects.destroy');

// Route::get('/users', [UserController::class, 'index']);
// Route::get('/users/create', [UserController::class, 'create']);
// Route::post('/users/add', [UserController::class, 'store']);
// Route::get('/users/{id}/edit', [UserController::class, 'edit']);
// Route::post('/users/update/', [UserController::class, 'update']);
// Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::resource('/subjects', '\App\Http\Controllers\SubjectController');
Route::resource('/users', '\App\Http\Controllers\UserController');

Route::get('/user_subjects/{id}', [UserController::class, 'user_subjects']);
Route::get('/user_subjects/add/{id}', [UserController::class, 'add_user_subjects']);
Route::post('/users_subjects/post', [UserController::class, 'post_user_subjects'])->name('user_subjects.add');

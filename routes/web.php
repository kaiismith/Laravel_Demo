<?php

use App\Http\Controllers\CategoriesController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Mockery\Generator\StringManipulation\Pass\Pass;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/post') -> group(function () {
    Route::get('/index', [PostController::class, 'index'])->name('post.index');

    Route::get('/list', [PostController::class, 'list'])->name('post.list');

    Route::get('/create', [PostController::class, 'create'])->name('post.create');

    Route::post('/create', [PostController::class, 'handleCreate']);

    Route::get('/info/{id}', [PostController::class, 'info'])->name('post.info')->where('id', '[0-9]+');

    Route::get('/update/{id}', [PostController::class, 'update'])->name('post.edit')->where('id', '[0-9]+');

    Route::post('/update/{id}', [PostController::class, 'handleUpdate'])->where('id', '[0-9]+')->name('post.update');

    Route::get('/delete/{id?}', [PostController::class, 'delete'])->where('id', '[0-9]+')->name('post.delete');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('users') -> group(function () {
    Route::get('/create', [UserController::class, 'create']);

    Route::post('/create', [UserController::class, 'store']);

    Route::get('update/{id}', [UserController::class, 'edit']);
    Route::post('update/{id}', [UserController::class, 'update']);

    Route::get('/delete/{id}', [UserController::class, 'delete']);

    // Read user
    Route::get('/', [UserController::class, 'index']);
});


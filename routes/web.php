<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Mockery\Generator\StringManipulation\Pass\Pass;
use Illuminate\Support\Facades\Auth;

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
    Route::get('/index', 'UserController@list')->name('user.list');
    Route::get('/create', 'UserController@create')->name('user.create');
    Route::get('/profile/{id?}', 'UserController@profile')->name('user.profile')->where('id', '[0,9]+');
    Route::get('/update/{id?}', 'UserController@update')->where('id', '[0, 9]+');
    Route::get('/delete/{id?}', 'UserController@delete')->where('id', '[0, 9]+');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

# Usamos el controlador 
use App\Http\Controllers;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [PageController::class, 'posts']);
Route::get('blog/{post:slug}', [PageController::class, 'post'])->name('post');

Auth::routes();
Route::resource('/post', PostController::class)
    ->middleware('auth')
    ->except('show');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

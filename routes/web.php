<?php

use Illuminate\Support\Facades\Route;



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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [\App\Http\Controllers\HomeController::class, 'create'])->name('posts.create');
Route::post('/', [\App\Http\Controllers\HomeController::class, 'store'])->name('posts.store');

Route::get('/page/about', [\App\Http\Controllers\PageController::class, 'show'])->name('page.about');






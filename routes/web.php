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

//Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
//Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');

Route::get('/page/about', [\App\Http\Controllers\PageController::class, 'show'])->name('page.about');

Route::match(['get', 'post'],'/send', [\App\Http\Controllers\ContactController::class, 'send']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('register', [\App\Http\Controllers\User\UserController::class, 'create'])->name('register.create');
    Route::post('register', [\App\Http\Controllers\User\UserController::class, 'store'])->name('register.store');
    Route::get('login', [\App\Http\Controllers\User\UserController::class, 'loginForm'])->name('login.create');
    Route::post('login', [\App\Http\Controllers\User\UserController::class, 'login'])->name('login');
});

Route::get('logout', [\App\Http\Controllers\User\UserController::class, 'logout'])->name('logout')->middleware('auth');

Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\MainController::class, 'index']);
});




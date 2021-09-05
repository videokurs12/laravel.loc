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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/test', [\App\Http\Controllers\HomeController::class, 'test']);
Route::get('/test2', [\App\Http\Controllers\Test\TestController::class, 'index']);
Route::get('/page/{slug}', [\App\Http\Controllers\PageController::class, 'show']);

Route::fallback(function () {
//    return redirect()->route('home');
    abort(404, 'Oops! Page not found...');
});



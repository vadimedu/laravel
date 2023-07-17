<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/news', [NewsController::class, 'index'])
    -> name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])
    -> name('news.show');
Route::get('/login', [LoginController::class, 'login'])
    ->name('auth.login');
Route::get('/create', [NewsController::class, 'create'])
    -> name('news.create');
Route::post('/store', [NewsController::class, 'store'])
    -> name('news.store');
    // ['get', 'post'],
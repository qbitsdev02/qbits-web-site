<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SendController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\App;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::post('/send', [SendController::class, 'send'])->name('send');

Route::get('/lang/{locale}', [HomeController::class, 'changeLang'])->name('change_language');

Route::view('/blog','blog.index');
<?php

use App\Http\Controllers\PageController;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class,'showHome'])->name('home');
Route::get('/about', [PageController::class,'showAbout'])->name('about');
Route::get('/shop', [PageController::class,'showShop'])->name('shop');
Route::get('/contact', [PageController::class,'showContact'])->name('contact');
Route::get('/product', [PageController::class,'showProduct'])->name('product');
Route::get('/users', [PageController::class,'showUsers'])->name('users');
Route::get('/user/{id}', [PageController::class,'showUser'])->name('user');
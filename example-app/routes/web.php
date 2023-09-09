<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/firstpage','firstpage');

Route::get('/secondpage', function () {
    return "<h1>Second Page</h1>";
});

Route::get('/secondpage/{name},{age}', function (string $name,int $age) {

    return "<h1>Dear $name, you are $age years old.</h1>";
});

<?php

use Illuminate\Support\Facades\Route;

function getUsers() {
    return [
        1 => ['name'=>"Taha Tehseen", "city"=>"Karachi", "gender"=>"male"],
        2 => ['name'=>"Asad Azam", "city"=>"Islamabad", "gender"=>"male"],
        3 => ['name'=>"Tooba Jawaid", "city"=>"Karachi", "gender"=>"female"],
        4 => ['name'=>"Saad Khurram", "city"=>"Karachi", "gender"=>"male"],
        5 => ['name'=>"Hamza Ali Shah", "city"=>"Karachi", "gender"=>"male"]
    ];
}

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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/users', function () {    
    // $name = "Ali Raza";

    // return view('users',["user" => $name, "city" => "Karachi"]);
    $students = getUsers();

    return view('users',['users' => $students]);
})->name('users');

Route::get('/user/{id}', function ($id) {
    $students = getUsers();
    $student = $students[$id];
    return view('user',["user" => $student]);
})->name('user');

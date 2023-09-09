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
    return view('home');
})->name('home');

Route::get('/page',function() {
    return view('mypage');
});

Route::get('/user',function() {
    return "<h1>User Page</h1>";
});

Route::get('/user/{name}',function(string $username) {

    return "<h1>Welcome $username</h1>";    
});
Route::get('/user/{name}/id/{id}',function(string $username,string $id) {

    return "<h1>Welcome $username</h1>" . "<h2>ID : $id</h2>";
})->whereAlpha('name')->whereNumber('id');

// Route::get('/page/first-page', function () {
//     return view('first');
// })->name('first');
// Route::get('/page/second-page', function () {
//     return view('second');
// })->name('second');
// Route::get('/page/third-page', function () {
//     return view('third');
// })->name('third');

Route::prefix('page')->group(function(){
    Route::get('/first-page', function () {
        return view('first');
    })->name('first');
    Route::get('/second-page', function () {
        return view('second');
    })->name('second');
    Route::get('/third-page', function () {
        return view('third');
    })->name('third');
});

Route::fallback(function () {
    return view('fallback');    
});

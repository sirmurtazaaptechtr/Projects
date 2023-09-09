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
Route::get('/old', function () {
    return view('oldwelcome');
});
Route::get('/new',function(){
    return view('newwelcome');
});
Route::get('/simple',function(){
    return "<h1>This is Simple Page</h1>";
});
Route::get("/new/about",function (){
    return view('aboutus');
});
Route::get("/new/profile/{empName?}-{empAge?}",function (string $empName = null,string $empAge = null){
    if(empty($empName) || empty($empAge)){
        return "<h1>Welcome Guest</h1>";        
    }else{
        return "<h1>Welcome $empName</h1>" . "<h2>You are $empAge years old</h2>";
    }
});
Route::get("/new/post/{number?}",function (string $id = null){
    if($id){
        return "<h1>Post Number : $id</h1>";
    }else{
        return "<h1>No Post Available<h1>";
    }    
});
Route::get("/old/post/{number?}",function (string $id = null){
    if($id){
        return "<h1>Post Number : $id</h1>";
    }else{
        return "<h1>No Post Available<h1>";
    }    
})/*->whereNumber('number')*//*->whereAlpha('number')*//*->whereAlphaNumeric('number')*//*->whereIn('number',[12,"Alibaba"])*/->where('number','[0-9]+');

Route::get("/page/products",function(){
    return view('first');
})->name('first');
Route::get("/page/services",function(){
    return view('second');
})->name('second');
Route::get("/page/locations",function(){
    return view('third');
})->name('third');
Route::fallback(function () {
    return "<h1>Page not foud.</h1>";
    
});
<?php

use App\Http\Controllers\EmployeeController;
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
    return view('welcome')->name('home');
});
Route::get('/newEmployee', function () {
    return view('newEmployee');
})->name('newEmployee');

Route::get('/employees',[EmployeeController::class,'showEmployees'])->name('employees');
Route::get('/allemployees',[EmployeeController::class,'viewEmployees'])->name('allemployees');
Route::get('/employee/{id}',[EmployeeController::class,'showEmployee'])->name('employee');
Route::get('/dropCity',[EmployeeController::class,'showCities'])->name('dropCity');
Route::get('/deleteEmployee/{id}',[EmployeeController::class,'deleteEmployee'])->name('deleteEmployee');
Route::post('/addEmployee',[EmployeeController::class,'addEmployee'])->name('addEmployee');

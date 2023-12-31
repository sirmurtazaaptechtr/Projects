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
    return view('welcome');
});
Route::get('/addnewemployee', function () {
    return view('addnewemployee');
})->name('addNewEmployee');

Route::get('/employees',[EmployeeController::class,'ShowAllEmployees'])->name('employees');
Route::get('/employee/{id}',[EmployeeController::class,'ShowEmployee'])->name('employee');
Route::get('/deleteEmployee/{id}',[EmployeeController::class,'deleteEmployee'])->name('deleteEmployee');
Route::post('/addEmployee',[EmployeeController::class,'addEmployee'])->name('addEmployee');

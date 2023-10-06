<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function ShowAllEmployees () {
        $employees = DB::table('employees')->paginate(10);
        // return $employees;
        // dd($employees);
        return view('employees',['employees' => $employees]);
    }
    public function ShowEmployee ($id) {
        $employee = DB::table('employees')->where('id','=',$id)->get();
        // return $employee;
        // dd($employee);
        return view('employee',['employee' => $employee]);
    }
    public function deleteEmployee ($id) {
        $isDeleted = DB::table('employees')->where('id','=',$id)->delete();
        if($isDeleted) {
            echo '<div class="alert alert-success">
            <strong>Employee is Deleted!</strong> Go to <a href="/employees" class="alert-link">All Employees List</a>.
          </div>';
        }else {
            echo '<div class="alert alert-danger">
            <strong>Employee is not Deleted!</strong> Go to <a href="/employees" class="alert-link">All Employees List</a>.
          </div>';
        }
    }
    public function addEmployee (Request $req) {
        $isAdded = DB::table('employees')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'age' => $req->age,
            'phone' => $req->phone,
            'address' => $req->address,
            'city' => $req->city,
            'country' => $req->country            
        ]);
        if($isAdded) {
            echo '<div class="alert alert-success">
            <strong>Employee is Added!</strong> Go to <a href="/employees" class="alert-link">All Employees List</a>.
          </div>';
        }else {
            echo '<div class="alert alert-danger">
            <strong>Employee is not Added!</strong> Go to <a href="/employees" class="alert-link">All Employees List</a>.
          </div>';

        }

    }
}

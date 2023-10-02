<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function ShowAllEmployees () {
        $employees = DB::table('employees')->get();
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
}

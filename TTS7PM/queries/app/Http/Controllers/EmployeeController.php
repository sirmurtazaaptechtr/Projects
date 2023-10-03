<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function showEmployees () {
        // $employees = DB::table('employees')->get();
        $employees = DB::table('employees')->paginate(5);
        return view('employees',['employees' => $employees]);        
    }
    public function showEmployee ($id) {
        $employee = DB::table('employees')->where('id','=',$id)->get();
        return view('employee',['employee' => $employee]);
    }
}

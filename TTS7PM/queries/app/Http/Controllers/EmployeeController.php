<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\employee;

use function Laravel\Prompts\select;

class EmployeeController extends Controller
{    
    public function viewEmployees() {
        $employees = new employee;
        $data = $employees::all();
        
        return view('allemployees',['employees' => $data]);
        // return $data;
    }
    public function showEmployees () {
        // $employees = DB::table('employees')->get();
        $employees = DB::table('employees')->paginate(5);
        return view('employees',['employees' => $employees]);        
    }
    public function showEmployee ($id) {
        $employee = DB::table('employees')->where('id','=',$id)->get();
        return view('employee',['employee' => $employee]);
    }
    public function showCities () {
        $cities = DB::table('employees')->select('city')->distinct('city')->orderBy('city')->get();
        return view('dropdown',compact('cities'));
    }
    public function deleteEmployee ($id) {
        $isEmployeeDeleted = DB::table('employees')->where('id','=',$id)->delete();        
        if($isEmployeeDeleted){
            echo "<h1>Employee Deleted Successfully</h1>";
        }else{
            echo "<h1>Employee not Deleted</h1>";
        }
    }
    public function addEmployee (Request $req) {
        $isEmployeeAdded = DB::table('employees')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'age' => $req->age,
            'phone' => $req->phone,
            'address' => $req->address,
            'city' => $req->city,
            'country' => $req->country,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if($isEmployeeAdded) {
            echo "<h1>Employee added Successfully</h1>";
        }else{
            echo "<h1>Employee not added</h1>";
        }
    }    
}

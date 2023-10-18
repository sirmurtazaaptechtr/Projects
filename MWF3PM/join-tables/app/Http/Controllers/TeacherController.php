<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function showTeachers() {
        $teachers = DB::table('teachers')        
            ->join('cities','teachers.city_id','=','cities.id')
            ->select('teachers.*','cities.city_name')
            ->get();
        return $teachers;        
    }

    public function showAll() {
        $students = DB::table('students')
            ->select('name','email');              
        $all = DB::table('teachers')
            ->select('name','email')
            ->union($students)
            ->get();
        return $all;

    }
}

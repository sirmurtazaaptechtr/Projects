<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents () {
        $students = DB::table('students')
            ->join('cities','students.city_id','=','cities.id')
            // ->select('students.*','cities.city_name')
            // ->select('students.id','students.name','students.email','students.age','cities.city_name')
            // ->select(DB::raw('count(*) as student_count'),'students.age')
            ->select(DB::raw('count(*) as student_count'),'city_name')
            // ->groupBy('age')
            ->groupBy('city_name')            
            // ->where('cities.city_name','=','Kohat')
            ->orderBy('student_count','DESC')
            ->get();
        return $students;
    }
}

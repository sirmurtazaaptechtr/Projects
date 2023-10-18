<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent (Request $req) {
        $req->validate([
            "name" => 'required',
            "email" => 'required',
            "age" => 'required',
            "city" => 'required',
        ]);

        return $req->all();
    }
}

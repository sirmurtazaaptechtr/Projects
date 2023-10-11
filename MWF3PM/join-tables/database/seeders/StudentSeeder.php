<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json_data = File::get(path:'database/json/students.json');
        $students = collect(json_decode($json_data));        

        $students->each(function($student) {
            student::create([
                'name'=> $student->name,
                'age'=> $student->age,
                'email'=> $student->email,
                'city_id'=> $student->city_id         
            ]);            
        });
    }
}

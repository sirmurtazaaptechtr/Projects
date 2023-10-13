<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json_data = File::get(path:'database/json/teachers.json');
        $teachers = collect(json_decode($json_data));        

        $teachers->each(function($teacher) {
            teacher::create([
                'name'=> $teacher->name,
                'age'=> $teacher->age,
                'email'=> $teacher->email,
                'city_id'=> $teacher->city_id         
            ]);            
        });
    }
}

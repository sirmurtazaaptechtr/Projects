<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // student::create([
        //     'name' => 'Ali Baba',
        //     'gender' => 'male',
        //     'dob' => '2005-12-22'
        // ]);
        $students = collect([
            [
                'name' => 'Saad Khurram',
                'gender' => 'male',
                'dob' => '2006-05-02'
            ],
            [
                'name' => 'Sakina Qasim',
                'gender' => 'female',
                'dob' => '2003-1-18'
            ],
            [
                'name' => 'Hamza Shah',
                'gender' => 'male',
                'dob' => '2004-09-10'
            ],
            [
                'name' => 'Nabeel Shah',
                'gender' => 'male',
                'dob' => '2005-11-10'
            ],
            [
                'name' => 'Asad Azam',
                'gender' => 'male',
                'dob' => '1998-12-11'
            ],
            [
                'name' => 'Anas Khan',
                'gender' => 'male',
                'dob' => '1996-04-10'
            ],
            [
                'name' => 'Dua Naeem',
                'gender' => 'female',
                'dob' => '1999-04-28'
            ],
            [
                'name' => 'Syeda Tooba',
                'gender' => 'female',
                'dob' => '2001-11-07'
            ],
            [
                'name' => 'Moiz Shah',
                'gender' => 'male',
                'dob' => '1998-07-08'
            ],
            [
                'name' => 'Khurram Ashraf',
                'gender' => 'male',
                'dob' => '2001-03-11'
            ],
            [
                'name' => 'Abdul Rehman',
                'gender' => 'male',
                'dob' => '2004-08-23'
            ]
        ]);
        $students->each(function($student){
            student::create($student);
        });
    }
}

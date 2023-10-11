<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\city;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json_data = File::get(path:'database/json/cities.json');
        $cities = collect(json_decode($json_data));        

        $cities->each(function($city) {
            city::create([
                'city_name'=> $city->name,
                'lat'=> $city->lat,
                'lng'=> $city->lng                
            ]);            
        });
    }
}

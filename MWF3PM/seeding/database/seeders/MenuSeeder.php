<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json_data = File::get(path:'database/json/menuitems.json');
        $menuitems = collect(json_decode($json_data));

        $menuitems->each(function($menuitem) {
            menu::create([
                'name'=> $menuitem->name,
                'price'=> $menuitem->price,
                'description'=> $menuitem->description,
                'calories'=> $menuitem->calories
            ]);            
        });
    }
}

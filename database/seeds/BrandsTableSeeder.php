<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Brand::create([
            "name" => "The Gap"
        ]);
        \App\Brand::create([
            "name" => "Viettien"
        ]);
    }
}

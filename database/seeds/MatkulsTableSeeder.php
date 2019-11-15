<?php

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MatkulsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1;$i <= 10;$i++) {
        	DB::table('matkul')->insert([
        		'name' => 'B. Jawa',
        		'sks' => rand(1, 9),
        		'cemester' => rand(1, 12),
        		
        	]);
        }
    }
}

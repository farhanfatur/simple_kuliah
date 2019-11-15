<?php

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DosensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
        for($i = 1;$i <= 5;$i++) {
        	DB::table('dosen')->insert([
        		'name' => $faker->name('female'),
        		'age' => rand(25, 40),
        		'gender' => "Female",
        		'address' => $faker->address,
        		'lesson' => 'Gonjal Gonjol Maha Asyik',
        		'degree' => "s3 marketing",
        		'created_at' =>  $faker->date(),
        	]);
        }
    }
}

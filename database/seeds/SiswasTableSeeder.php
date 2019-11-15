<?php

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SiswasTableSeeder extends Seeder
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
        	DB::table('siswa')->insert([
        		'name' => $faker->name,
        		'age' => rand(19, 25),
        		'jurusan' => 'Pertanian',
        		'birth' => $faker->date(),
        		'address' => $faker->address,
        		'created_at' => $faker->dateTime(),
        	]);
        }
    }
}

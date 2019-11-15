<?php

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KelasesTableSeeder extends Seeder
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
	        DB::table('kelas')->insert([
	        	"room" => $i." room",
	        	"lesson_hour" => "12:00-12:45",
	        	"dosen_id" => rand(1, 5),
	        	"matkul_id" => rand(1, 10),
	        ]);
        }
    }
}

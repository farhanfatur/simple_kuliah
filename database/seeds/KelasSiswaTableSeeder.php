<?php

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KelasSiswaTableSeeder extends Seeder
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
        	Db::table('kelas_siswa')->insert([
        		'siswa_id' => rand(1, 10),
        		'kelas_id' => rand(1, 10),
        	]);
        }
    }
}

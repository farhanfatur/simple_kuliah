<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(DosensTableSeeder::class);
        $this->call(SiswasTableSeeder::class);
        $this->call(MatkulsTableSeeder::class);
        $this->call(MatkulSiswaTableSeeder::class);
    }
}

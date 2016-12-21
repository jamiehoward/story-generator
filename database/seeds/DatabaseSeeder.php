<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(\App\Database\Seeds\OccupationsTableSeeder::class);
        $this->call(\App\Database\Seeds\AttributesTableSeeder::class);
        $this->call(\App\Database\Seeds\CharactersTableSeeder::class);
    }
}

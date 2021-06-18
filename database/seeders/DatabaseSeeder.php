<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\EventTypesTableSeeder;
use Database\Seeders\LocationsTypesTableSeeder;
use Database\Seeders\VenuesTableSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            EventTypesTableSeeder::class,
            LocationsTypesTableSeeder::class,
            VenuesTableSeeder::class,

        ]);
    }
}

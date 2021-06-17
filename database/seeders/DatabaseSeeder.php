<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EventType;
use Database\Seeders\EventTypesTableSeeder;
use Database\Seeders\LocationsTypesTableSeeder;


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

        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class LocationsTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            'Vorarlberg',
            'Salzburg',
            'Wien',
            'Linz',
            'Graz',
            'St. Pölten',
            'Eisenstadt'
        ];
        foreach ($locations as $location) {
            $slug = Str::slug($location);
            Location::create([
                'name' => $location,
                'slug' =>  $slug

            ]);
        }
    }
}

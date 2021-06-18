<?php

namespace Database\Factories;

use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VenueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Venue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name;

        return [
            'name' => $this->faker->name(),
            'slug' => Str::slug($name),
            'address' => $this->faker->address,
            // 'latitude' => rand(-20, 20),
            // 'longitude' => rand(-20, 20),


        ];
    }
}

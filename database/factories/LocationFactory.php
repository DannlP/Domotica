<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class LocationFactory extends Factory
{
    protected $model = Location::class;

    public function definition()
    {
        $faker = Faker::create();

        return [
            'nombre' => $faker->company,
            'descripcion' => $faker->sentence,
            'direccion' => $faker->address,
        ];
    }
}
<?php

use Illuminate\Database\Seeder;
use App\Models\Location;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Location::factory()->count(10)->create();
        // Agrega más seeders si es necesario
    }
}
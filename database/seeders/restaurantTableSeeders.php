<?php

namespace Database\Seeders;

use App\Models\Restaurants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class restaurantTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurants::factory(20)->create();
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Country;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $continents = [
            ['name' => 'Europe',],
            ['name' => 'Asia',],
            ['name' => 'Africa',],
            ['name' => 'South America',],
            ['name' => 'North America',],
        ];

        foreach ($continents as $continent) {
            \App\Models\Continent::factory()->create($continent)
                ->each(function ($c) {
                    $c->countries()->saveMany(Country::factory(10)->make());
                });
        }

        Product::factory(100)->create();
    }
}

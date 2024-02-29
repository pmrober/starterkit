<?php

namespace Database\Seeders;

use Faker\Generator;

use App\Models\Publication;

use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker)
    {
        Publication::factory(100)->create();
    }
}

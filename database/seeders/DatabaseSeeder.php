<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Address;
use Illuminate\Database\Seeder;

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
             //UsersSeeder::class,
            // RolesPermissionsSeeder::class,
            //CategorySeeder::class,
            //PublicationSeeder::class
            SectionSeeder::class
        ]);

        
        //\App\Models\User::factory(5)->create();

        //Address::factory(5)->create();

       
    }
}

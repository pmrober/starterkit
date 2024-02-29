<?php

namespace Database\Seeders;

use App\Models\PublicationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PublicationType::create([
            'name' => 'Oferta',
            'description' => '',
            'value' => 'offer'
        ]);
        PublicationType::create([
            'name' => 'Demanda',
            'description' => '',
            'value' => 'demand'
        ]);
        PublicationType::create([
            'name' => 'Difusión',
            'description' => '',
            'value' => 'diffusion'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Section;
class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Section::create([
            'name' => 'Celebridades',
            'description' => ''
        ]);
        Section::create([
            'name' => 'Política',
            'description' => 'Política'
        ]);
        Section::create([
            'name' => 'Deporte',
            'description' => ''
        ]);
        Section::create([
            'name' => 'Cultura',
            'description' => ''
        ]);
        Section::create([
            'name' => 'Economía',
            'description' => ''
        ]);
        Section::create([
            'name' => 'Sociedad',
            'description' => ''
        ]);
        Section::create([
            'name' => 'Ciencia y tecnología',
            'description' => ''
        ]);
        Section::create([
            'name' => 'Medios de comunicación',
            'description' => ''
        ]);
    }
}

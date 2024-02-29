<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::truncate();
        
        $json = Storage::disk('local')->get('/json/country.json');
        $data = json_decode($json, true);
        
            foreach ($data as $value)
            {  
                Country::query()->updateOrCreate([
                    'name' => $value['name'],
                    'cca2' => $value['cca2'],
                    'ccn3' => $value['ccn3'],
                    'cca3' => $value['cca3'],
                    'cioc' => $value['cioc'],
                    'timezone' => $value['timezone'],
                    'currency' => $value['currency'],
                    'callingcode' => $value['callingcode'],
                    'flag' => $value['flag'],
                    'status' => $value['status'],
                ]);    
            }
    }
}

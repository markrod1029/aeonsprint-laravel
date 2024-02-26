<?php

namespace Database\Seeders;


use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
     
        $csvFilePath = base_path('storage/data/services.csv');
        $file = fopen($csvFilePath, 'r');
        
        // read header one line but not include
        $headers = fgetcsv($file);

        while(($data = fgetcsv($file)) !== false):
            Service::create([
                'name' => $data[0],
            ]);
        endwhile;  
    }
}

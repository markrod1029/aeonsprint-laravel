<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $csvFilePath = base_path('storage/data/project.csv');
        $file = fopen($csvFilePath, 'r');

        // read header one line but not include
        $header = fgetcsv($file);

        while(($data = fgetcsv($file)) !== false ):

            Project::create([
                'name' => $data[0],
                'image' => $data[1],
                'description' => $data[2],
                'service_id' => $data[3]
            ]);

        endwhile;
    }
}

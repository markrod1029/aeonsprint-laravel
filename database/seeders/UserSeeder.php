<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         
        $csvFilePath = base_path('storage/data/users.csv');
        $file = fopen($csvFilePath, 'r');
        
        // read header one line but not include
        $headers = fgetcsv($file);

        while(($data = fgetcsv($file)) !== false):
            User::create([
                'name' => $data[0],
                'email' => $data[1],
                'password' => $data[2]
            ]);
        endwhile;  
    }
}

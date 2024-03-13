<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('settings')->insert([

            [
                'key' => 'app_name',
                'value' => 'Test App',
                'created_at' => now()->today()
            ],
            
            [
                'key' => 'date_format',
                'value' => 'MM/DD/YYYY',
                'created_at' => now()->today()

            ],

            [
                'key' => 'pagination_limit',
                'value' => '10',
                'created_at' => now()->today()

            ],

        ]);
    }
}

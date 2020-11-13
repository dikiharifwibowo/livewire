<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'YK 001',
                'airline' => 'Garuda Airlines',
            ],
            [
                'name' => 'YK 002',
                'airline' => 'Air Asia',
            ]
        ];
        DB::table('flights')->insert($data);
    }
}

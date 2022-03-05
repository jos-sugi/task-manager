<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Period;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Period::create([
        //     'start_time' => '9:00',
        //     'end_time' => '10:20',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        Period::create([
            'start_time' => '10:30',
            'end_time' => '12:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Period::create([
            'start_time' => '13:00',
            'end_time' => '14:20',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Period::create([
            'start_time' => '14:30',
            'end_time' => '15:50',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Period::create([
            'start_time' => '16:00',
            'end_time' => '17:20',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Period::create([
            'start_time' => '17:30',
            'end_time' => '18:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

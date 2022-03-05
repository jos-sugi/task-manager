<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PeriodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'start_time' => rand(1, 10),
            'discription' =>  Str::random(10),
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Jiri;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class JiriFactory extends Factory
{
    protected $model = Jiri::class;

    public function definition(): array
    {
        return [
            'name_project' => fake()->sentence(1),
            'description'  => fake()->paragraph(),
            'date_jiri'    => fake()->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'hours_start'  => '09:00',
            'hours_end'    => '12:00',
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\EvaluatorEmail;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class EvaluatorEmailFactory extends Factory
{
    protected $model = EvaluatorEmail::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

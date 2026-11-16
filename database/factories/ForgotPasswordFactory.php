<?php

namespace Database\Factories;

use App\Models\ForgotPassword;
use Illuminate\Database\Eloquent\Factories\Factory;

class ForgotPasswordFactory extends Factory
{
    protected $model = ForgotPassword::class;

    public function definition(): array
    {
        return [
            'title' => fake()->paragraph(),
            'content' => serialize(fake()->paragraphs(5)),
        ];
    }
}

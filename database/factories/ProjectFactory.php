<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'name_project' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'link' => fake()->url(),
            'task' => fake()->optional()->sentence(),
        ];
    }
}

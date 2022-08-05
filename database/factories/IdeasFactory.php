<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
require_once 'vendor/autoload.php';

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ideas>
 */
class IdeasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->text(15),
            'description' => fake()->sentence(),
            'author' => fake()->name(),
        ];
    }
}

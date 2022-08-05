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
        $faker = Faker\Factory::create();
        return [
            'title' => $faker->title(),
            'description' => $faker->sentence(),
            'author' => $faker->author(),
        ];
    }
}

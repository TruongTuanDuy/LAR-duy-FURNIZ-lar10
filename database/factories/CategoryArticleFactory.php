<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryArticle>
 */
class CategoryArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->text($maxNbChars = 50),
            'status' => fake()->randomElement(['Chưa kích hoạt', 'Đã kích hoạt']),
            'ordering' => fake()->numberBetween($min = 1, $max = 10),
            'created_by' => fake()->userName($maxNbChars = 5),
            'updated_by' => fake()->userName($maxNbChars = 5),
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
        ];
    }
}

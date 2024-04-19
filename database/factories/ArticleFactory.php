<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
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
            'description' => fake()->text($maxNbChars = 100),
            'content' => fake()->text($maxNbChars = 1000),
            'category_article_id' => fake()->numberBetween($min = 1, $max = 20),
            'status' => fake()->randomElement([0, 1]),
            'ordering' => fake()->numberBetween($min = 1, $max = 10),
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
        ];
    }
}

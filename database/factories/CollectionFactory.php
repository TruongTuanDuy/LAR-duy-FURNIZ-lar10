<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Collection>
 */
class CollectionFactory extends Factory
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
            'name' => fake()->name(),
            'status' => fake()->randomElement(['Chưa kích hoạt', 'Đã kích hoạt']),
            'ordering' => fake()->numberBetween($min = 1, $max = 10),
            'created_by' => fake()->name(),
            'updated_by' => fake()->name(),
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
        ];
    }
}

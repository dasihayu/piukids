<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articles>
 */
class ArticlesFactory extends Factory
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
            // 'category_id'=>mt_rand(1,5),
            // 'title'=>fake()->slug(),
            // 'author'=>fake()->name(),
            // 'content'=>fake()->text()
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    //protected $model = Post::class;

    public function definition(): array
    {
        return [
            // 'title' => $this->faker->sentence(),
            // 'slug' => Str::slug($this->faker->sentence()),
            // 'description' => $this->faker->paragraph(),
            // 'visibility' => $this->faker->randomElement(['public', 'private']),
            // 'audience' => $this->faker->randomElement(['for_kids', 'not_for_kids']),
            // 'restrictions' => $this->faker->word(),
            // 'views' => $this->faker->numberBetween(0, 1000),
            // 'user_id' => \App\Models\User::factory()->create()->id,
            // 'category_id' => \App\Models\Category::factory()->create()->id,
        ];
    }
}

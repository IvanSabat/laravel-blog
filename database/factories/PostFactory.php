<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomElement(User::all()->pluck('id')->toArray()),
            'slug' => $this->faker->slug(),
            'title' => $this->faker->sentence(),
            'excerpt' => $this->faker->paragraph(),
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(10)) . '</p>'
        ];
    }
}

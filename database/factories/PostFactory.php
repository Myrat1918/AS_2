<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = User::inRandomOrder()->first();  $userId = User::inRandomOrder()->first();
        $categoryId = Category::inRandomOrder()->first();
        $viewCount = fake()->numberBetween(0, 1000);
        return[
            'user_id' => $userId,
            'category_id' => $categoryId,
            'title' => fake()->sentence(),
            'content' => fake()->paragraph(),
            'view_count' => $viewCount,
            'like_count' => fake()->numberBetween(0, $viewCount),
        ];
    }

    /**
     * Indicate that the post should be highly engaging (many views and likes).
     * * @return static
     */

}

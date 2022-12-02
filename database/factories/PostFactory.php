<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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

    protected $model = Post::class;
    
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'description'=> $this->faker->text,
            // 'cat_id' => Category::factory(),
            'cat_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'slug' => $this->faker->slug,
        ];
    }
}

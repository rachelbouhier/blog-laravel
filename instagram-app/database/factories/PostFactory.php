<?php

namespace Database\Factories;

use App\Models\Post;
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
     * @return array
     */
    public function definition()
    {
    return [
        'description' => $this->faker->text(),
        'img_url' => "https://placeimg.com/640/480/animals",
        'user_id' => 1
        ];
    }
}

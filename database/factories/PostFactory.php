<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'content'=>$this->faker->text(400),
            'date_written'=>now(),
            'featured_image'=>$this->faker->imageUrl(),
            'vote_up' => $this->faker->numberBetween(1,100),
            'vote_down' => $this->faker->numberBetween(1,100),
            'user_id'=>$this->faker->numberBetween(1,50),
            'category_id'=>$this->faker->numberBetween(1,15),

        ];
    }
}

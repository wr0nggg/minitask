<?php

namespace Database\Factories;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    protected $model = Posts::class;

    public function definition(): array
    {
        return [
            'creator_id' => $this->faker->randomNumber(),
            'updator_id' => $this->faker->randomNumber(),
        ];
    }
}

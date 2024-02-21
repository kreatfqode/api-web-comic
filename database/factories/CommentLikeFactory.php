<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Comment;
use App\Models\User;
use App\Models\comment_like;

class CommentLikeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CommentLike::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'comment_id' => Comment::factory(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}

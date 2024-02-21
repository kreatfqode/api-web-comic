<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Chapter;
use App\Models\User;
use App\Models\comment;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'chapter_id' => Chapter::factory(),
            'content' => $this->faker->paragraphs(3, true),
            'parent_comment_id' => $this->faker->numberBetween(-100000, 100000),
        ];
    }
}

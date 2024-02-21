<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Chapter;
use App\Models\User;
use App\Models\chapter_view;

class ChapterViewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ChapterView::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'chapter_id' => Chapter::factory(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}

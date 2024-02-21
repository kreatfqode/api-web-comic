<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Chapter;
use App\Models\User;
use App\Models\chapter_report;

class ChapterReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ChapterReport::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'chapter_id' => Chapter::factory(),
            'type' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'description' => $this->faker->text(),
            'status' => $this->faker->randomElement(["waiting","process","done"]),
        ];
    }
}

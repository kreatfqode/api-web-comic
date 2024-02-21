<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Manga;
use App\Models\User;
use App\Models\manga_report;

class MangaReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MangaReport::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'manga_id' => Manga::factory(),
            'type' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'description' => $this->faker->text(),
            'status' => $this->faker->randomElement(["waiting","process","done"]),
        ];
    }
}

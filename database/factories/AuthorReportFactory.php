<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Author;
use App\Models\User;
use App\Models\author_report;

class AuthorReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AuthorReport::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'author_id' => Author::factory(),
            'type' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'description' => $this->faker->text(),
            'status' => $this->faker->randomElement(["waiting","process","done"]),
        ];
    }
}

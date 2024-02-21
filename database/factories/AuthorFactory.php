<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\author;

class AuthorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Author::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'pen_name' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'biography' => $this->faker->text(),
            'social_media' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'phone_number' => $this->faker->phoneNumber(),
        ];
    }
}

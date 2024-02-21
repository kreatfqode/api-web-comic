<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\user;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'full_name' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'email' => $this->faker->safeEmail(),
            'password' => $this->faker->password(),
            'role' => $this->faker->randomElement(["admin","user"]),
            'profile_picture' => $this->faker->regexify('[A-Za-z0-9]{200}'),
        ];
    }
}

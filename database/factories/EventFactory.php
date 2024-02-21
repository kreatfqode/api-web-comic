<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\event;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->text(),
            'image' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'link' => $this->faker->regexify('[A-Za-z0-9]{200}'),
        ];
    }
}

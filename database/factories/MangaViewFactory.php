<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Manga;
use App\Models\User;
use App\Models\manga_view;

class MangaViewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MangaView::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'manga_id' => Manga::factory(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}

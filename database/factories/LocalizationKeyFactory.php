<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\LocalizationKey;

class LocalizationKeyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LocalizationKey::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => strtoupper($this->faker->unique()->word),
        ];
    }
}

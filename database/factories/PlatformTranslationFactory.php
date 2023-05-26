<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Platform;
use App\Models\PlatformTranslation;
use App\Models\Translation;

class PlatformTranslationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PlatformTranslation::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'platform_id' => Platform::factory(),
            'translation_id' => Translation::factory(),
        ];
    }
}

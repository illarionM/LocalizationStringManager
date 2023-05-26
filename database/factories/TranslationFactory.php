<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Language;
use App\Models\LocalizationKey;
use App\Models\Module;
use App\Models\Translation;

class TranslationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Translation::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'key_id' => LocalizationKey::factory(),
            'language_id' => Language::factory(),
            'module_id' => Module::factory(),
            'value' => $this->faker->text,
        ];
    }
}

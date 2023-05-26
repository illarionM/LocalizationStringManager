<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
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
            'key_id' => LocalizationKey::all()->unique()->random(),
            'language_id' => Language::all()->random(),
            'module_id' => Module::all()->random(),
            'value' => $this->faker->text,
        ];
    }
}

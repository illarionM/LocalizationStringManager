<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Module;
use App\Models\Platform;
use App\Models\PlatformModule;

class PlatformModuleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PlatformModule::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'platform_id' => Platform::all()->random(),
            'module_id' => Module::all()->random(),
        ];
    }
}

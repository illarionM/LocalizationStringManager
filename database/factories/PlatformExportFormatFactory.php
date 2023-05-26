<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ExportFormat;
use App\Models\Platform;
use App\Models\PlatformExportFormat;

class PlatformExportFormatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PlatformExportFormat::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'platform_id' => Platform::factory(),
            'format_id' => ExportFormat::factory(),
        ];
    }
}

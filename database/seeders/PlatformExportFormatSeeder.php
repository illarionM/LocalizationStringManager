<?php

namespace Database\Seeders;

use App\Models\PlatformExportFormat;
use Illuminate\Database\Seeder;

class PlatformExportFormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PlatformExportFormat::factory()->count(5)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\ExportFormat;
use Illuminate\Database\Seeder;

class ExportFormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExportFormat::factory()->count(5)->create();
    }
}

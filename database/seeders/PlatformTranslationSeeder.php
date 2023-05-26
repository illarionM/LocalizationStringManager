<?php

namespace Database\Seeders;

use App\Models\PlatformTranslation;
use Illuminate\Database\Seeder;

class PlatformTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PlatformTranslation::factory()->count(5)->create();
    }
}

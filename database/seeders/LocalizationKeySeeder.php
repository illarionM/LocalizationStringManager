<?php

namespace Database\Seeders;

use App\Models\LocalizationKey;
use Illuminate\Database\Seeder;

class LocalizationKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LocalizationKey::factory()->count(5)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\PlatformModule;
use Illuminate\Database\Seeder;

class PlatformModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PlatformModule::factory()->count(5)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\ExportFormat;
use App\Models\Language;
use App\Models\LocalizationKey;
use App\Models\Module;
use App\Models\Platform;
use App\Models\PlatformExportFormat;
use App\Models\PlatformModule;
use App\Models\PlatformTranslation;
use App\Models\Translation;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory()->create([
             'name' => 'admin',
             'email' => 'admin@test.com',
             'password' => Hash::make('Testing123!'),
             'remember_token' => Str::random(10),
         ]);

        Platform::factory()->create([
            'name' => 'Web app',
        ]);
        Platform::factory()->create([
            'name' => 'iOS app',
        ]);
        Platform::factory()->create([
            'name' => 'Android app',
        ]);

        Language::factory()->create([
            'name' => 'English',
            'code' => 'en',
        ]);
        Language::factory()->create([
            'name' => 'Français',
            'code' => 'fr',
        ]);
        Language::factory()->create([
            'name' => 'Español',
            'code' => 'es',
        ]);
        Language::factory()->create([
            'name' => 'Português',
            'code' => 'pt',
        ]);
        Language::factory()->create([
            'name' => 'Deutsch',
            'code' => 'de',
        ]);
        Language::factory()->create([
            'name' => 'Italiano',
            'code' => 'it',
        ]);
        Language::factory()->create([
            'name' => 'Latviešu',
            'code' => 'lv',
        ]);
        Language::factory()->create([
            'name' => 'Svenska',
            'code' => 'se',
        ]);

        Module::factory()->create([
            'name' => 'Authentication',
        ]);
        Module::factory()->create([
            'name' => 'Affiliate',
        ]);
        Module::factory()->create([
            'name' => 'Referral',
        ]);
        Module::factory()->create([
            'name' => 'Homepage',
        ]);
        Module::factory()->create([
            'name' => 'Contact us',
        ]);

        LocalizationKey::factory(50)->create();

        Translation::factory(50)->create();

        PlatformModule::factory(10)->create();

        PlatformTranslation::factory(70)->create();

        ExportFormat::factory()->create([
            'name' => 'json',
        ]);

        ExportFormat::factory()->create([
            'name' => 'csv',
        ]);

        PlatformExportFormat::factory()->create([
            'platform_id' => 1,
            'format_id' => 1,
        ]);
        PlatformExportFormat::factory()->create([
            'platform_id' => 1,
            'format_id' => 2,
        ]);
        PlatformExportFormat::factory()->create([
            'platform_id' => 2,
            'format_id' => 2,
        ]);
        PlatformExportFormat::factory()->create([
            'platform_id' => 3,
            'format_id' => 1,
        ]);
    }
}

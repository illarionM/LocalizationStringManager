<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('module', 'ModuleCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('platform', 'PlatformCrudController');
    Route::crud('language', 'LanguageCrudController');
    Route::crud('localization-key', 'LocalizationKeyCrudController');
    Route::crud('platform-module', 'PlatformModuleCrudController');
    Route::crud('translation', 'TranslationCrudController');
    Route::crud('platform-translation', 'PlatformTranslationCrudController');
    Route::crud('export-format', 'ExportFormatCrudController');
    Route::crud('platform-export-format', 'PlatformExportFormatCrudController');
    Route::get('export-content', 'ExportContentController@index');
    Route::post('export-content', 'ExportContentController@processForm');
}); // this should be the absolute last line of this file

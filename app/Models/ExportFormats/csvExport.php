<?php

namespace App\Models\ExportFormats;

use App\Models\Translation;
use App\Models\Language;
use App\Models\LocalizationKey;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class csvExport extends Export
{
    public function __construct()
    {
        parent::__construct();

        $csvFile = fopen($this->getExportFileName(), 'w');

        // write the header row
        fputcsv($csvFile, $this->getExportHeadings());

        foreach ($this->translations as $translation) {
            // write each translation as a row in the CSV file
            fputcsv($csvFile, [$translation->localizationKey->keyName, $translation->language->languageCode, $translation->translationValue]);
        }

        // close the file
        fclose($csvFile);

        Storage::disk('public')->put('translations.csv', file_get_contents($this->getExportFileName()));
    }

    public static function export(): \Symfony\Component\HttpFoundation\StreamedResponse
    {
        return Storage::disk('public')->download('translations.csv');
    }
}

<?php

namespace App\Models\ExportFormats;

use Illuminate\Support\Facades\Storage;

class csvExport extends Export
{
    public $extension = 'csv';
    public $zipFileName = 'translations_csv.zip';

    public function __construct($languages)
    {
        parent::__construct($languages);

        foreach ($this->translationBatches as $language => $translations) {
            $filename = $language . '.' . $this->getExportFileExtension();
            $csvFile = fopen($filename, 'w');

            // write the header row
            fputcsv($csvFile, $this->getExportHeadings());
            foreach ($translations as $translation) {
                // write each translation as a row in the CSV file
                fputcsv($csvFile, [$translation->module->name . '_' . $translation->key->name, $translation->value]);
            }
            // close the file
            fclose($csvFile);
            Storage::disk('public')->put($this->extension . '/' . $filename, file_get_contents($filename));
            $this->filesToZip[] = $filename;
        }
    }

    public function createZip(): string
    {
        return $this->getFilesToZip();
    }
}

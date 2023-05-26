<?php

namespace App\Models\ExportFormats;

use Illuminate\Support\Facades\Storage;

class jsonExport extends Export
{
    public $extension = 'json';
    public $zipFileName = 'translations_json.zip';

    public function __construct($languages)
    {
        parent::__construct($languages);

        foreach ($this->translationBatches as $language => $translations) {
            $filename = $language . '.' . $this->getExportFileExtension();
            $jsonFile = fopen($filename, 'w');

            $jsonTranslations = [];
            foreach ($translations as $translation) {
                $jsonTranslations[$translation->module->name . '_' . $translation->key->name] = $translation->value;
            }
            fwrite($jsonFile, json_encode($jsonTranslations, JSON_PRETTY_PRINT));
            fclose($jsonFile);
            Storage::disk('public')->put($this->extension . '/' . $filename, file_get_contents($filename));
            $this->filesToZip[] = $filename;
        }
    }

    public function createZip(): string
    {
        return $this->getFilesToZip();
    }
}

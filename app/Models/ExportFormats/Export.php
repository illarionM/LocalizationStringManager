<?php

namespace App\Models\ExportFormats;

use App\Models\Translation;
use ZipArchive;
use Illuminate\Support\Facades\Storage;

abstract class Export
{
    private $exportFileName = 'translations';

    public $extension;

    private $exportHeadings = ['Key', 'Translation'];

    private $languages;

    public $translationBatches = [];

    public $filesToZip = [];

    public $zipFileName;

    public function __construct($languages)
    {
        $this->languages = $languages;

        foreach ($this->languages as $language) {
            $this->translationBatches[$language->code] = Translation::with('key', 'module')->where(
                'language_id',
                $language->id
            )->where('active', '=', true)->get();
        }
    }

    public function getExportFileName(): string
    {
        return $this->exportFileName . '.' . $this->extension;
    }

    public function getExportFileExtension(): string
    {
        return $this->extension;
    }

    public function getExportHeadings(): array
    {
        return $this->exportHeadings;
    }

    public function getFilesToZip(): string
    {
        $zip = new ZipArchive;
        $zipFilePath = storage_path('app/public/' . $this->zipFileName);

        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
            $Files = Storage::files('public/' . $this->extension);

            foreach ($Files as $File) {
                $fileContent = Storage::get($File);
                $fileName = pathinfo($File, PATHINFO_BASENAME);

                $zip->addFromString($fileName, $fileContent);
            }

            $zip->close();
            return $zipFilePath;
        } else {
            return '';
        }
    }
}

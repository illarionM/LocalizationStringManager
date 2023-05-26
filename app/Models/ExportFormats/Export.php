<?php

namespace App\Models\ExportFormats;

use App\Models\Translation;

abstract class Export
{
    private $exportFileName = 'translations';

    private $exportFileExtension = 'csv';

    private $exportHeadings = ['Key', 'Language', 'Translation'];

    public $translations;

    public function __construct()
    {
        $this->translations = Translation::with('language', 'localizationKey')->get();
    }

    public function getExportFileName(): string
    {
        return $this->exportFileName.'.'.$this->exportFileExtension;
    }

    public function getExportHeadings(): array
    {
        return $this->exportHeadings;
    }

    abstract static public function export();
}

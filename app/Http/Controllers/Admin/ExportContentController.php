<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ExportFormats\Export;
use App\Models\Language;
use App\Models\Platform;
use ZipArchive;
use Illuminate\Http\Request;

class ExportContentController extends Controller
{
    public $zipFiles = [];

    public function index()
    {
        $languages = Language::all();
        $platforms = Platform::all();

        return view('admin.export-content.index', compact('languages', 'platforms'));
    }

    public function processForm(Request $request)
    {
        $request->validate([
           'platform' => 'required|string',
           'exportLanguages' => 'required|array',
        ]);

        $languages = Language::whereIn('code', $request->exportLanguages)->get();
        $platform = Platform::where('name', $request->platform)->first();
        $platformsExportFormats = $platform->exportFormats;


        foreach ($platformsExportFormats as $exportFormat) {
            $formatClass = $this->getExportClass($exportFormat->name, $languages);
            $zipName = $formatClass->createZip();
            if ($zipName != '') {
                $this->zipFiles[] = $zipName;
            }
        }

        return $this->downloadZipFiles();
    }

    public function getExportClass($format, $languages): Export
    {
        $exportClass = 'App\\Models\\ExportFormats\\' . ucfirst($format) . 'Export';
        return new $exportClass($languages);
    }

    public function downloadZipFiles(): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        if ($this->zipFiles > 1) {
            return response()->download($this->combineZipFiles());
        } else {
            return response()->download($this->zipFiles[0]);
        }
    }

    function combineZipFiles(): ?string
    {
        $zip = new ZipArchive;
        $outputFile = storage_path('app/public/translations.zip');

        // Create a new zip file
        if ($zip->open($outputFile, ZipArchive::CREATE) === true) {
            // Add each zip file to the new zip
            foreach ($this->zipFiles as $file) {
                if (file_exists($file)) {
                    $zip->addFile($file, basename($file));
                }
            }

            $zip->close();

            return $outputFile;
        } else {
            return null;
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadFile extends Controller
{
    public function downloadCv()
    {
        $filePath = public_path("frontEndAsset/cv/shakhawat-CV.pdf");
        $headers = ['Content-Type: application/pdf'];
        $fileName = time().'.pdf';

        return response()->download($filePath, $fileName, $headers);
    }
}

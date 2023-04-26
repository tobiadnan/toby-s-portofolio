<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download($filename)
    {
        $file_path = storage_path('app/public/' . $filename);

        if (file_exists($file_path)) {
            $headers = [
                'Content-Type' => 'application/octet-stream',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"'
            ];

            return response()->download($file_path, $filename, $headers);
        } else {
            return redirect()->back()->with('error', 'File not found!');
        }
    }
}

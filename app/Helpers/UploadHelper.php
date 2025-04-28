<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class UploadHelper
{
    /**
     * Upload file to public folder.
     *
     * @param \Illuminate\Http\UploadedFile $file
     * @param string $folder
     * @return string
     */
    public static function uploadPublicFile($file, $folder)
    {
        $folderPath = public_path($folder);

        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true); // Create folder if not exists
        }

        $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
        $file->move($folderPath, $fileName);

        return $folder . '/' . $fileName; // Relative public path
    }
}

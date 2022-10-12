<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

    trait UploadOne
{
    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'local', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(25);

        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $name.'.'.$uploadedFile->getClientOriginalExtension();
    }
}
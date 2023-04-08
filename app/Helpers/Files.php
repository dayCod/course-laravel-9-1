<?php

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

function saveImageToPublicPathAndResizeImage($dir, $realImage, $save_path, $width = 636, $height = 852, $currentImage = null)
{
    if (!file_exists(public_path($dir))) {
        mkdir(public_path($dir), 0775, true);
    } else {
        File::delete(public_path($currentImage));
    }

    Image::make($realImage)->resize($width, $height)->save(public_path($save_path));
}

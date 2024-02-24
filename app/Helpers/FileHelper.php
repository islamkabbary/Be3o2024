<?php

namespace App\Helpers;

use File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class FileHelper
{
    public static function upload_file($folder_path, $image)
    {
        $url = Storage::disk('public')->put($folder_path, $image);
        return $url;
    }

    public static function update_file($folder_path, $image , $old_image)
    {
        if(!empty($old_image)){
            Storage::delete($old_image);
        }
        $url = Storage::disk('public')->put($folder_path, $image);
        return $url;
    }

    public static function delete_picture($picture)
    {
        Storage::delete($picture);
        return true;
    }

    public static function deleteDirectory($path){
        if($path != null){
            Storage::deleteDirectory($path);
        }
    }
}

<?php

namespace App\Helpers;

use Intervention\Image\Facades\Image;

class Helpers {

    //Image Upload & Resizing Helper. ->Retuens the path of the save image(s), null on error
    public static function ImageUpload($file, $dir_path = null, $resize = false, $data = null, $image_path = null) {
        try {
            $image = Image::make($file);            
            if($resize) {
                $image->resize($data['width'], $data['height']);
            }

            if(!$image_path) {
                $image_path = $dir_path.'/'.$file->hashName();
            }

            $image->save($image_path, 100);
        } catch (\Exception $ex) {
            // dd($ex->getMessage());
            //Log error occurance
            return ['status' => false, 'message' => $ex->getMessage()];
        }
        return ['status' => true, 'url' => $image_path];
    } 
}
<?php 

namespace App\Services;

use App\Image;

class ImageUploadService{

    public static function imageUpload($image, $id, $type)
    {
        $path = str_replace('app\Services', '\public\storage\application\\' . $id . '\\', dirname(__FILE__));
        if (!empty($image)) {
            $image->move($path, $image->getClientOriginalName());
            Image::Create([
                'url'            => '/storage/application/' . $id . '/'. $image->getClientOriginalName(),
                'imageable_id'   => $id,
                'imageable_type' => $type,
            ]);
        }
    }

}


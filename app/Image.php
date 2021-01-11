<?php

namespace App;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function insertImage($request){

        $imageModel = new Image();

        if ($request->hasFile("image"))
        {
            $image      = $request->file("image");
            $directory  = "images/";
            $name       = "IMG_" . date("Ymd_his") . "." . $image->getClientOriginalExtension();
            $image->move($directory, $name);
            $imageURL   = $directory.$name;

            $imageModel->image = $imageURL;
            $imageModel->title = $request->title;
            $imageModel->publication_status = $request->publication_status;
            
            $imageModel->save();
            
            return;
        }
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    public function insertTestimonial($request)
    {
        $testimonial =   new Testimonial();
        if($request->hasFile('image'))
        {
            $image     = $request->file('image');
            $directory = 'images/';
            $name      = 'IMG_'. date('Ymd_his') .'.'. $image->getClientOriginalExtension();
            $image->move($directory, $name);
            $imageUrl  = $directory.$name;

            $testimonial->name         =   $request->name;
            $testimonial->work_title   =   $request->work_title;
            $testimonial->comment      =   $request->comment;
            $testimonial->image        =   $imageUrl;
            $testimonial->save();
            return;
        }
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsTicker extends Model
{
    public function insertNews($request)
    {
        $news  =   new NewsTicker();

        $news->title             = $request->title;
        $news->short_description = $request->short_description;

        $news->save();
        return;
    }
}

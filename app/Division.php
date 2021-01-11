<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\District;

class Division extends Model
{
    public function districts()
    {
        return $this->hasMany(District::class, 'div_id', 'id');
    }
}

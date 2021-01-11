<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\District;

class District extends Model
{
    public function division()
    {
        return $this->belongsTo(Division::class, 'div_id', 'id');
    }
}

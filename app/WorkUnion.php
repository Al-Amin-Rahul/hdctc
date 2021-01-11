<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkUnion extends Model
{
    protected $fillable =   ['link_id','union'];

    public function works()
    {
        return $this->hasMany(Work::class, 'id', 'link_id');
    }
}

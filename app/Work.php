<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['work_link'];

    public function unions()
    {
        return $this->hasMany(WorkUnion::class, 'link_id', 'id');
    }
}

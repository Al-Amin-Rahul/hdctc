<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CourseDetail;

class Course extends Model
{
    public function courseDetail()
    {
        return $this->belongsTo(CourseDetail::class, 'is', 'course_id');
    }
}

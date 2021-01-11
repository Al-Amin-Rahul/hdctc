<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;

class CourseDetail extends Model
{
    public function course()
    {
        return $this->belongsTo(Course::class, 'is', 'course_id');
    }
}

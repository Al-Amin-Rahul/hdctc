<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    public function insertStudentInfo($request, $data)
    {
        $sInfo  =   new StudentInfo();

        $sInfo->name       = $data['student']->name;
        $sInfo->phone      = $data['student']->admission->student_phone;
        $sInfo->union      = $data['union']->union_name;
        $sInfo->channel    = $data['student']->channel;
        $sInfo->link       = $request->link;
        $sInfo->watch_time = $request->watch_time;
        $sInfo->total_sub  = $request->total_sub;
        $sInfo->total_view = $request->total_view;

        $sInfo->save();
        return;
    }
}

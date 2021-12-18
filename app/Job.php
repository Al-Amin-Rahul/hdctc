<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function insertJob($request)
    {
        $job    =   new Job();
        if($request->hasFile('image'))
        {
            $image     = $request->file('image');
            $directory = 'images/';
            $name      = 'IMG_'. date('Ymd_his') .'.'. $image->getClientOriginalExtension();
            $image->move($directory, $name);
            $imageUrl  = $directory.$name;

            $job->image = $imageUrl;
            $job->short_name = $request->short_name;
            $job->organization_name = $request->organization_name;
            $job->vacancy = $request->vacancy;
            $job->employment_status = $request->employment_status;
            $job->experience = $request->experience;
            $job->age = $request->age;
            $job->job_location = $request->job_location;
            $job->salary = $request->salary;
            $job->deadline = $request->deadline;
            $job->description = $request->description;

            $job->save();
        }
    }
}

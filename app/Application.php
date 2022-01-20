<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;
use App\District;
use App\Thana;
use Session;
class Application extends Model
{
    protected $fillable =   [
        'status'
    ];
    
    public function insertApplication($request)
    {
        $app    =   new Application();

        function getCode() { 
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
            $randomString = ''; 
        
            for ($i = 0; $i < 6; $i++) { 
                $index = rand(0, strlen($characters) - 1); 
                $randomString .= $characters[$index]; 
            } 
        
            return $randomString; 
        }

        $code   =   getCode();
        $check  =   Application::where('refer_code', $code)->get();

        if(!$check->isEmpty())
        {
            $code   =   $code.rand(0,1000);
        }
        
        if($request->hasFile('photo'))
        {
            $image     = $request->file('photo');
            $directory = 'images/';
            $name      = 'IMG_'. date('Ymd_his') .'.'. $image->getClientOriginalExtension();
            $imageUrl  = $directory.$name;

            $image->move($directory, $name);
        }
        else{
            $imageUrl   =   '';
        }

        $app->job_id                = $request->job_id;
        $app->image                 = $imageUrl;
        $app->refer_code            = $code;
        $app->applicants_name       = $request->applicants_name;
        $app->fathers_name          = $request->fathers_name;
        $app->mothers_name          = $request->mothers_name;
        $app->nid                   = $request->nid;
        $app->phone                 = $request->phone;
        $app->email                 = $request->email;
        $app->dob                   = $request->dob;
        $app->gender                = $request->gender;
        $app->religion              = $request->religion;
        $app->maritial              = $request->maritial;
        $app->care_of               = $request->care_of;
        $app->address               = $request->address;
        $app->division              = $request->division;
        $app->district              = $request->district;
        $app->thana                 = $request->thana;
        $app->union                 = $request->union;
        $app->post_code             = $request->post_code;
        $app->care_of_p             = $request->care_of_p;
        $app->address_p             = $request->address_p;
        $app->division_p            = $request->division_p;
        $app->district_p            = $request->district_p;
        $app->thana_p               = $request->thana_p;
        $app->union_p               = $request->union_p;
        $app->post_code_p           = $request->post_code_p;
        $app->exam                  = $request->exam;
        $app->board                 = $request->board;
        $app->roll                  = $request->roll;
        $app->result                = $request->result;
        $app->group                 = $request->group;
        $app->pass_year             = $request->pass_year;
        $app->hsc_exam              = $request->hsc_exam;
        $app->hsc_board             = $request->hsc_board;
        $app->hsc_roll              = $request->hsc_roll;
        $app->hsc_result            = $request->hsc_result;
        $app->hsc_group             = $request->hsc_group;
        $app->hsc_pass_year         = $request->hsc_pass_year;
        $app->graduation_exam       = $request->graduation_exam;
        $app->graduation_board      = $request->graduation_board;
        $app->graduation_roll       = $request->graduation_roll;
        $app->graduation_result     = $request->graduation_result;
        $app->graduation_group      = $request->graduation_group;
        $app->graduation_pass_year  = $request->graduation_pass_year;
        $app->graduation_pass_year  = $request->graduation_pass_year;

        $app->save();

        $job_name   =   Job::where('id', $request->job_id)->first();
        $district   =   District::where('id', $request->district)->first();
        $district_p =   District::where('id', $request->district_p)->first();
        $thana      =   Thana::where('id', $request->thana)->first();
        $thana_p    =   Thana::where('id', $request->thana_p)->first();
        $ldate      =   date('Y-m-d');

        Session::put('job_name', $job_name->short_name);
        Session::put('photo', $imageUrl);
        Session::put('refer_code', $code);
        Session::put('created_at', $ldate);
        Session::put('applicants_name', $request->applicants_name);
        Session::put('fathers_name', $request->fathers_name);
        Session::put('mothers_name', $request->mothers_name);
        Session::put('dob', $request->dob);
        Session::put('gender', $request->gender);
        Session::put('religion', $request->religion);
        Session::put('maritial_status', $request->maritial);
        Session::put('phone', $request->phone);
        Session::put('email', $request->email);
        Session::put('care_of', $request->care_of);
        Session::put('care_of_p', $request->care_of_p);
        Session::put('address', $request->address);
        Session::put('address_p', $request->address_p);
        Session::put('district', $district->dis_name);
        Session::put('district_p', $district_p->dis_name);
        Session::put('thana', $thana->thana_name);
        Session::put('thana_p', $thana_p->thana_name);
        Session::put('post_code', $request->post_code);
        Session::put('post_code_p', $request->post_code_p);
        Session::put('exam', $request->exam);
        Session::put('hsc_exam', $request->hsc_exam);
        Session::put('graduation_exam', $request->graduation_exam);
        Session::put('board', $request->board);
        Session::put('hsc_board', $request->hsc_board);
        Session::put('graduation_board', $request->graduation_board);
        Session::put('group', $request->group);
        Session::put('hsc_group', $request->hsc_group);
        Session::put('graduation_group', $request->graduation_group);
        Session::put('result', $request->result);
        Session::put('hsc_result', $request->hsc_result);
        Session::put('graduation_result', $request->graduation_result);
        Session::put('pass_year', $request->pass_year);
        Session::put('hsc_pass_year', $request->hsc_pass_year);
        Session::put('graduation_pass_year', $request->graduation_pass_year);
        Session::put('roll', $request->roll);
        Session::put('hsc_roll', $request->hsc_roll);
        Session::put('graduation_roll', $request->graduation_roll);
    }
}

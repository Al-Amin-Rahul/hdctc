<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\AdmissionForm;
use App\StudentRegister;
use App\StudentInfo;
use App\Work;
use App\WorkUnion;
use App\Union;
use PDF;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function addAdmision(Request $request){
        $validator = Validator::make($request->all(), [
            "service"       => "required",
            "service_option"=> "required",
            "student_name"  => "required",
            "dob"           => "required",
            "gender"        => "required",
            "student_email" => "unique:admission_forms,student_email",
            "student_phone" => "required",
            "education"     => "required",
            "father_name"   => "required",
            "mother_name"   => "required",
            "division"      => "required",
            "district"      => "required",
            "thana"         => "required",
            "union"         => "required",
            "post_code"     => "required",
            "mobile_banking"=> "required",
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            $form = new AdmissionForm();
            $form->insertStudent($request);
            return redirect('/')->with('success', 'Congratulations Your Application Submitted');
        }
    }

    public function studentProfile()
    {
        $id   =   Session::get('student_id');
        $data['student']   =    StudentRegister::where('id', $id)->where('status', 'Success')->first();
        return view('front.profile.student-profile', $data);
    }
    public function dailyWorkSheet()
    {
        $id   =   Session::get('student_id');
        $data['student']    =   StudentRegister::with('admission')->where('id', $id)->first();
        $data['unions']  =   WorkUnion::with('works')->where('union', $data['student']->admission->union)->get();
        $data['length']  =  count($data['unions']);
        return view('front.work-sheet.daily-work-sheet', $data);
    }
    public function submitInformation()
    {
        return view('front.submit-info.submit-information');
    }
    public function submitStudentInfo(Request $request)
    {
        $code   =   Session::get('refer_code');
        $data['student']    =   StudentRegister::with('admission')->where('refer_code', $code)->first();
        $data['union']      =   Union::where('id', $data['student']->admission->union)->first();

        $validator = Validator::make($request->all(), [
            "link"          => "required",
            "watch_time"    => "required",
            "total_sub"     => "required",
            "total_view"    => "required",
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            $sInfo = new StudentInfo();
            $sInfo->insertStudentInfo($request, $data);
            return redirect()->back()->with('success', 'Your Info Submitted');
        }
    }
    public function updateStudent(Request $request)
    {
        $student = StudentRegister::find($request->id);
        $validator = Validator::make($request->all(), [
            "name"          => "required",
            "email"         => "required|unique:student_registers,email,$request->id"
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            if($request->hasFile('image'))
            {

                $image     = $request->file('image');
                $directory = 'images/';
                $name      = 'IMG_'. date('Ymd_his') .'.'. $image->getClientOriginalExtension();
                $image->move($directory, $name);
                $imageUrl  = $directory.$name;

                $student->name  =   $request->name;
                $student->email  =   $request->email;
                $student->photo  =   $imageUrl;
                $student->channel  =   $request->channel;
                $student->update();
                return redirect()->back()->with('success', 'Your Profile Updated');
            }
            else
            {
                $student->name  =   $request->name;
                $student->email  =   $request->email;
                $student->channel  =   $request->channel;
                $student->update();
                return redirect()->back()->with('success', 'Your Profile Updated');
            }
        }
    }

    public function changePassword()
    {
        $id   =   Session::get('student_id');
        $data['student']   =    StudentRegister::where('id', $id)->where('status', 'Success')->first();
        return view('front.password.change-password', $data);
    }

    public function updatePassword(Request $request)
    {
        $student   =   StudentRegister::find($request->id);
        if(password_verify($request->old_password, $student->password))
        {
            if(strlen($request->new_password) < 6)
            {
                return redirect()->back()->with('warning', 'Password Must Be Greater Than 6 Charcecter');
            }
            else
            {
                $student->password  =   bcrypt($request->new_password);
                $student->update();
                return redirect()->back()->with('success', 'Password Updated');
            }
        }
        else{
            return redirect()->back()->with('warning', 'Old Password Not Match');
        }
    }
}

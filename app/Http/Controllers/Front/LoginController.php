<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\StudentRegister;
use App\AdmissionForm;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('front.login.show-login');
    }
    public function submitLogin(Request $request)
    {
        $student   =   StudentRegister::where('email', $request->email)->where('status', "Success")->first();
        if($student)
        {
            if(password_verify($request->password, $student->password))
            {
                Session::put("student_id", $student->id);
                Session::put("student_name", $student->name);
                Session::put("refer_code", $student->refer_code);
                
                return redirect()->route('user-dashboard')->with('success', 'Welcome Back '.Session::get('student_name'));
            }
            else
            {
                return redirect()->back()->with('warning', 'Invalid Password');
            }
        }
        else
        {
            return redirect()->back()->with('warning', 'Invalid Email Or Not Approved Your Account');
        }
    }

    public function studentLogout()
    {
        Session::forget('student_id');
        Session::forget('student_name');

        return redirect('/');
    }
}

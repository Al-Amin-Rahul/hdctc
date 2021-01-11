<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\AdmissionForm;
use App\StudentRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('front.register.student-register');
    }
    public function submitRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "refer_code"   => "required|unique:student_registers,refer_code",
            "name"         => "required",
            "email"        => "required|unique:student_registers,email",
            "password"     => "required"
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $student    =   AdmissionForm::where('refer_code', $request->refer_code)->where('status', "Success")->get();
        
        if($student->isEmpty())
        {
            return redirect()->back()->with('warning', 'Your Registration Is Not Approved Yet !!!');
        }
        elseif(strlen($request->password) < 6 )
        {
            return redirect()->back()->with('warning', 'Password Must Be Greater Than 6 Character');
        }
        else
        {
            $student    =   new StudentRegister();
            $student->insertRegisterStudent($request);
            return redirect()->back()->with('success', 'Your Account Has Been Created');

        }
    }
}

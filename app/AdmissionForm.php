<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use App\StudentRegister;

class AdmissionForm extends Model
{
    protected $fillable =   ['status'];
    public function insertStudent($request){
        function getName() { 
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
            $randomString = ''; 
        
            for ($i = 0; $i < 14; $i++) { 
                $index = rand(0, strlen($characters) - 1); 
                $randomString .= $characters[$index]; 
            } 
        
            return $randomString; 
        }

        $form = new AdmissionForm();
        $code   =   getName();
        $check  =   AdmissionForm::where('refer_code', $code)->get();
        if(!$check->isEmpty())
        {
            $code   =   $code.rand(0,1000);
        }

        if($request->hasFile('image'))
        {
            $image     = $request->file('image');
            $directory = 'images/';
            $name      = 'IMG_'. date('Ymd_his') .'.'. $image->getClientOriginalExtension();
            $imageUrl  = $directory.$name;

            $image->move($directory, $name);
        }

        $form->service          = $request->service;
        $form->image            = $imageUrl;
        $form->service_option   = $request->service_option;
        $form->nid              = $request->nid;
        $form->student_name     = $request->student_name;
        $form->refer_code       = $code;
        $form->dob              = $request->dob;
        $form->gender           = $request->gender;
        $form->student_email    = $request->student_email;
        $form->student_phone    = $request->student_phone;
        $form->education        = $request->education;
        $form->father_name      = $request->father_name;
        $form->mother_name      = $request->mother_name;
        $form->division         = $request->division;
        $form->district         = $request->district;
        $form->thana            = $request->thana;
        $form->union            = $request->union;
        $form->post_code        = $request->post_code;
        $form->mobile_banking   = $request->mobile_banking;
        
        $form->save();
        return;
    }
    public function register()
    {
        return $this->belongsTo(StudentRegister::class, 'refer_code', 'refer_code');
    }
}

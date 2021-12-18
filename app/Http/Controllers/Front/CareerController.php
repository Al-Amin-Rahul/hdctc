<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Application;
use Illuminate\Support\Facades\Validator;
use PDF;

class CareerController extends Controller
{
    public function submitApplication(Request $request){
        $validator = Validator::make($request->all(), [
            "applicants_name"       => "required",
            "fathers_name"=> "required",
            "mothers_name"  => "required",
            "dob"           => "required",
            "gender"        => "required",
            "religion" => "required",
            "maritial" => "required",
            "care_of"     => "required",
            "address"   => "required",
            "division"   => "required",
            "district"      => "required",
            "thana"      => "required",
            "union"         => "required",
            "post_code"         => "required",
            "care_of_p"     => "required",
            "address_p"=> "required",
            "division_p"=> "required",
            "district_p"=> "required",
            "thana_p"=> "required",
            "union_p"=> "required",
            "post_code_p"=> "required",
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            $form = new Application();
            $form->insertApplication($request);
            return redirect()->route('applicants-copy')->with('success', 'Congratulations Your Application Submitted');
        }
    }

    public function applicantsCopy()
    {
        return view('front.career.applicants-copy');
    }
    public function downloadApplicationForm()
    {
        $pdf = PDF::loadView('front.career.download');
        // return $pdf->download('hdctc.pdf');
        return $pdf->stream('hdctc.pdf');
    }
}

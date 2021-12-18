<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\AdmissionForm;
use App\Division;
use App\District;
use App\Thana;
use App\Union;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['students'] = AdmissionForm::all();
        $data['divisions']  =   Division::all();
        return view('admin.student.manage-student', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['divisions']  =   Division::all();
        $data['student'] = AdmissionForm::find($id);
        $data['districts']  =   District::where('div_id', $data['student']->division)->get();
        $data['thanas']  =   Thana::where('dis_id', $data['student']->district)->get();
        $data['unions']  =   Union::where('thana_id', $data['student']->thana)->get();
        $data['s_div']  =   $data['student']->division;
        $data['s_dis']  =   $data['student']->district;
        $data['s_thana']  =   $data['student']->thana;
        $data['s_union']  =   $data['student']->union;
        return view('admin.student.edit-student', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "student_name"  => "required",
            "dob"           => "required",
            "gender"        => "required",
            "student_email" => "required|unique:admission_forms,student_email,$id",
            "student_phone" => "required",
            "education"     => "required",
            "father_name"   => "required",
            "mother_name"   => "required",
            "division"      => "required",
            "district"      => "required",
            "thana"         => "required",
            "union"         => "required",
            "post_code"     => "required",
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            $student = AdmissionForm::find($id);
            $student->student_name     = $request->student_name;
            $student->refer_code       = $request->refer_code;
            $student->dob              = $request->dob;
            $student->gender           = $request->gender;
            $student->student_email    = $request->student_email;
            $student->student_phone    = $request->student_phone;
            $student->education        = $request->education;
            $student->father_name      = $request->father_name;
            $student->mother_name      = $request->mother_name;
            $student->division         = $request->division;
            $student->district         = $request->district;
            $student->thana            = $request->thana;
            $student->union            = $request->union;
            $student->post_code        = $request->post_code;
            $student->cash_details     = $request->cash_details;
            $student->bank_details     = $request->bank_details;
            $student->payment_date     = $request->payment_date;
            $student->expire_date     = $request->expire_date;

            $student->update();
            return redirect()->back()->with('message', 'Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student    =   AdmissionForm::find($id);
        $student->delete();
        return redirect()->back()->with('message', 'Deleted');
    }

    public function search(Request $request)
    {
        $data['students']    =   AdmissionForm::where('student_phone', $request->phone)->get();
        $data['union']    =   '';
        return view('admin.student.union-student', $data);
    }

    public function updateStudentStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "status" => "required"
        ]);

        $student = AdmissionForm::find($request->id);

        $student->update([
            "status" => $request->status

        ]);

        return redirect()->back()->with('message', 'Status Updated');
    }

    public function printUnionStudent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "division"  => "required",
            "district"  => "required",
            "thana"  => "required",
            "union"  => "required",
            "choice"  => "required"
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->choice == 'print')
        {
            $data['date'] = date('Y-m-d');
            $data['students']    =   AdmissionForm::where('union', $request->union)->get();
            $data['union']    =   Union::where('id', $request->union)->first();
            $pdf = PDF::loadView('admin.student.union-student-invoice', $data);
            return $pdf->stream('invoice.pdf');
        }
        else
        {
            $data['date'] = date('Y-m-d');
            $data['students']    =   AdmissionForm::where('union', $request->union)->get();
            $data['union']    =   Union::where('id', $request->union)->first();
            $data['divisions']  =   Division::all();
            return view('admin.student.union-student', $data);
        }
    }

    public function download($id)
    {
        $data['date'] = date('Y-m-d');
        $data['reg']  = AdmissionForm::select(['refer_code', 'service_option'])->where('id', $id)->first();
        $customPaper = array(0,0,596,425);
        $pdf = PDF::loadView('admin.reciept.card', $data)->setPaper($customPaper, 'landscape');
        // return $pdf->download('hdctc.pdf');
        return $pdf->stream('hdctc.pdf');
    }
}

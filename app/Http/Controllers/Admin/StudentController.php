<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\AdmissionForm;
use App\Division;
use App\District;
use App\Thana;
use App\Union;
use App\StudentRegister;
use PDF;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['students'] = AdmissionForm::where('status', 'Pending')->orderBy('id','desc')->get();
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
            "service"       => "required",
            "service_option"=> "required",
            "nid"           => "required",
            "mobile_banking"=> "required",
            "refer_code"    => "required",
            "dob"           => "required",
            "gender"        => "required",
            "student_email" => "required",
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

            if($request->hasFile('image'))
            {
                File::delete($student->image);

                $image      =   $request->file('image');
                $directory  =   'images/';
                $name       =   "IMG_" . date('Ymd_his') . '.' .$image->getClientOriginalExtension();
                $image->move($directory, $name);
                $imageUrl   =   $directory.$name;
                
            }
            else
            {
                $imageUrl   =   $student->image;
            }
            $student->student_name     = $request->student_name;
            $student->image            = $imageUrl;
            $student->service          = $request->service;
            $student->service_option   = $request->service_option;
            $student->nid              = $request->nid;
            $student->mobile_banking   = $request->mobile_banking;
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
            $student->payment_date     = $request->payment_date;
            $student->expire_date      = $request->expire_date;
            $student->status           = $request->status;

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
        $studentRegister    =   StudentRegister::where('refer_code', $student->refer_code)->first();
        if($studentRegister)
        {
            $studentRegister->delete();
        }
        $student->delete();
        File::delete($student->image);
        Session::forget('student_id');
        Session::forget('student_name');
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
            "choice"  => "required",
            "first_date"  => "required",
            "last_date"  => "required"
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->choice == 'print')
        {
            $data['first_date'] = $request->first_date;
            $data['last_date'] = $request->last_date;
            $data['students']    =   AdmissionForm::where('union', $request->union)->whereBetween('created_at', [$request->first_date, $request->last_date])->get();
            $data['union']    =   Union::where('id', $request->union)->first();
            $pdf = PDF::loadView('admin.student.union-student-invoice', $data);
            return $pdf->stream('invoice.pdf');
        }
        else
        {
            $data['date'] = date('Y-m-d');
            $data['students']    =   AdmissionForm::where('union', $request->union)->whereBetween('created_at', [$request->first_date, $request->last_date])->get();
            $data['union']    =   Union::where('id', $request->union)->first();
            $data['divisions']  =   Division::all();
            return view('admin.student.union-student', $data);
        }
    }

    public function download($id)
    {
        $data['date'] = date('Y-m-d');
        $data['reg']  = AdmissionForm::where('id', $id)->first();
        $data['div']  = Division::select('div_name')->where('id', $data['reg']->division)->first();
        $data['dis']  = District::select('dis_name')->where('id', $data['reg']->district)->first();
        $data['thana']  = Thana::select('thana_name')->where('id', $data['reg']->thana)->first();
        $data['union']  = Union::select('union_name')->where('id', $data['reg']->union)->first();
        $customPaper = array(0,0,596,425);
        $pdf = PDF::loadView('admin.reciept.card', $data)->setPaper($customPaper, 'landscape');
        return $pdf->download('hdctc.pdf');
        // return $pdf->stream('hdctc.pdf');
    }

    public function manageStudentSuccess()
    {
        $data['students']   =   AdmissionForm::where('status', 'Success')->get();
        return view('admin.student.manage-success-student', $data);
    }

    public function showStudent()
    {
        $data['students']   =   AdmissionForm::where('status', 'Pending')->get();
        $data['divisions']  =   Division::all();
        return view('admin.student.show-student', $data);
    }
}

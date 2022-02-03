<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\StudentRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class StudentRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['students']   =   StudentRegister::all();
        return view('admin.student-register.manage-student-register', $data);
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
        //
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
            "status" => "required"
        ]);

        $student = StudentRegister::find($id);

        $student->update([
            "status" => $request->status

        ]);

        return redirect()->back()->with('message', 'Status Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student =   StudentRegister::find($id);
        
        $student->delete($id);
        File::delete($student->photo);
        return redirect()->back()->with('message', 'Deleted Succesfully');
    }

    public function search(Request $request)
    {
        $data['students']    =   StudentRegister::where('email', $request->email)->get();
        return view('admin.student-register.manage-student-register', $data);
    }
}

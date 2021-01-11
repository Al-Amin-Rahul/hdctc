<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Prospect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class ProspectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['prospects'] =   Prospect::all();
        return view('admin.prospect.manage-prospect', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prospect.add-prospect');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prospect =   new Prospect();
        $validator = Validator::make($request->all(), [
            "prospect"              => "required"
        ]);
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        else
        {
            if($request->hasFile('prospect'))
            {
                $file     = $request->file('prospect');
                $directory = 'file/';
                $name      = 'Prospect'. date('Ymd_his') .'.'. $file->getClientOriginalExtension();
                $file->move($directory, $name);
                $fileUrl  = $directory.$name;

                $prospect->prospect =   $fileUrl;
                $prospect->save();
                return redirect()->back()->with('message', 'Prospect Added Successfully !');
            }
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prospect =   Prospect::find($id);
        File::delete($prospect->prospect);

        $prospect->delete($id);
        return redirect()->back()->with('message', 'Prospect Deleted Succesfully');
    }
}

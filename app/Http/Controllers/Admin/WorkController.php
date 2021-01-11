<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Work;
use App\Division;
use App\District;
use App\Thana;
use App\Union;
use App\WorkUnion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['works']  =   Work::all();
        return view('admin.work.manage-work', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['divisions']  =   Division::all();
        return view('admin.work.add-work', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $validator = Validator::make($request->all(), [
            "work_links"      => "required",
            "divisions"       => "required",
            "districts"       => "required",
            "thanas"          => "required",
            "unions"          => "required",
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            $work = new Work();
            $works = $request->work_links;
            $unions = $request->unions;

            foreach ($works as $key => $work) {
                $links = Work::create([
                    'work_link' => $work
                ]);
                foreach ($unions as $key => $union) {
                    WorkUnion::create([
                        'link_id' => $links->id,
                        'union' => $union
                    ]);
                }
            }
            

            return redirect()->back()->with('message', 'Work Added Successfully !');
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
        $data['work'] = Work::find($id);
        return view('admin.work.edit-work', $data);
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
        Work::truncate();
        WorkUnion::truncate();
        return redirect()->back()->with('message', 'Deleted');
    }
}

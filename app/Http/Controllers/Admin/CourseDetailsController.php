<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Course;
use App\CourseDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class CourseDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['courses']    =   CourseDetail::all();
        return view('admin.course.manage-course-details', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['courses']    =   Course::all();
        return view('admin.course.add-course-details', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course =   new CourseDetail();

        $validator = Validator::make($request->all(), [
            "course_category"     => "required",
            "image"               => "required",
            "course_feature"      => "required"
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

                $course->course_id          =   $request->course_category;
                $course->course_feature     =   $request->course_feature;
                $course->image              =   $imageUrl;
                $course->save();
                return redirect()->back()->with('message', 'Course Details Added Successfully !');
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
        $course =   CourseDetail::find($id);
        File::delete($course->image);

        $course->delete($id);
        return redirect()->back()->with('message', 'Deleted Succesfully');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Job;
use App\Application;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['jobs']   =   Job::all();
        return view('admin.job.manage-job', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job.add-job');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job =   new Job();
        $validator = Validator::make($request->all(), [
            "image"              => "required",
            "short_name"         => "required",
            "organization_name"  => "required",
            "vacancy"            => "required",
            "employment_status"  => "required",
            "experience"         => "required",
            "age"                => "required",
            "job_location"       => "required",
            "salary"             => "required",
            "deadline"           => "required",
            "description"        => "required"
        ]);
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        else
        {
            $job->insertJob($request);
            return redirect()->back()->with('message', 'Job Added Successfully !');
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
        $data['app']    =   Application::where('id', $id)->first();
        $data['job']    =   Job::where('id', $data['app']->job_id)->first();
        return view('admin.job.app-details', $data);
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
        $job    =   Job::find($id);
        $apps   =   Application::where('job_id', $id)->get();
        foreach($apps as $app)
        {
            $app->delete();
        }
        File::delete($job->image);
        $job->delete();
        return redirect()->back()->with('message', 'Deleted');
    }

    public function deleteApp($id)
    {
        $app    =   Application::find($id);
        File::delete($app->image);
        $app->delete();
        return redirect()->back()->with('message', 'Deleted');
    }

    
    public function successApplication()
    {
        $data['apps']   =   Application::where('status', 'Success')->get();
        return view('admin.job.manage-success-application', $data);
    }
    public function jobApplication($id)
    {
        $data['apps']   =   Application::where('status', 'Pending')->where('job_id', $id)->get();
        return view('admin.job.manage-job-application', $data);
    }

    public function updateStatus(Request $request)
    {
        $student = Application::find($request->id);

        $student->update([
            "status" => $request->status

        ]);
    }

    public function showApp()
    {
        $data['apps']   =   Application::where('status', 'Pending')->get();
        return view('admin.job.show-app', $data);
    }
}

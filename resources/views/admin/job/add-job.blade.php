@extends('admin.master')
@section('body')
    <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add Job</li>
            </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="row col-md-6 offset-md-2">
                    <h2></h2>
                </div>
                @include('message.message')
                <form action="{{ route('admin.job.store') }}" method="post" class="shadow p-5 rounded" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="control-label col-sm-3" for="Image">Logo</label>
                        <div class="col-sm-9">
                        <input type="file" name="image" class="form-control" id="Image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-3" for="shortName">Short Name</label>
                        <div class="col-sm-9">
                        <input type="text" name="short_name" class="form-control" id="shortName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-3" for="organizationName">Organization Name</label>
                        <div class="col-sm-9">
                        <input type="text" name="organization_name" class="form-control" id="organizationName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-3" for="vacancy">Vacancy</label>
                        <div class="col-sm-9">
                        <input type="number" name="vacancy" class="form-control" id="vacancy">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-3" for="employmentStatus">Employment Status</label>
                        <div class="col-sm-9">
                        <input type="text" name="employment_status" class="form-control" id="employmentStatus">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-3" for="experience">Experience</label>
                        <div class="col-sm-9">
                        <input type="text" name="experience" class="form-control" id="experience">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-3" for="age">Age</label>
                        <div class="col-sm-9">
                        <input type="text" name="age" class="form-control" id="age">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-3" for="jobLocation">Job Location</label>
                        <div class="col-sm-9">
                        <input type="text" name="job_location" class="form-control" id="jobLocation">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-3" for="salary">Salary</label>
                        <div class="col-sm-9">
                        <input type="text" name="salary" class="form-control" id="salary">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-3" for="deadline">Deadline</label>
                        <div class="col-sm-9">
                        <input type="date" name="deadline" class="form-control" id="deadline">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-3" for="description">Description</label>
                        <div class="col-sm-9">
                            <textarea id="editor" class="form-control" name="description" rows="4" id=""></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 offset-md-8 text-right">
                            <input type="submit" name="add" value="Submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

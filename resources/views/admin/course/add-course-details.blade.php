@extends('admin.master')
@section('body')
    <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add Course Details</li>
            </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="row col-md-6 offset-md-2">
                    <h2></h2>
                </div>
                @include('message.message')
                <form action="{{route('admin.course-detail.store')}}" method="post" class="shadow p-5 rounded" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="control-label col-sm-3" for="category">Course Category</label>
                        <div class="col-sm-9">
                        <select name="course_category" id="category" class="form-control">
                            <option value="">Select Category</option>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-3" for="Image">Image</label>
                        <div class="col-sm-9">
                        <input type="file" name="image" class="form-control" id="Image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-3" for="course_feature">Course Feature</label>
                        <div class="col-sm-9">
                            <textarea id="editor" class="form-control" name="course_feature" rows="4" id="course_feature"></textarea>
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

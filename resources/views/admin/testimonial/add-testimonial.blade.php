@extends('admin.master')
@section('body')
    <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add Testimonial</li>
            </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="row col-md-6 offset-md-2">
                    <h2></h2>
                </div>
                @include('message.message')
                <form action="{{route('admin.testimonial.store')}}" method="post" class="shadow p-5 rounded" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="control-label col-sm-4" for="name">Name</label>
                        <input type="text" name="name" class="form-control col-sm-8" id="name">
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-4" for="title">Work Title</label>
                        <input type="text" name="work_title" class="form-control col-sm-8" id="title">
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-4" for="Image">Image</label>
                        <input type="file" name="image" class="form-control col-sm-8" id="Image">
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-4" for="comment">Comment</label>
                        <div class="col-sm-8">
                            <textarea name="comment" id="comment" cols="30" rows="4" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 offset-md-8 text-right">
                            <input type="submit" name="add" value="Add Testimonial" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

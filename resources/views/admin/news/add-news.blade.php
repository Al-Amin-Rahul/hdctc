@extends('admin.master')
@section('body')
    <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add News</li>
            </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="row col-md-6 offset-md-2">
                    <h2></h2>
                </div>
                @include('message.message')
                <form action="{{route('admin.news.store')}}" method="post" class="shadow p-5 rounded" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="control-label col-sm-4" for="newsTitle">News Title</label>
                        <input type="text" name="title" class="form-control col-sm-8" id="newsTitle">
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-4" for="shortDescription">Short Description</label>
                        <textarea name="short_description" id="shortDescription"  rows="10" class="form-control col-sm-8"></textarea>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 offset-md-8 text-right">
                            <input type="submit" name="addNews" value="Add News" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

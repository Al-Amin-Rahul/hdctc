@extends('admin.master')
@section('body')
    <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add Work</li>
            </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="row col-md-6 offset-md-2">
                </div>
                @include('message.message')
                <form action="{{ route("admin.work.store")}}" method="post" class="shadow p-5 rounded" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="workLink" class="col-sm-4 col-form-label">Work Link</label>
                        <div class="col-sm-8">
                            <input type="text" name="work_links[]" class="form-control" id="workLink" required>
                        </div>
                    </div>
                    <div class="form-group row" >
                        <div class="col-sm-4"></div>
                        <div class="col-sm-8" id="newTextField">
                        </div>
                    </div>
                    <div class="row add-new-btn justify-content-end">
                        <button class="btn btn-primary" id="addNewBtn">Add New</button>
                    </div>
                    <div class="row pt-3 pb-3">
                        <div class="col-lg-3">
                            <select name="divisions[]" id="selectMulDiv" class="form-control" multiple>
                                <option value="">Select Option</option>
                                @foreach($divisions as $division)
                                    <option value="{{ $division->id }}">{{ $division->div_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <select name="districts[]" id="mulDistrict" class="form-control" multiple></select>
                        </div>
                        <div class="col-lg-3">
                            <select name="thanas[]" id="mulThana" class="form-control" multiple></select>
                        </div>
                        <div class="col-lg-3">
                            <select name="unions[]" id="mulUnion" class="form-control" multiple></select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 offset-md-8 text-right">
                            <input type="submit" name="addWork" value="Add Work" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

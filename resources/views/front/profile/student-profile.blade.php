@extends('front.master')

@section('title')
    HOME - PROFILE
@endsection

@section('body')
    <section>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-3 pb-lg-0 pb-md-0 pb-5">
                    <x-student-dashboard/>
                </div>
                <div class="col-lg-9">
                    <div class="shadow rounded bg-white text-dark p-5">
                        <form action="{{ route("update-student") }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $student->id }}">
                            <div class="form-group row">
                                <label for="name" class="col-lg-3">Name</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="name" value="{{ $student->name }}" id="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-lg-3">Email</label>
                                <div class="col-lg-9">
                                    <input type="email" class="form-control" name="email" value="{{ $student->email }}" id="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="channel" class="col-lg-3">Channel Name</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="channel" value="{{ $student->channel }}" id="channel">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="photo" class="col-lg-3">Upload Photo</label>
                                <div class="col-lg-2"><img src="{{ asset($student->photo) }}" width="100"alt=""></div>
                                <div class="col-lg-7">
                                    <input type="file" class="form-control" name="image" id="photo">
                                </div>
                            </div>
                            <input type="submit" value="Update Profile" class="btn btn-primary form-control">
                        </form>
                        <div class="text-center pt-5">
                            <a href="{{ route("change-password") }}"><u>Change Password</u></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
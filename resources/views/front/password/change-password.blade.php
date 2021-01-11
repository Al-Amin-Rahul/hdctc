@extends('front.master')

@section('title')
    HOME - PROFILE
@endsection

@section('body')
    <section>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-3">
                    <x-student-dashboard/>
                </div>
                <div class="col-lg-9">
                    <div class="shadow rounded bg-white text-dark p-5">
                        <form action="{{ route("update-password") }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $student->id }}">
                            <div class="form-group row">
                                <label for="old" class="col-lg-3">Old Password</label>
                                <div class="col-lg-9">
                                    <input type="password" class="form-control" name="old_password" id="old" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="new" class="col-lg-3">New Password</label>
                                <div class="col-lg-9">
                                    <input type="password" class="form-control" name="new_password" id="new" required>
                                </div>
                            </div>
                            <input type="submit" value="Update Password" class="btn btn-primary form-control">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('front.master')

@section('title')
    HOME - Submit Info
@endsection

@section('body')
    <section>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-3 pb-lg-0 pb-md-0 pb-5">
                    <x-student-dashboard/>
                </div>
                <div class="col-lg-9">
                    @include('message.message')
                    <form action="{{ route("submit-student-info") }}" method="post">
                        @csrf
                        <div class="shadow rounded bg-white p-5">
                            <div class="form-group row">
                                <label for="link" class="col-lg-3">Link</label>
                                <div class="col-lg-9">
                                    <input type="text" name="link" class="form-control" id="link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="wTime" class="col-lg-3">Watch Time</label>
                                <div class="col-lg-9">
                                    <input type="text" name="watch_time" class="form-control" id="wTime">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tSub" class="col-lg-3">Total Sub</label>
                                <div class="col-lg-9">
                                    <input type="text" name="total_sub" class="form-control" id="tSub">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tView" class="col-lg-3">Total View</label>
                                <div class="col-lg-9">
                                    <input type="text" name="total_view" class="form-control" id="tView">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Submit" class="form-control btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('front.master')

@section('title')
HDCTC - COURSE DETAILS
@endsection

@section('body')
    <section>
        <div class="container pt-5 pb-5">
            <div class="alert alert-light c-blue font-weight-bold">
                Course Details
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="image">
                        @if($course)
                        <img src="{{ asset($course->image) }}"  class="img-fluid w-100" alt=""/>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    @if($course)
                        <div class="wrap bg-white p-5">
                            {!! $course->course_feature !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('front.master')

@section('title')
    HDCTC - Job Details
@endsection

@section('body')
    <section>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="bg-white p-3">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="title">
                                    <h2 class="font-weight-bold">{{ $job->short_name }}</h2>
                                    <h4>{{ $job->organization_name }}</h4>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ asset($job->image) }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                {!! $job->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="summary">
                        <ul class="list-group">
                            <li class="list-group-item active"><span class="font-weight-bold">Job Summary</span></li>
                            <li class="list-group-item"><span class="font-weight-bold">Published On - {{ $job->created_at }}</span></li>
                            <li class="list-group-item"><span class="font-weight-bold">Vacancy - {{ $job->vacancy }}</span></li>
                            <li class="list-group-item"><span class="font-weight-bold">Employment Status - {{ $job->employment_status }}</span></li>
                            <li class="list-group-item"><span class="font-weight-bold">Experience - {{ $job->experience }}</span></li>
                            <li class="list-group-item"><span class="font-weight-bold">Age : {{ $job->age }}</span></li>
                            <li class="list-group-item"><span class="font-weight-bold">Job Location - {{ $job->job_location }}</span></li>
                            <li class="list-group-item"><span class="font-weight-bold">Salary : {{ $job->salary }}</span></li>
                            <li class="list-group-item"><span class="font-weight-bold">Application Deadline : {{ $job->deadline }}</span></li>
                            <li class="list-group-item"><a href="{{ route('apply-online', ['id'=> $job->id]) }}" class="btn btn-warning d-block font-weight-bold">Apply Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
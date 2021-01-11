@extends('front.master')

@section('title')
HDCTC - STUDENT DASHBOARD
@endsection

@section('body')
    <section>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-3 pb-lg-0 pb-md-0 pb-5">
                    <x-student-dashboard/>
                </div>
                <div class="col-lg-9 pb-5">
                    <div class="alert bg-green font-weight-bold profile">
                        @if($photo)
                            <img src="{{ asset($photo->photo) }}" width="80" alt="">
                        @endif
                       User Id And Password Validity
                    </div>
                    <div class="shadow bg-white rounded table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Payment Date</th>
                                    @if($student->payment_date)
                                        <th>{{ $student->payment_date }}</th>
                                    @else
                                        <th>Not Set</th>
                                    @endif
                                </tr>
                                <tr>
                                    <th>Expire Date</th>
                                    @if($student->expire_date)
                                        @php($date = \Carbon\Carbon::now()->format('Y-m-d'))
                                        @php($newDate   =   \Carbon\Carbon::now()->addDays(7))
                                        @if($newDate >= $student->expire_date)
                                        <th><span class="bg-danger text-white p-2"><blink>{{ $student->expire_date }}</blink></span> Please Update User Name & Password</th>
                                        @else
                                        <th>{{ $student->expire_date }}</th>
                                        @endif
                                    @else
                                        <th>Not Set</th>
                                    @endif
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
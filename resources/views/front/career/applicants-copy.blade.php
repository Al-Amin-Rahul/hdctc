@extends('front.master')

@section('title')
    HDCTC - Applicants Copy
@endsection

@section('body')
    <section style="background-color: white">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>
                                    <img src="{{ asset('front/images/logo2.jpg') }}" class="" width="115px" alt="">
                                </td>
                                <td colspan="" class="bg-green text-center align-middle">
                                    <h2 class="font-weight-bold">HUMAN DEVELOPMENT COMMUNITY TO COMMUNICATION</h2>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="col-lg-12 text-center">
                        <div class="h4 font-weight-bold">Applicant Form (Applicant's Copy)</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="bg-gray">Reference Id : 
                        @if(session()->has("refer_code"))
                            {{ session("refer_code") }}
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    @if(session()->has("created_at"))     
                        <div class="bg-gray">Date : {{ session("created_at") }}</div>
                    @endif
                </div>
            </div>
            <div class="row" style="margin-top: 10px">
                <div class="col-lg-12">
                    <table class="table-bordered" style="width: 100%">
                        <tbody>
                            <tr>
                                <td rowspan="10" style="width: 200px;">
                                    @if(session()->has("photo"))
                                        <img src="{{ session("photo") }}" class="img-fluid" alt="">
                                    @endif
                                </td>
                                <td style="background-color: rgb(185, 184, 184)">Name Of The Post</td>
                                <td style="background-color: rgb(185, 184, 184)">
                                    @if(session()->has("job_name"))
                                        {{ session("job_name") }}
                                    @endif
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Applicant's Name</td>
                                <td>
                                    @if(session()->has("applicants_name"))
                                        {{ session("applicants_name") }}
                                    @endif
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Father's Name</td>
                                <td>
                                    @if(session()->has("fathers_name"))
                                        {{ session("fathers_name") }}
                                    @endif
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Mother's Name</td>
                                <td>
                                    @if(session()->has("mothers_name"))
                                        {{ session("mothers_name") }}
                                    @endif
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Date Of Birth</td>
                                <td>
                                    @if(session()->has("dob"))
                                        {{ session("dob") }}
                                    @endif
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Gender</td>
                                <td>
                                    @if(session()->has("gender"))
                                        {{ session("gender") }}
                                    @endif
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Religion</td>
                                <td>
                                    @if(session()->has("religion"))
                                        {{ session("religion") }}
                                    @endif
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Maritial Status</td>
                                <td>
                                    @if(session()->has("maritial_status"))
                                        {{ session("maritial_status") }}
                                    @endif
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Contact Mobile</td>
                                <td>
                                    @if(session()->has("phone"))
                                        {{ session("phone") }}
                                    @endif
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Email</td>
                                <td>
                                    @if(session()->has("email"))
                                        {{ session("email") }}
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="h6">Address Information :</div>
                    <table class="table-bordered" style="width: 100%">
                        <tbody>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <th colspan="2">Mailing/Present/Address</th>
                                <th colspan="2">Permanent Address</th>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Care Of</td>
                                <td>
                                    @if(session()->has("care_of"))
                                        {{ session("care_of") }}
                                    @endif
                                </td>
                                <td>Care Of</td>
                                <td>
                                    @if(session()->has("care_of_p"))
                                        {{ session("care_of_p") }}
                                    @endif
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Village/Town/Road/House/Flat</td>
                                <td>
                                    @if(session()->has("address"))
                                        {{ session("address") }}
                                    @endif
                                </td>
                                <td>Village/Town/Road/House/Flat</td>
                                <td>
                                    @if(session()->has("address_p"))
                                        {{ session("address_p") }}
                                    @endif
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>District</td>
                                <td>
                                    @if(session()->has("district"))
                                        {{ session("district") }}
                                    @endif
                                </td>
                                <td>District</td>
                                <td>
                                    @if(session()->has("district_p"))
                                        {{ session("district_p") }}
                                    @endif
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>P.S/Upazila</td>
                                <td>
                                    @if(session()->has("thana"))
                                        {{ session("thana") }}
                                    @endif
                                </td>
                                <td>P.S/Upazila</td>
                                <td>
                                    @if(session()->has("thana_p"))
                                        {{ session("thana_p") }}
                                    @endif
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Post Code</td>
                                <td>
                                    @if(session()->has("post_code"))
                                        {{ session("post_code") }}
                                    @endif
                                </td>
                                <td>Post Code</td>
                                <td>
                                    @if(session()->has("post_code_p"))
                                        {{ session("post_code_p") }}
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="h6">Academic Qualifications :</div>
                    <table class="table-bordered" style="width: 100%">
                        <thead>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <th>Examination</th>
                                <th>Board/Institute</th>
                                <th>Group/Subject/Degree</th>
                                <th>Result</th>
                                <th>Year</th>
                                <th>Roll</th>
                                <th>Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(session()->has("exam"))
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>
                                    @if(session()->has("exam"))
                                        {{ session("exam") }}
                                    @endif
                                </td>
                                <td>
                                    @if(session()->has("board"))
                                        {{ session("board") }}
                                    @endif
                                </td>
                                <td>
                                    @if(session()->has("group"))
                                        {{ session("group") }}
                                    @endif
                                </td>
                                <td>
                                    @if(session()->has("result"))
                                        {{ session("result") }}
                                    @endif
                                </td>
                                <td>
                                    @if(session()->has("pass_year"))
                                        {{ session("pass_year") }}
                                    @endif
                                </td>
                                <td>
                                    @if(session()->has("roll"))
                                        {{ session("roll") }}
                                    @endif
                                </td>
                                <td>
                                    N/A
                                </td>
                            </tr>
                            @endif
                            @if(session()->has("hsc_board"))
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>
                                     @if(session()->has("hsc_exam"))
                                        {{ session("hsc_exam") }}
                                    @endif
                                </td>
                                <td>
                                     @if(session()->has("hsc_board"))
                                        {{ session("hsc_board") }}
                                    @endif
                                </td>
                                <td>
                                     @if(session()->has("hsc_group"))
                                        {{ session("hsc_group") }}
                                    @endif
                                </td>
                                <td>
                                     @if(session()->has("hsc_result"))
                                        {{ session("hsc_result") }}
                                    @endif
                                </td>
                                <td>
                                     @if(session()->has("hsc_pass_year"))
                                        {{ session("hsc_pass_year") }}
                                    @endif
                                </td>
                                <td>
                                     @if(session()->has("hsc_roll"))
                                        {{ session("hsc_roll") }}
                                    @endif
                                </td>
                                <td>N/A</td>
                            </tr>
                            @endif
                            @if(session()->has("graduation_exam"))
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>
                                     @if(session()->has("graduation_exam"))
                                        {{ session("graduation_exam") }}
                                    @endif
                                </td>
                                <td>
                                     @if(session()->has("graduation_board"))
                                        {{ session("graduation_board") }}
                                    @endif
                                </td>
                                <td>
                                     @if(session()->has("graduation_group"))
                                        {{ session("graduation_group") }}
                                    @endif
                                </td>
                                <td>
                                     @if(session()->has("graduation_result"))
                                        {{ session("graduation_result") }}
                                    @endif
                                </td>
                                <td>
                                     @if(session()->has("graduation_pass_year"))
                                        {{ session("graduation_pass_year") }}
                                    @endif
                                </td>
                                <td>
                                     @if(session()->has("graduation_roll"))
                                        {{ session("graduation_roll") }}
                                    @endif
                                </td>
                                <td>
                                    N/A
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    <p>I declare that the information provided in this form are correct, true and complete to the best of my knowledge and belief. If any information is found false, incorrect, and incomplete or if any detected before or after examination, any action can be taken against me by the Authority including cancellation of my candidature.</p>
                    <h6 style="font-weight: 600; margin-top: 30px">Congratulations!! Application Submitted Successfully</h6>
                    <p>Reference Id : @if (session()->has('refer_code'))
                    {{ session('refer_code') }}
                @endif, Please keep this number to pay the application fee within 72 from any mobile phone by Bkash</p><br>
                    <p>1st - Format : Dial *247# Or Go to your Bkash App < Send Money > < Mobile Number > < Reference ID Code > < Pin Number > send. [Example : < send money > < 01939-244834 > < G97999 > < 50 > < 12344 > send.] </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('download-application-form') }}" class="btn btn-danger">Download Copy <i class="fas fa-download"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
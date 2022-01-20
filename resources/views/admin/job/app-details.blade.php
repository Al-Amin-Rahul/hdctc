@extends('admin.master')

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
                    <div class="bg-gray">Reference Id : {{ $app->refer_code }}</div>
                </div>
                <div class="col-lg-6 text-right"> Date - {{ $app->created_at }}</div>
            </div>
            <div class="row" style="margin-top: 10px">
                <div class="col-lg-12">
                    <table class="table-bordered" style="width: 100%">
                        <tbody>
                            <tr>
                                <td rowspan="10" style="width: 200px;">
                                    <img src="{{ asset($app->image) }}" class="img-fluid" alt="">
                                </td>
                                <td style="background-color: rgb(185, 184, 184)">Name Of The Post</td>
                                <td style="background-color: rgb(185, 184, 184)">
                                    {{ $job->short_name }}
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Applicant's Name</td>
                                <td>
                                    {{ $app->applicants_name }}
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Father's Name</td>
                                <td>
                                    {{ $app->fathers_name }}
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Mother's Name</td>
                                <td>
                                    {{ $app->mothers_name }}
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Date Of Birth</td>
                                <td>
                                    {{ $app->dob }}
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Gender</td>
                                <td>
                                    {{ $app->gender }}
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Religion</td>
                                <td>
                                    {{ $app->religion }}
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Maritial Status</td>
                                <td>
                                    {{ $app->maritial }}
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Contact Mobile</td>
                                <td>
                                    {{ $app->phone }}
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Email</td>
                                <td>
                                    {{ $app->email }}
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
                                    {{ $app->care_of }}
                                </td>
                                <td>Care Of</td>
                                <td>
                                    {{ $app->care_of_p }}
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Village/Town/Road/House/Flat</td>
                                <td>
                                   {{ $app->address }}
                                </td>
                                <td>Village/Town/Road/House/Flat</td>
                                <td>
                                    {{ $app->address_p }}
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>District</td>
                                <td>
                                    {{ $app->district }}
                                </td>
                                <td>District</td>
                                <td>
                                    {{ $app->district_p }}
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>P.S/Upazila</td>
                                <td>
                                   {{ $app->thana }}
                                </td>
                                <td>P.S/Upazila</td>
                                <td>
                                    {{ $app->thana_p }}
                                </td>
                            </tr>
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>Post Code</td>
                                <td>
                                    {{ $app->post_code }}
                                </td>
                                <td>Post Code</td>
                                <td>
                                    {{ $app->post_code_p }}
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
                            @if($app->exam)
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>
                                    {{ $app->exam }}
                                </td>
                                <td>
                                    {{ $app->board }}
                                </td>
                                <td>
                                    {{ $app->group }}
                                </td>
                                <td>
                                    {{ $app->result }}
                                </td>
                                <td>
                                    {{ $app->pass_year }}
                                </td>
                                <td>
                                   {{ $app->roll }}
                                </td>
                                <td>
                                    N/A
                                </td>
                            </tr>
                            @endif
                            @if($app->hsc_exam)
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>
                                     {{ $app->hsc_exam }}
                                </td>
                                <td>
                                    {{ $app->hsc_board }}
                                </td>
                                <td>
                                    {{ $app->hsc_group }}
                                </td>
                                <td>
                                    {{ $app->hsc_result }}
                                </td>
                                <td>
                                    {{ $app->hsc_pass_year }}
                                </td>
                                <td>
                                    {{ $app->hsc_roll }}
                                </td>
                                <td>N/A</td>
                            </tr>
                            @endif
                            @if($app->graduation_exam)
                            <tr style="background-color: rgb(185, 184, 184)">
                                <td>
                                    {{ $app->graduation_exam }}
                                </td>
                                <td>
                                    {{ $app->graduation_board }}
                                </td>
                                <td>
                                    {{ $app->graduation_group }}
                                </td>
                                <td>
                                    {{ $app->graduation_result }}
                                </td>
                                <td>
                                    {{ $app->graduation_pass_year }}
                                </td>
                                <td>
                                    {{ $app->graduation_roll }}
                                    {{ $app->graduation_roll }}
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
                    <p>Reference Id : {{ $app->refer_code }}, Please keep this number to pay the application fee within 72 from any mobile phone by Bkash</p><br>
                    <p>1st - Format : Dial *247# Or Go to your Bkash App < Send Money > < Mobile Number > < Reference ID Code > < Pin Number > send. [Example : < send money > < 01939-244834 > < G97999 > < 50 > < 12344 > send.] </p>
                </div>
            </div>
        </div>
    </section>
@endsection
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body{
        font-family: 'Open Sans', sans-serif;
    }
    .top{
        width: 100%;
    }
    .img{
        width: 15%;
        float: left;
        border: 1px solid black;
    }
    .head{
        width: 85%;
        float: left;
        border: 1px solid black;
        background-color: #2ECC71;
    }
    .sec3{
        width: 100%;
    }
    .sec3 .ref{
        width: 50%;
        float: left;
        background-color: grey;
    }
    .sec3 .date{
        width: 50%;
        float: left;
        text-align: right;
        background-color: grey;
    }
</style>
<body>
    <section>
        <table class="" style="width: 100%; border: 1px solid black">
            <tbody>
                <tr>
                    <td style="width: 100px">
                        <img style="width: 100px" src="https://cdn.hdctc.com.bd/logo2.jpg" alt="">
                    </td>
                    <td style="background-color: #2ECC71; text-align: center">
                        <h4>HUMAN DEVELOPMENT COMMUNITY TO COMMUNICATION</h4>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <section style="margin-top: 20px">
        <div class="app" style="text-align: center">Applicant Form (Applicant's Copy)</div>
    </section>
    <section>
        <div class="sec3">
            <div class="ref">
                Reference Id : 
                @if(session()->has("refer_code"))
                    {{ session("refer_code") }}
                @endif
            </div>
            <div class="date">
                @if(session()->has("created_at"))     
                    <div style="">Date : {{ session("created_at") }}</div>
                @endif
            </div>
        </div>
    </section>
    <section>
        <div class="wrap">
            <table class="" style="width: 100%;margin-top: 20px">
                <tbody>
                    <tr style="background-color: rgb(185, 184, 184)">
                        <td rowspan="10" style="width: 200px;"></td>
                        <td>Name Of The Post</td>
                        <td>
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
    </section>
    <section>
        <div class="wrap">
            <div class="h6">Address Information :</div>
                <table class="" style="width: 100%">
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
                            <td>N/A</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
                <table class="table-bordered" style="width: 100%;margin-top: 20px">
                    <tbody>
                        <tr style="background-color: rgb(185, 184, 184)">
                            <th>Departmental Candidate Status</th>
                            <th>N/A</th>
                        </tr>
                    </tbody>
                </table>
                <p>I declare that the information provided in this form are correct, true and complete to the best of my knowledge and belief. If any information is found false, incorrect, and incomplete or if any detected before or after examination, any action can be taken against me by the Authority including cancellation of my candidature.</p>
                <p>Reference Id : @if (session()->has('refer_code'))
                    {{ session('refer_code') }}
                @endif, Please keep this number to pay the application fee within 72 hours from any mobile phone by Bkash</p><br>
                <p>1st - Format : Dial *247# Or Go to your Bkash App ( Send Money ) ( Mobile Number ) ( Reference ID Code ) ( Pin Number ) send. [Example : ( send money ) ( 01939-244834 ) ( G97999 ) ( 50 ) ( 12344 ) send.] </p>
            </div>
        </div>
    </section>
</body>
</html>
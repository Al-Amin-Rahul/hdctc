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
    <section style="margin-top: 20px;margin-bottom: 20px;">
        <div class="app" style="text-align: center">Applicant Form (Applicant's Copy)</div>
    </section>
    <section>
        <div class="sec3">
            <div class="ref">
                Reference Id : 
                {{ $job->refer_code }}
            </div>
            <div class="date">
                {{ $job->created_at }}
            </div>
        </div>
    </section>
    <section>
        <div class="wrap">
            <table class="" style="width: 100%;margin-top: 20px">
                <tbody>
                    <tr>
                        <td rowspan="10" style="width: 200px;">
                            <img src="{{ $job->image }}" style="width: 200px;" alt="">
                        </td>
                        <td style="background-color: rgb(185, 184, 184)">Name Of The Post</td>
                        <td style="background-color: rgb(185, 184, 184)">
                            {{ $post->short_name }}
                        </td>
                    </tr>
                    <tr style="background-color: rgb(185, 184, 184)">
                        <td>Applicant's Name</td>
                        <td>
                            {{ $job->applicants_name }}
                        </td>
                    </tr>
                    <tr style="background-color: rgb(185, 184, 184)">
                        <td>Father's Name</td>
                        <td>
                            {{ $job->fathers_name }}
                        </td>
                    </tr>
                    <tr style="background-color: rgb(185, 184, 184)">
                        <td>Mother's Name</td>
                        <td>
                            {{ $job->mothers_name }}
                        </td>
                    </tr>
                    <tr style="background-color: rgb(185, 184, 184)">
                        <td>Date Of Birth</td>
                        <td>
                            {{ $job->dob }}
                        </td>
                    </tr>
                    <tr style="background-color: rgb(185, 184, 184)">
                        <td>Gender</td>
                        <td>
                            {{ $job->gender }}
                        </td>
                    </tr>
                    <tr style="background-color: rgb(185, 184, 184)">
                        <td>Religion</td>
                        <td>
                            {{ $job->religion }}
                        </td>
                    </tr>
                    <tr style="background-color: rgb(185, 184, 184)">
                        <td>Maritial Status</td>
                        <td>
                            {{ $job->maritial }}
                        </td>
                    </tr>
                    <tr style="background-color: rgb(185, 184, 184)">
                        <td>Contact Mobile</td>
                        <td>
                            {{ $job->phone }}
                        </td>
                    </tr>
                    <tr style="background-color: rgb(185, 184, 184)">
                        <td>Email</td>
                        <td>
                            {{ $job->email }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section>
        <div class="wrap" style="margin-top: 5px;margin-bottom: 5px">
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
                                {{ $job->care_of }}
                            </td>
                            <td>Care Of</td>
                            <td>
                                {{ $job->care_of_p }}
                            </td>
                        </tr>
                        <tr style="background-color: rgb(185, 184, 184)">
                            <td>Village/Town/Road/House/Flat</td>
                            <td>
                                {{ $job->address }}
                            </td>
                            <td>Village/Town/Road/House/Flat</td>
                            <td>
                                {{ $job->address_p }}
                            </td>
                        </tr>
                        <tr style="background-color: rgb(185, 184, 184)">
                            <td>District</td>
                            <td>
                                {{ $dis->dis_name }}
                            </td>
                            <td>District</td>
                            <td>
                                {{ $disP->dis_name }}
                            </td>
                        </tr>
                        <tr style="background-color: rgb(185, 184, 184)">
                            <td>P.S/Upazila</td>
                            <td>
                                {{ $thana->thana_name }}
                            </td>
                            <td>P.S/Upazila</td>
                            <td>
                                {{ $thanaP->thana_name }}
                            </td>
                        </tr>
                        <tr style="background-color: rgb(185, 184, 184)">
                            <td>Post Code</td>
                            <td>
                                {{ $job->post_code }}
                            </td>
                            <td>Post Code</td>
                            <td>
                                {{ $job->post_code_p }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="h6" style="margin-top: 5px">Academic Qualifications :</div>
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
                        <tr style="background-color: rgb(185, 184, 184)">
                            <td>
                                {{ $job->exam }}
                            </td>
                            <td>
                                {{ $job->board }}
                            </td>
                            <td>
                                {{ $job->group }}
                            </td>
                            <td>
                                {{ $job->result }}
                            </td>
                            <td>
                                {{ $job->pass_year }}
                            </td>
                            <td>
                                {{ $job->roll }}
                            </td>
                            <td>
                                N/A
                            </td>
                        </tr>
                        <tr style="background-color: rgb(185, 184, 184)">
                            <td>
                                    {{ $job->hsc_exam }}
                            </td>
                            <td>
                                {{ $job->hsc_board }}
                            </td>
                            <td>
                                {{ $job->hsc_group }}
                            </td>
                            <td>
                                {{ $job->hsc_result }}
                            </td>
                            <td>
                                {{ $job->hsc_pass_year }}
                            </td>
                            <td>
                                {{ $job->hsc_roll }}
                            </td>
                            <td>N/A</td>
                        </tr>
                        <tr style="background-color: rgb(185, 184, 184)">
                            <td>
                                {{ $job->graduation_exam }}
                            </td>
                            <td>
                                 {{ $job->graduation_board }}
                            </td>
                            <td>
                                {{ $job->graduation_group }}
                            </td>
                            <td>
                                 {{ $job->graduation_result }}
                            </td>
                            <td>
                                 {{ $job->graduation_pass_year }}
                            </td>
                            <td>
                                 {{ $job->graduation_roll }}
                            </td>
                            <td>N/A</td>
                        </tr>
                    </tbody>
                </table>
                <p>I declare that the information provided in this form are correct, true and complete to the best of my knowledge and belief. If any information is found false, incorrect, and incomplete or if any detected before or after examination, any action can be taken against me by the Authority including cancellation of my candidature.</p>
                <p>Reference Id :  {{ $job->refer_code }}, Please keep this number to pay the application fee within 72 hours from any mobile phone by Bkash</p><br>
                <p>1st - Format : Dial *247# Or Go to your Bkash App ( Send Money ) ( Mobile Number ) ( Reference ID Code ) ( Pin Number ) send. [Example : ( send money ) ( 01939-244834 ) ( G97999 ) ( 50 ) ( 12344 ) send.] </p>
            </div>
        </div>
    </section>
</body>
</html>
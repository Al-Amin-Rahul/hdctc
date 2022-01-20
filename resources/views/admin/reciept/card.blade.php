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
    .three{
        width: 100%;
    }
    .box1{
        width: 35%;
        float: left;
    }
    .box2{
        width: 35%;
        float: left;
    }
    .box3{
        width: 30%;
        float: left;
    }
    .info{
        width: 100%;
    }
    .footer{
        width: 100%
    }
    .fot1{
        width: 50%;
        float: left;
    }
    .fot2{
        width: 50%;
        float: left;
    }
    .page-break {
        page-break-after: always;
    }
    table {
        border-collapse: collapse;
    }
    table th,
    table td{
        border: 1px solid grey;
        padding: 5px;
    }

</style>
<body>
    <div class="id" style="">Reference Id- {{ $reg->refer_code }}</div>
    <div class="three" style="margin-top: 10px">
        <div class="box1" style="font-weight: 700;">
            HDCTC
        </div>
        <div class="box2">
            @if($reg->service==1 && $reg->service_option==1)
                <u>Old Age Allowance</u>
            @elseif($reg->service==1 && $reg->service_option==2)
                <u>Widow's Allowance</u>
            @elseif($reg->service==1 && $reg->service_option==3)
                <u>Maternity Allowance</u>
            @elseif($reg->service==1 && $reg->service_option==4)
                <u>Disability Allowance</u>
            @elseif($reg->service==1 && $reg->service_option==5)
                <u>Adolescent Allowance</u>
            @elseif($reg->service==2 && $reg->service_option==1)
                <u>Eye Camp</u>
            @elseif($reg->service==2 && $reg->service_option==2)
                <u>Health Camp</u>
            @elseif($reg->service==2 && $reg->service_option==3)
                <u>Blood Group Test</u>
            @elseif($reg->service==2 && $reg->service_option==4)
                <u>Drug Cures</u>
            @elseif($reg->service==3 && $reg->service_option==1)
                <u>Computer Training</u>
            @elseif($reg->service==3 && $reg->service_option==2)
                <u>Sewing Training</u>
            @elseif($reg->service==3 && $reg->service_option==3)
                <u>Beauty Parlor</u>
            @else
                <u>Handicraft And Cottage Industries</u>
            @endif
        </div>
        <div class="box3" style="border: 1px solid black;margin-top: -40px">
            <div class="pic" style="padding: 50px 0px 50px 0px;text-align: center">Picture</div>
        </div>
    </div>
    <section>
        <div class="info" style="margin-top: 100px;">
            <div class="name"><span style="font-weight: 600">Name :</span> {{ $reg->student_name }}</div>
            <div class="f_name" style="margin-top: 15px"><span style="font-weight: 600">Father's Name :</span> {{ $reg->father_name }}</div>
            <div class="m_name" style="margin-top: 15px"><span style="font-weight: 600">Mother's Name :</span> {{ $reg->mother_name }}</div>
            <div class="vill" style="margin-top: 15px"><span style="font-weight: 600">Division :</span> <span>{{ $div->div_name }}</span> <span style="margin-left: 30px;font-weight: 600">Post Code : </span> {{ $reg->post_code }}</div>
            <div class="union" style="margin-top: 15px"><span style="font-weight: 600">District Name :</span> {{ $dis->dis_name }} <span style="margin-left: 30px;font-weight: 600">Upazila : </span> {{ $thana->thana_name }}</div>
            <div class="dist" style="margin-top: 15px"><span style="font-weight: 600">Union :</span> {{ $union->union_name }} <span style="margin-left: 30px;font-weight: 600">Issue Date : </span> {{ $reg->created_at->format('Y-m-d') }}</div>
            @if ($reg->service == 2)
                <div class="exp" style="margin-top: 15px"><span style="font-weight: 600">Expire Date :</span>{{ $reg->created_at->addYear(1)->format('Y-m-d') }}</div>
            @else
                <div class="exp" style="margin-top: 15px"><span style="font-weight: 600">Expire Date :</span>{{ $reg->created_at->addYear(5)->format('Y-m-d') }}</div>
            @endif
        </div>
    </section>
    <section>
        <div class="footer" style="margin-top: 120px">
            <div class="fot1">
                <span style="border-top: 2px solid black">Beneficiary's Signature</span>
            </div>
            <div class="fot2">
                <span style="border-top: 2px solid black; margin-left: 20px">Approve By</span>
            </div>
        </div>
    </section>
    <div class="page-break"></div>
    <h4 style="text-align: center">List Of Service Providers</h4>
    <section>
        <table style="width: 100%">
            <tbody>
                <tr>
                    <th>Sl No</th>
                    <th>Service Date</th>
                    <th>Amount</th>
                    <th>Provide By</th>
                </tr>
                <tr>
                    <td style="text-align: center">01</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center">02</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center">03</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center">04</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center">05</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center">06</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center">07</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center">08</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center">09</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center">10</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </section>
</body>
</html>
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
            <u>{{ $reg->service_option }}</u>
        </div>
        <div class="box3" style="border: 1px solid black;margin-top: -40px">
            <div class="pic" style="padding: 50px 0px 50px 0px;text-align: center">Picture</div>
        </div>
    </div>
    <section>
        <div class="info" style="margin-top: 100px;">
            <div class="name">Name:</div>
            <div class="f_name" style="margin-top: 15px">Father's Name:</div>
            <div class="m_name" style="margin-top: 15px">Mother's Name:</div>
            <div class="vill" style="margin-top: 15px">Village...................................... Post Office.................................</div>
            <div class="union" style="margin-top: 15px">Union Name...................................... Upazila.................................</div>
            <div class="dist" style="margin-top: 15px">District...................................... Issue Date.................................</div>
            <div class="exp" style="margin-top: 15px">Expire Date................................</div>
        </div>
    </section>
    <section>
        <div class="footer" style="margin-top: 120px">
            <div class="fot1">
                <span style="border-top: 2px solid black">Beneficiary's Signature</span>
            </div>
            <div class="fot2">
                <span style="border-top: 2px solid black">Approve By</span>
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
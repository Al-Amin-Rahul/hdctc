<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    
    <style>
    .invoice-box {
        width: 100%;
        margin: auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: center;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    .invoice-box table tr.heading td {
        background: #eee;
        border: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    .union{
        text-align: left !important;
    }
    .water-mark{
        position:absolute;
        font-size:200px;
        transform: rotate(-45deg);
        opacity: .1;
        top:35%;
        left:5%;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <div class="water-mark">HDCTC</div>
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="5">
                    <table>
                        <tr>
                            <td>
                                <h2>Human Development Community to Communication</h2>
                                Shaghata, Gaibandha <br>
                                <span>Email- <u>hdctc.bd@gmail.com</u>, Website- <u>https://hdctc.com.bd</u></span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="details">
                <td class="union" colspan="3">Union : {{ $union->union_name }}</td>
                <td colspan="2">Date : {{ $first_date }} - {{ $last_date }}</td>
            </tr>
            <tr class="heading">
                <td>No</td>
                <td>Student Name</td>
                <td>Student Phone</td>
                <td>Student Email</td>
                <td>Remark</td>
            </tr>
            @php($i=1)
            @foreach($students as $student)
            <tr class="details item">
                <td>{{ $i++ }}</td>
                <td>{{ $student->student_name }}</td>
                <td>{{ $student->student_phone }}</td>
                <td>{{ $student->student_email }}</td>
                <td>{{ $student->status }}</td>
                <td></td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>

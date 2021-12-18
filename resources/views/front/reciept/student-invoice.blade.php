<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

</style>
<body>
    <div class="invoice-box" style="max-width: 800px;margin: auto;padding: 30px;border: 1px solid #eee;box-shadow: 0 0 10px rgba(0, 0, 0, .15);font-size: 16px;line-height: 24px;font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;color: #555;">
        <table cellpadding="0" cellspacing="0" style="width: 100%;line-height: inherit;text-align: left;">
            <tr class="top">
                <td colspan="2" style="padding: 5px;vertical-align: top;">
                    <table style="width: 100%;line-height: inherit;text-align: left;">
                        <tr>
                            <td class="title" style="border:1px solid black;border-radius:50%;font-size: 25px;color: #333;">
                                Reference id - 000000 <br>
                            </td>
                            
                            <td style="padding: 5px;vertical-align: top;text-align: right;padding-bottom: 20px;">
                                Invoice #: 123<br>
                                Created: January 1, 2015<br>
                                Due: February 1, 2015
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="https://cdn.pixabay.com/photo/2017/02/19/23/09/success-2081168_1280.jpg" />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2" style="padding: 5px;vertical-align: top;">
                    <table style="width: 100%;line-height: inherit;text-align: left;">
                        <tr>
                            <td style="padding: 5px;vertical-align: top;padding-bottom: 40px;">
                                Next Step Webs, Inc.<br>
                                12345 Sunny Road<br>
                                Sunnyville, TX 12345
                            </td>
                            
                            <td style="padding: 5px;vertical-align: top;text-align: right;padding-bottom: 40px;">
                                Acme Corp.<br>
                                John Doe<br>
                                john@example.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td style="padding: 5px;vertical-align: top;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
                    Payment Method
                </td>
                
                <td style="padding: 5px;vertical-align: top;text-align: right;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
                    Check #
                </td>
            </tr>
            
            <tr class="details">
                <td style="padding: 5px;vertical-align: top;padding-bottom: 20px;">
                    Check
                </td>
                
                <td style="padding: 5px;vertical-align: top;text-align: right;padding-bottom: 20px;">
                    1000
                </td>
            </tr>
            
            <tr class="heading">
                <td style="padding: 5px;vertical-align: top;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
                    Item
                </td>
                
                <td style="padding: 5px;vertical-align: top;text-align: right;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
                    Price
                </td>
            </tr>
            
            <tr class="item">
                <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
                    Website design
                </td>
                
                <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
                    $300.00
                </td>
            </tr>
            
            <tr class="item">
                <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
                    Hosting (3 months)
                </td>
                
                <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
                    $75.00
                </td>
            </tr>
            
            <tr class="item last">
                <td style="padding: 5px;vertical-align: top;border-bottom: none;">
                    Domain name (1 year)
                </td>
                
                <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: none;">
                    $10.00
                </td>
            </tr>
            
            <tr class="total">
                <td style="padding: 5px;vertical-align: top;"></td>
                
                <td style="padding: 5px;vertical-align: top;text-align: right;border-top: 2px solid #eee;font-weight: bold;">
                   Total: $385.00
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
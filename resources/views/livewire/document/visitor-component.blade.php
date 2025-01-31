<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Visitor Badge</title>
        <style>
            body{
                font-family: Arial, sans-serif;
                text-align: center;
                width: 200px;
                height: 400px;
                border: 1px solid black;
                padding: 20px;
                margin: auto;
                position: relative;
            }

            .header {
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 10px;
            }

            .visitor-info{
                font-size: 14px;
                margin-bottom: 15px;
            }

            .qr-code{
                margin-top: 10px;
            }

            .footer{
                position: absolute;
                bottom: 10px;
                width: 100%;
                font-size: 10px;
            }
        </style>
    </head>

    <body>
    
        <div class="header">
            The Exhibition Network
        </div>

        <div class="qr-code">
               <img src="data:image/png;base64,{{$qrCode}}" alt="QR code"> 
        </div>

        <div class="visitor-info">
            <p><strong>{{$data['title']}}</strong></p>
            <p><strong>{{$data['date']}}</strong></p>

            <p><strong>{{$visitor->name}}</strong></p>
            <p><strong>{{$visitor->designation}}</strong></p>
        </div>

        <div class="footer">
            Scan QR for more details
        </div>

    </body>
</html>
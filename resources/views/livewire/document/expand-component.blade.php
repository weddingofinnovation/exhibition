<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Generate PDF From View</title>
</head>
    <body>
       
        <div class="container text-start">
                {{$title}}
                {{$date}}

                <div class="row justify-content-center">{{QrCode::size(180)->generate(url('/birthday'))}}</div>
        </div>
    </body>
</html>
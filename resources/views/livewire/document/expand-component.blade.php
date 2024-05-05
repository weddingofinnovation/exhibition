<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Generate PDF From View</title>
</head>
    <body>
       
        <div class="container text-center">
                {{QrCode::size(255)->generate('thanks for it!!')}}
                {{$company}}
                {{$name}}
                {{$designation}}
        </div>
    </body>
</html>
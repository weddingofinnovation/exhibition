<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
            <div class="container">
                <div class="d-flex  justify-content-between">
                    {{QrCode::size(255)->generate('thanks for it!!')}}
                    <h1>{{$company}}</h1>
                    <h1>{{$name}}</h1>
                    <h1>{{$designation}}</h1>
                </div>
            </div>
    </body>
</html>
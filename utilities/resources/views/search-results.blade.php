<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
    <title>Document</title>
</head>
<body>
    <h3>Resultados</h3>
    <ul>
        @foreach ($users as $user )
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
    
    
</body>
</html>
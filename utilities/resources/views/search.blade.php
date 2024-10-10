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
    <form method="POST" action="{{ route('search') }}">
        @csrf
        <input type="text" placeholder="Type name to search" name="name" />
        <input type="submit" />
    </form>

</body>

</html>

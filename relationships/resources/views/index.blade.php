<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>{{ $user->name }} Phones:</h1>
    <ul>
        @foreach ($user->phones as $phone)
            <li>{{ $phone->prefix }} {{ $phone->phone_number }}</li>
        @endforeach
        <br>
        <h1>{{ $user->name }} Roles:</h1>


        <ul>
            @foreach ($user->roles as $role)
                <li>{{ $role->name }} Added_by: {{ $role->pivot->added_by }}</li>
            @endforeach

            <h1>User Image:</h1>

            @if ($user->image)
                <img src="{{ $user->image->url }}" alt="User Image">
            @else
                <p>No image found for this user.</p>
            @endif
        </ul>
</body>

</html>

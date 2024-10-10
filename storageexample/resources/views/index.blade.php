<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('create') }}">Create</a>
    <ul>
    @forelse ($infos as $info)
        <li>{{ $info->name }} {{ $info->file_uri }}</li>
        <li><img src="{{ asset('images/'.$info->file_uri)}}" width="256" alt=""></li>
        <li><img src="{{ asset('storage/images/'.$info->file_uri)}}" width="256" alt=""></li>
    @empty
        <li>No data</li>
    @endforelse
</ul>
</body>
</html>
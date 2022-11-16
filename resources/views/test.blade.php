<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    @php
        $myHtml = '<h3>hi there</h3>';
        $age = 21;
        $arr = ['apple', 'orange', 'mango'];
    @endphp
    {{ $a }}
    {!! $myHtml !!}

    @if ($age > 21)
        <p>You are older than me</p>
    @else
        <p>You are younger than me</p>
    @endif

    @for ($i = 0; $i < count($arr); $i++)
        {{ $arr[$i] }}
    @endfor

    <ul>
        @foreach ($arr as $a)
            <li>{{ $a }}</li>
        @endforeach
    </ul>

    @isset($age)
        {{ $age }}
    @endisset

    <img src="{{ asset('img/laravel-9.jpg') }}" alt="">
</body>

</html>

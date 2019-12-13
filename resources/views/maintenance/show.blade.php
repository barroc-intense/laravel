@extends('app')

@section('content')

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    @foreach($storings as $storing)
        <li class="storing" style="margin-bottom: 20px;">
            <h3>{{$storing->name}}</h3>
            <h4>{{$storing->description}}</h4>
        </li>
    @endforeach
</ul>

</body>
</html>
@endsection

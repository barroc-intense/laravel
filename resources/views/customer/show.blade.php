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
    <h1 class="card-title"> Uw naam: {{ $customers->name }} </h1>
    <h1 class="card-title">Uw Email: {{ $customers->email }} </h1>
</body>
</html>
@endsection

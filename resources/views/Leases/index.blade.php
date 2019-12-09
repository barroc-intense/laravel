
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
    @foreach($quotations as $quotation)
        <li>{{ $quotation->company_name }}</li>
        <li>{{ $quotation->email }}</li>
        <li>{{ $quotation->type }}</li>
        <li>{{ $quotation->KVK }}</li>
    @endforeach


    <h1>Contract aanmaken</h1>
    <form action="{{ route('leases.store') }}" method="post">
        @csrf
        <select class="form-control" name="leaseType_id" id="">
            @foreach($leasetypes as $leasetype)
                <option value="{{ $leasetype->id }}"> {{ $leasetype->name }}</option>
            @endforeach
        </select>
        <select class="form-control" name="customer_id" id="">
            @foreach($leasetypes as $leasetype)
                <option value="{{ $leasetype->id }}"> {{ $leasetype->period }}</option>
            @endforeach
        </select>

        <select class="form-control" name="finance_id" id="">
            @foreach($financesid as $financeid)
                @if($financeid->role_id == 10)
                    <option value="{{ $financeid->id }}"> {{ $financeid->role_id }}</option>
                @endif
            @endforeach
        </select>
        <div class="form-group">
            <label for="KVK">KVK</label>
            <input class="form-control" type="number" name="KVK" id="" value="{{ old('KVK') }}">
        </div>

        <div class="form-group">
                <label for="BKR">BKR</label>
            <input class="form-control" type="checkbox" name="BKR" id="BKR">
        </div>

        <select class="form-control" name="appraat" id="">
            <option value="deluxe">deluxe</option>
            <option value="light">light</option>
        </select>

        <div class="form-group">
            <label for="price">Prijs</label>
            <input class="form-control" type="number" name="price" id="" value="{{ old('price') }}">
        </div>





        <div class="form-group">
            <input type="submit" value="Contract aanmaken">
        </div>
    </form>
</body>
</html>
@endsection


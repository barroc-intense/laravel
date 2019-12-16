@extends('app')

@section('content')
    <form action="{{ route('maintenance.store') }}" method="post">
    @csrf

        <select class="form-control" name="user_id" id="">
            @foreach($users as $user)
                <option value="{{ $user->id }}"> {{ $user->name }}</option>
            @endforeach
        </select>
         <select class="form-control" name="lease_id" id="">
            @foreach($leases as $lease)
                <option value="{{ $lease->id }}"> {{ $lease->id }}</option>
            @endforeach
         </select>
        <div class="form-group">
            <label for="name">Naam:</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="description">Beschrijving:</label>
            <input class="form-control" type="text" name="description" id="description">
        </div>

                        <div class="form-group">
                            <input type="submit" value="Contract aanmaken">
                        </div>


@endsection

@extends('app')

@section('content')
    <h1>customer</h1>
        <a class="btn btn-primary" href="{{ route('customer.edit', Auth::user()->id) }}">EDIT</a>
@endsection
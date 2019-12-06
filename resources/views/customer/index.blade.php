@extends('app')

@section('content')
    <ul>
            <li>{{$customer->name}}</li>
    </ul>




        <a class="btn btn-primary" href="{{ route('customer.edit', Auth::user()->id) }}">EDIT</a>
@endsection

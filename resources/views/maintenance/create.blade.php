
@extends('app')
@section('content')

    <h1>Voeg werkbon toe!</h1>
    <form action="{{ route('maintenance.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Description:</label>
            <textarea name="description"  rows="4" cols="50"></textarea>
        </div>

        <input type="submit" value="Voeg werkbon toe">
    </form>
@endsection
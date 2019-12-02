@extends('app')

@section('content')
    <form method="POST" href="{{ route('sales.store') }}">
        @csrf
        <div>
        <label for="customer_name">Klantennaam</label>
            <select class="form-control" name="customer_id" id="">
            @foreach($users as $user)
                <option value="{{ $user->id }}"> {{ $user->name }}</option>
            @endforeach
            </select>
        </div>
        <div>
        <label>Beschrijving</label>
        <textarea name="description" rows="4" cols="50"></textarea>
        </div>

        <button type="submit">Verzenden</button>
    </form>
@endsection
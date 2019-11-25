@extends('app')
@section('content')

    <h2>prijsopgave</h2>

    <form action="">
        @csrf
        <div class="fill">
            <label for="type">type</label>
            <select name="type" id="type" required>
                <option value="deluxe">bit deluxe</option>
                <option value="light">bit light</option>
            </select>
        </div>

        <div class="fill">
            <label for="email">email</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="fill">
            <label for="company">bedrijfs naam</label>
            <input type="text" name="company" id="company" required>
        </div>

        <div class="fill">
            <label for="kvk">kvk nummer</label>
            <input type="number" name="kvk" id="kvk" required>
        </div>
    </form>

@endsection
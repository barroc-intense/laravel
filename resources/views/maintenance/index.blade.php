@extends('app')

@section('content')
    <form action="" class="storingformulier">
        <form action="/action_page.php">

            <label for="fname">Storing</label>
            <input type="text" id="fname" name="firstname" placeholder="Schrijf uw storing">

            <label for="fname">Uw naam</label>
            <input type="text" id="fname" name="firstname" placeholder="Schrijf uw naam hier in">

            <label for="fname">Achter naam</label>
            <input type="text" id="fname" name="firstname" placeholder="Schrijf uw achternaam hier in">

            <label for="lname">Email</label>
            <input type="text" id="lname" name="lastname" placeholder="Schrijf uw email hier in">

{{--            <form action="{{route('orders.store')}}" method="post">--}}
{{--                @csrf--}}
{{--                <input type="hidden" name="product_id" value="{{$product->id}}" >--}}
{{--                <input type="submit" value="Kopuh" class="btn btn-info">--}}
{{--            </form>--}}
    </form>
@endsection

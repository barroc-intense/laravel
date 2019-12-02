@extends('app')
@section('content')
    <?php
    use Illuminate\Support\Facades\Auth;
    ?>
    <h1>Edit Product</h1>
    <form action="{{ route('customer.update', Auth::user()->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">name</label>
            <input name="name" type="text" value="{{$customer->name}}">
        </div>

        <div class="form-group">
            <label for="">email</label>
            <input type="text" name="email" value="{{ $customer->email }}" id="">
        </div>

        <div class="form-group">
            <label for="">password</label>
            <input type="text" name="password" value="{{ $customer->password }}">
        </div>
        <input type="submit" value="Edit profile">
    </form>
@endsection
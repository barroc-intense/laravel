@extends('app')
@section('content')
    <h1>Edit Category</h1>
    <form action="{{ route('purachses.update', $products->id) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="">name</label>
            <input name="name" type="text" value="{{$products->name}}">
        </div>

        <div class="form-group">
            <label for="">price</label>
            <input name="price" type="number" step="0.01" value="{{$products->price}}">
        </div>

        <input type="submit" value="Edit category">
    </form>
@endsection

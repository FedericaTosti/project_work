@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <p>${{ $product->price }}</p>
            <p>Stock: {{ $product->stock }}</p>
        </div>
    </div>
</div>
@endsection




@extends('layouts.app')



@section('title', 'Dettaglio Prodotto')

@section('content')
    <div class="card mb-4">
        <img src="{{ asset('storage/images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <p class="card-text">Prezzo: €{{ $product->price }}</p>
            <p class="card-text">Quantità in magazzino: {{ $product->quantity }}</p>
        </div>
    </div>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Torna ai Prodotti</a>
@endsection


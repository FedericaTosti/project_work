

@extends('layouts.app')





@section('title', 'Modifica Prodotto')

@section('content')
    <h1 class="mb-4">Modifica Prodotto</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" class="form-control" rows="3" required>{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantità</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $product->quantity }}" required>
        </div>
        <div class="form-group">
            <label for="image">Immagine</label>
            <input type="file" name="image" id="image" class="form-control-file">
            <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}" width="100" class="mt-2">
        </div>
        <button type="submit" class="btn btn-primary">Aggiorna Prodotto</button>
    </form>
@endsection


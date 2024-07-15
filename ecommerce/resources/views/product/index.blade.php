

@extends('layouts.app')



@section('title', 'Gestione Prodotti')

@section('content')
    <h1 class="mb-4">Gestione Prodotti</h1>
    <a href="{{ route('products.create') }}" class="btn btn-success mb-4">Aggiungi Prodotto</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Prezzo</th>
                    <th>Quantità</th>
                    <th>Immagine</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ Str::limit($product->description, 50) }}</td>
                        <td>€{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td><img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}" width="50"></td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Modifica</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


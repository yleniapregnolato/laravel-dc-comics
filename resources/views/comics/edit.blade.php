@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Modifica: {{ $comic->titolo }}</h2>

        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3 me-5 ms-5">
                <label for="titolo" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="titolo" name="titolo" value="{{ $comic->titolo }}">
    
                <label for="Prezzo" class="form-label">Prezzo:</label>
                <input type="text" class="form-control" id="Prezzo" name="prezzo" value="{{ $comic->prezzo }}">
    
                <label for="data_vendita" class="form-label">Data vendita</label>
                <input type="text" class="form-control" id="data_vendita" name="data_vendita" value="{{ $comic->data_vendita }}">
    
                <label for="tipo" class="form-label">Tipo</label>
                <select class="form-select" id="tipo" name="tipo">
                    <option>Seleziona</option>
                    <option @selected($comic->tipo === "comic book") value="comic book">Comic book</option>
                    <option @selected($comic->tipo === "graphic novel") value="graphic novel">Graphic Novel</option>
                </select>
    
                <button class="btn btn-success mt-4" type="submit">Salva</button>
            </div>
        </form>
    </div>
@endsection

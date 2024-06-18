@extends('layouts.app')

@section('content')
    <h1>Crea un nuovo fumetto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3 me-5 ms-5">
            <label for="titolo" class="form-label">Titolo</label>
            <input value="{{ old('titolo') }}" type="text" class="form-control" id="titolo" name="titolo">

            <label for="Prezzo" class="form-label">Prezzo:</label>
            <input value="{{ old('prezzo') }}" type="text" class="form-control" id="Prezzo" name="prezzo">

            <label for="data_vendita" class="form-label">Data vendita</label>
            <input value="{{ old('data_vendita') }}" type="text" class="form-control" id="data_vendita" name="data_vendita">
         
            <label for="tipo" class="form-label">Tipo</label>
            <select class="form-select" id="tipo" name="tipo">
                <option selected>Seleziona</option>
                <option @selected(old('tipo') === 'comic_book') value="comic_book">Comic book</option>
                <option @selected(old('tipo') === 'graphic_novel') value="graphic_novel">Graphic Novel</option>
            </select>

            <button class="btn btn-success mt-4" type="submit">Salva</button>
        </div>
    </form>
@endsection

@extends('layouts.app')

@section('content')
    <h1>Crea un nuovo fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST">

        <div class="mb-3 me-5 ms-5">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="titolo" name="title">

            <label for="descrizione" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="descrizione" name="title">

            <button class="btn btn-success mt-4" type="submit">Salva</button>
        </div>
    </form>
@endsection

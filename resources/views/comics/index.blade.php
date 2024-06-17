@extends('layouts.app')

@section('content')
    <h1 class="text-center">FUMETTI</h1>
    <a class="btn border border-black mt-3 mb-3" href="{{ route('comics.create') }}">Crea un nuovo fumetto</a>
    
    <div class="container">
        <ul>
            @foreach ($comics as $comic)
                <li>
                    <img class="w-25" src="{{ $comic->immagine }}" alt="">
                    <h4>{{ $comic->titolo }}</h2>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

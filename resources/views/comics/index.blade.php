@extends('layouts.app')

@section('content')
    <h1 class="text-center">FUMETTI</h1>
    <a class="btn border border-black mt-3 mb-3" href="{{ route('comics.create') }}">Crea un nuovo fumetto</a>
    
    <div class="container">
        <ul>
            @foreach ($comics as $comic)
                <li class="">
                    <img class="w-25" src="{{ $comic->immagine }}" alt="">
                    <h4>{{ $comic->titolo }}</h2>
                    <a class="btn border border-black mt-3 mb-3" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Dettagli</a><br>
                    <a class="btn border border-black mt-3 mb-3" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica</a>
                    <form action="{{ route('comics.destroy', ['comic' => $comic->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn border border-black mt-3 mb-3">cancella</button>
                      </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

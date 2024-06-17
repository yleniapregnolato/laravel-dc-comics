@extends('layouts.app')

@section('content')
<h1>Dettagli fumetto</h1>

<p><span class="fw-bold">Descrizione:</span>{{ $comic->descrizione }}</p>
<p><span class="fw-bold">Prezzo:</span>{{ $comic->prezzo }}</p>
<p><span class="fw-bold">Serie:</span>{{ $comic->serie }}</p>
@endsection
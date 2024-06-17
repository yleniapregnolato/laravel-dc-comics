@extends('layouts.app')

@section('content')
<h1>Dettagli fumetto</h1>

<p><span class="fw-bold">Descrizione:</span>{{ $comic->descrizione }}</p>
<p><span class="fw-bold">Prezzo:</span>{{ $comic->prezzo }}</p>
<p><span class="fw-bold">Serie:</span>{{ $comic->serie }}</p>
<p><span class="fw-bold">Data di vendita:</span>{{ $comic->data_vendita }}</p>
<p><span class="fw-bold">Tipo:</span>{{ $comic->tipo }}</p>

@endsection
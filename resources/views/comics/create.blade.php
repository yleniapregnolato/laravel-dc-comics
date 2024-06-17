@extends('layouts.app')

@section('content')
<h1>Crea un nuovo fumetto</h1>

<form action="{{ route('comics.store') }}" method="POST">
@endsection
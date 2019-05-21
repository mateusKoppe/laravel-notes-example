@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h1>Notas</h1>

    <a class="btn btn-primary" href="{{ route('notes.create') }}">Adicionar</a>
</div>
@endsection

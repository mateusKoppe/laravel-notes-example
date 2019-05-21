@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h1>Notas</h1>
    <h2>Edita nota</h2>
    <form action="{{ route('notes.update', $note) }}" method="POST" class="form">
        @csrf

        @method('PUT')
        @include('notes.form', ["note" => $note])
        <button class="btn btn-success">Editar</button>
    </form>
    <hr>
    <a class="btn btn-secondary" href="{{ route('notes.index') }}">Volta para lista</a>
</div>
@endsection

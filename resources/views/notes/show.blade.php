@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h1>Notas</h1>
    <h2>Visualiza nota</h2>
    <hr>
    <div>
        <h3>{{$note->title}}</h3>
        <p>{{$note->description}}</p>
        @if ($note->schedule)
        <p> <b>Para:</b> {{$note->schedule->format('d/m/Y')}} </p>
        @endif
        <div class="mt-2">
            <a href="{{ route('notes.edit', $note) }}" class="btn btn-sm btn-primary">Editar</a>
            <a href="{{ route('notes.destroy', $note) }}" class="btn btn-sm btn-danger">Deletar</a>
        </div>
    </div>
    <hr>
    <a class="btn btn-secondary" href="{{ route('notes.index') }}">Volta para lista</a>
</div>
@endsection

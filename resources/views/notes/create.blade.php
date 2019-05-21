@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h1>Notas</h1>
    <h2>Adiciona notas</h2>
    <form action="{{ route('notes.store') }}" method="POST" class="form">
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Título">
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea type="text" name="description" placeholder="Descrição" class="form-control" id="description"></textarea>
        </div>
        <div class="form-group">
            <label for="schedule">Para quando</label>
            <input type="date" name="schedule" class="form-control" id="schedule">
        </div>
        <button class="btn btn-success">Adicionar</button>
    </form>
    <hr>
    <a class="btn btn-secondary" href="{{ route('notes.index') }}">Volta para lista</a>
</div>
@endsection

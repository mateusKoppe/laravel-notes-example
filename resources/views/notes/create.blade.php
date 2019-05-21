@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h1>Notas</h1>
    <h2>Adiciona notas</h2>
    <form action="{{ route('notes.store') }}" method="POST" class="form">
        @csrf
        @include('notes.form')
        <button class="btn btn-success">Adicionar</button>
    </form>
    <hr>
    <a class="btn btn-secondary" href="{{ route('notes.index') }}">Volta para lista</a>
</div>
@endsection

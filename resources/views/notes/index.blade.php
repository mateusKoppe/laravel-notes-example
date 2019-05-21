@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h1>Notas</h1>

    <div class="row">
    @foreach ($notes as $note)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card mb-1">
                <header class="card-header">
                    {{$note->title}}
                </header>
                <div class="card-body">
                    {{$note->description}}
                    @if ($note->schedule)
                    <br>
                    <b>Para:</b> {{$note->schedule->format('d/m/Y')}}
                    @endif
                </div>
            </div>
        </div>
    @endforeach
    </div>

    <div class="mt-2">
        <a class="btn btn-primary" href="{{ route('notes.create') }}">Adicionar</a>
    </div>
</div>
@endsection

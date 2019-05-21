@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h1>Notas</h1>

    <div class="row">
    @foreach ($notes as $note)
        <div class="col-12 col-md-6 col-lg-4">
            <a href="{{route('notes.show', $note)}}">
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
            </a>
        </div>
    @endforeach
    </div>

    <div class="text-center">
        @if (!$notes->onFirstPage())
        <a class="btn btn-sm btn-light" href="{{ $notes->previousPageUrl() }}">Ante</a>


        <a class="btn btn-sm btn-light" href="{{ $notes->url($notes->currentPage() - 1) }}">{{$notes->currentPage() - 1}}</a>
        @endif

        <a class="btn btn-sm btn-primary">{{$notes->currentPage()}}</a>

        @if ($notes->hasMorePages())
        <a class="btn btn-sm btn-light" href="{{ $notes->url($notes->currentPage() + 1) }}">{{$notes->currentPage() + 1}}</a>

        <a class="btn btn-sm btn-light" href="{{ $notes->nextPageUrl() }}">Prox</a>
        @endif
    </div>

    <div class="mt-2">
        <a class="btn btn-primary" href="{{ route('notes.create') }}">Adicionar</a>
        <a class="btn btn-secondary" href="{{ route('notes.trash') }}">Lixeira</a>
    </div>
</div>
@endsection

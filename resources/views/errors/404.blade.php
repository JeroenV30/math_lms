@extends('layouts.app', ['title' => 'Niet gevonden'])

@section('content')
    <div class="container-page max-w-2xl pt-20 text-center">
        <p class="font-serif text-6xl text-faint">∅</p>
        <h1 class="page-title mt-4">Deze pagina bestaat niet</h1>
        <p class="mt-3 font-serif text-lg text-muted">{{ $exception->getMessage() ?: 'De lege verzameling: hier is niets.' }}</p>
        <a href="{{ route('course.index') }}" class="btn btn-primary mt-8">Naar het cursusoverzicht</a>
    </div>
@endsection

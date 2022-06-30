@extends('layouts.main')

@section('content')
    <div class="container d-flex justify-content-center my-3 flex-column align-items-center">
        <img class="w-25" src="{{ $comics->image }}" alt="{{ $comics->title }}">
        <h6>Title: {{ $comics->title }}</h6>
        <p>Type: {{ $comics->type }}</p>

        <div class="d-inline-block">
            <a class="btn btn-dark my-2" href="{{ route('comics.index') }}">Back</a>

        </div>
    </div>
@endsection

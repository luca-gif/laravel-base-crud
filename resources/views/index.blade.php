@extends('layouts.main')

@section('content')
    <main>

        <div class="container">
            <ul>
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-4 card">
                            <img src="{{ $comic->image }}" alt="">
                            <div class="text">
                                <li>{{ $comic->title }}</li>
                                <li>{{ $comic->type }}</li>
                            </div>
                            <a class="btn btn-danger" href="{{ route('index.show', $comic) }}">Show</a>
                        </div>
                    @endforeach
                </div>
            </ul>
        </div>

    </main>
@endsection

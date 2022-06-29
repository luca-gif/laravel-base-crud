@extends('layouts.main')

@section('content')
    <main>

        <div class="container">
            <ul>
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-4 card">
                            <img src="{{ $comic->image }}" alt="">
                            <li>{{ $comic->name }}</li>
                            <li>{{ $comic->type }}</li>
                        </div>
                    @endforeach
                </div>
            </ul>
        </div>

    </main>
@endsection

@extends('layouts.main')

@section('content')
    <main>

        <div class="container">
            <ul>
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-4 card">
                            <img src="{{ $comic->image }}" alt="{{ $comic->title }}">
                            <div class="text">
                                <li>{{ $comic->title }}</li>
                                <li>{{ $comic->type }}</li>
                            </div>
                            <a class="btn btn-danger" href="{{ route('comics.show', $comic) }}">Show</a>
                            <a class="btn btn-success my-2" href="{{ route('comics.edit', $comic) }}">Edit</a>
                            <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-dark w-100" type="submit">Delete</button>
                            </form>

                        </div>
                    @endforeach
                </div>
            </ul>
        </div>

    </main>
@endsection

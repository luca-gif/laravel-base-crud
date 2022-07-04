@extends('layouts.main')


@section('content')
    <div class="container">

        <div class="row">
            <div class="col-8 offset-2">
                <form action="{{ route('comics.update', $comic) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" value="{{ old('title', $comic->title) }}"
                            class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                            placeholder="Title">
                        @error('title')
                            {{ $message }}
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" value="{{ old('type', $comic->type) }}"
                            class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                            placeholder="Type">
                        @error('type')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Url image</label>
                        <input type="text" value="{{ old('image', $comic->image) }}"
                            class="form-control @error('image') is-invalid @enderror" name="image" id="image"
                            placeholder="Image">
                        @error('image')
                            {{ $message }}
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </form>
            </div>
        </div>

    </div>
@endsection

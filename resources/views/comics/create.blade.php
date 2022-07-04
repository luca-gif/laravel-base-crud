@extends('layouts.main')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-8 offset-2">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" value="{{ old('title') }}" name="title" id="title"
                            placeholder="Title">
                        @error('title')
                            {{ $message }}
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" value="{{ old('type') }}" name="type" id="type"
                            placeholder="Type">
                        @error('type')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Url image</label>
                        <input type="text" class="form-control" value="{{ old('image') }}" name="image"
                            id="image" placeholder="Image">
                        @error('image')
                            {{ $message }}
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-danger my-3">Submit</button>
                </form>
            </div>
        </div>

    </div>
@endsection

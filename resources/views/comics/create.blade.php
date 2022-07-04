@extends('layouts.main')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-8 offset-2">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('title') }}" name="title" id="title" placeholder="Insert title">
                        @error('title')
                            {{ $message }}
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror"
                            value="{{ old('type') }}" name="type" id="type" placeholder="Insert type">
                        @error('type')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Url image</label>
                        <input type="text" class="form-control @error('image') is-invalid @enderror"
                            value="{{ old('image') }}" name="image" id="image" placeholder="Insert image">
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

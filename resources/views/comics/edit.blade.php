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
                        <input type="text" value="{{ $comic->title }}" class="form-control" name="title" id="title"
                            placeholder="Title">

                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" value="{{ $comic->type }}" class="form-control" name="type"
                            id="type" placeholder="Type">
                    </div>

                    <div class="form-group">
                        <label for="image">Url image</label>
                        <input type="text" value="{{ $comic->image }}" class="form-control" name="image"
                            id="image" placeholder="Image">
                    </div>

                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </form>
            </div>
        </div>

    </div>
@endsection

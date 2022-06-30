@extends('layouts.main')


@section('content')
    <div class="container">

        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group w-50">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title">

            </div>
            <div class="form-group w-50">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" placeholder="Type">
            </div>

            <div class="form-group w-50">
                <label for="image">Url image</label>
                <input type="text" class="form-control" id="image" placeholder="Image">
            </div>

            <button type="submit" class="btn btn-primary my-3">Submit</button>
        </form>
    </div>
@endsection

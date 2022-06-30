@extends('layouts.main')

@section('content')
    <div class="container">

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group w-50">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title">

            </div>
            <div class="form-group w-50">
                <label for="type">Type</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="Type">
            </div>

            <div class="form-group w-50">
                <label for="image">Url image</label>
                <input type="text" class="form-control" name="image" id="image" placeholder="Image">
            </div>

            <button type="submit" class="btn btn-primary my-3">Submit</button>
        </form>
    </div>
@endsection

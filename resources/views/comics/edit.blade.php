@extends("layouts.public")

@section("content")

<div class="container">

    <form action="{{route('comics.store')}}" method="POST">
        @csrf()

        <div class="mb-3">
            <label class="form-label mb-1">Title </label>
            <input type="text" class="form-control" name="title" value="{{ old("title", $comic->title) }}">
        </div>

        <div class="mb-3">
            <label class="form-label mb-1">Description </label>
            <textarea class="form-control" name="decription" placeholder="Inserisci la descrizione" {{ old("description", $comic->description) }}></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label mb-1">Thumb </label>
            <input type="text" class="form-control" name="thumb" value="{{ old("thumb", $comic->thumb) }}">
        </div>

        <div class="mb-3">
            <label class="form-label mb-1">Price </label>
            <input type="number" step=".01" class="form-control" name="price" value="{{ old("price", $comic->price) }}">
        </div>

        <div class="mb-3">
            <label class="form-label mb-1">Series </label>
            <input type="text" class="form-control" name="series" value="{{ old("series", $comic->series) }}">
        </div>

        <div class="mb-3">
            <label class="form-label mb-1">Sale_date </label>
            <input type="date" class="form-control" name="sale_date" value="{{ old("sale_date", $comic->sale_date) }}">
        </div>

        <div class="mb-3">
            <label class="form-label mb-1">Type </label>
            <input type="text" class="form-control" name="type" value="{{ old("type", $comic->type) }}">
        </div>

        <div class="mb-3">
            <label class="form-label mb-1">Artists </label>
            <input type="text" class="form-control" name="artists" value="{{"artists", $comic->artists}}">
        </div>

        <div class="mb-3">
            <label class="form-label mb-1">Writers </label>
            <input type="text" class="form-control" name="writers" >
        </div>

        <button class="btn btn-primary">Edit Comic</button></a>
    </form>

    <div class="mt-3">
        <a href="{{route('comics.index')}}"><button class="btn btn-secondary me-2">Go Back</button></a>
    </div>


</div>
@endsection
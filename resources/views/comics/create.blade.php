@extends("layouts.public")

@section("content")

<div class="container">

    <form action="{{route('comics.store')}}" method="POST">
        @csrf()

        <div class="mb-3">
            <label class="form-label mb-1">Title </label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="mb-3">
            <label class="form-label mb-1">Description </label>
            <textarea class="form-control" name="decription" placeholder="Inserisci la descrizione"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label mb-1">Thumb </label>
            <input type="text" class="form-control" name="thumb">
        </div>

        <div class="mb-3">
            <label class="form-label mb-1">Price </label>
            <input type="number" step=".01" class="form-control" name="price">
        </div>

        <div class="mb-3">
            <label class="form-label mb-1">Series </label>
            <input type="text" class="form-control" name="series">
        </div>

        <div class="mb-3">
            <label class="form-label mb-1">Sale_date </label>
            <input type="date" class="form-control" name="sale_date">
        </div>

        <div class="mb-3">
            <label class="form-label mb-1">Type </label>
            <input type="text" class="form-control" name="type">
        </div>

        <div class="mb-3">
            <label class="form-label mb-1">Artists </label>
            <input type="text" class="form-control" name="artists">
        </div>

        <div class="mb-3">
            <label class="form-label mb-1">Writers </label>
            <input type="text" class="form-control" name="writers">
        </div>

        <button class="btn btn-primary">Add Comic</button></a>
    </form>

    <div class="mt-3">
        <a href="{{route('comics.index')}}"><button class="btn btn-secondary me-2">Go Back</button></a>
    </div>


</div>
@endsection
@extends("layouts.public")

@section("content")

<h1 class="index-title text-center mb-5 mt-5">COMICS LIST</h1>

<div class="container">
    <div class="row row-cols-4 gy-4">
        @foreach ($comics as $singleComic )
        <div class="col">
            <div class="card my-card">
                <img src="{{$singleComic->thumb}}"  class="card-img-top" >
                <div class="card-body">
                    <h5 class="card-title">{{$singleComic->title}}</h5>
                    <p class="card-text">{{substr($singleComic->description, 0, 150)}}...</p>
                    <h5 class="text-center">{{$singleComic->price}}$</h5>
                    <a href="{{route('comics.show', $singleComic->id)}}" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>
@endsection
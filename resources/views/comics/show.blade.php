@extends("layouts.public")

@section("content")

<h1 class="index-title text-center mb-5 mt-5">{{$selected_comic->title}}</h1>

<div class="container">
    <div class="card my-card">
        <img src="{{$selected_comic->thumb}}" style="max-height:400px" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">{{$selected_comic->title}}</h5>
            <p class="card-text">{{$selected_comic->description}}</p>
        </div>
    </div>

</div>
@endsection
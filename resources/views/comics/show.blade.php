@extends("layouts.public")

@section("content")

<h1 class="index-title text-center mb-5 mt-5">{{$selected_comic->title}}</h1>

<div class="container">
    <div>
        <a href="{{route('comics.edit', $selected_comic->id)}}"><button class="btn btn-primary mt-5 mb-4">Modifica</button></a>
    </div>
    <div class="card my-card">
        <img src="{{$selected_comic->thumb}}" style="max-height:400px" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">{{$selected_comic->title}}</h5>
            <p class="card-text">{{$selected_comic->description}}</p>
            <h5 class="text-center">{{$selected_comic->price}}$</h5>
            <div>{{$selected_comic->sale_date->format("d/m/y")}}</div>
            <div>Artists: {{implode(", " , ($selected_comic->artists))}}</div>
            <div>Writers: {{implode(", " , ($selected_comic->writers))}}</div>
        </div>
    </div>
    <div style="text-align: end">
        <a href="{{route('comics.index')}}"><button class="btn btn-primary mt-5">Torna Indietro</button></a>
    </div>

</div>
@endsection
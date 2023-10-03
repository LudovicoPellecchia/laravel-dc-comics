@extends("layouts.public")

@section("content")
<div class="container">
    <div class="row row-cols-4">
        @foreach ($comics as $singleComic )
        <div class="col">
            <div class="card my-card">
                <img src="{{$singleComic->thumb}}"  class="card-img-top" >
                <div class="card-body">
                    <h5 class="card-title">{{$singleComic->title}}</h5>
                    <p class="card-text">{{substr($singleComic->description, 0, 150)}}...</p>
                    <a href="#" class="btn btn-primary">View More</a>
                </div>
            </div>

        </div>
        @endforeach


    </div>
</div>
@endsection
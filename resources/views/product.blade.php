@extends('master')
@section('content')

<div class="container mt-5">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner p-3 mb-2 bg-secondary text-dark">
            @foreach($products as $item)
            <div class="carousel-item {{$item['id']==1? 'active' : ''}}">
                <a href="detail/{{$item['id']}}">
                    <img class="slider-img" src="{{$item['gallery']}}" class="d-block w-1" alt="...">
                    <h5>{{$item['name']}}</h5>
                    <p>{{$item['description']}}
                </a>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <div class="trending-wrapper">
        <h3>Tredning Products</h3>
        @foreach($products as $item)
        <div class="trening-item">
            <a href="detail/{{$item['id']}}">
                <img class="trending-image" src="{{$item['gallery']}}">
                <div class="">
                    <h3>{{$item['name']}}</h3>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
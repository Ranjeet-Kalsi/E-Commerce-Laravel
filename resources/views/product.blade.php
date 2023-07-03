@extends('master')
@section('content')

<div class="container mt-5">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner p-3 mb-2 bg-secondary text-white">
            @foreach($products as $item)
            <div class="carousel-item {{$item['id']==1? 'active' : ''}}">
                <img class="slider-img" src="{{$item['gallery']}}" class="d-block w-1" alt="...">
                <h5>{{$item['name']}}</h5>
                <p>{{$item['description']}}
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
</div>
@endsection
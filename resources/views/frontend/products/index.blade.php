@extends('frontend.layouts.master')
@section('title'){{'product'}}@endsection
@section('content')
    div class="customize">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto text-center animate__animated animate__zoomIn wow" data-wow-delay="0.5s">
                <h2 class="title__heading">Easy to Customize</h2>
                <div class="divider mx-auto"></div>
                <p class="title__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod. Lorem ipsum dolor Tur adipiscing elit, sed do eiusmod.</p>
            </div>
        </div>
        <div class="row">
            @foreach($products as $item )
            <div class="col-12 col-lg-4">
                <div class="customize__box">
                    <div class="customize__box-image animate__animated animate__fadeInLeft wow">
                        <a href="/small/public/superFood/products/{{$item->id}}"><img src="{{BASE_URL}}Frontend/assets{{$item->images}}" alt=""></a>
                    </div>
                    <div class="customize__box-item animate__animated animate__zoomIn wow" data-wow-delay="0.5s">
                        <div class="item__title">{{$item->name}}</div>
                        <p class="item__text">{{$item->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    </div>

@endsection
@extends('frontend.layouts.master')
@section('title'){{'detail'}}@endsection
@section('content')
    <div class="customize">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto text-center animate__animated animate__zoomIn wow" data-wow-delay="0.5s">
                <h2 class="title__heading">Easy to Customize</h2>
                <div class="divider mx-auto"></div>
                <p class="title__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod. Lorem ipsum dolor Tur adipiscing elit, sed do eiusmod.</p>
            </div>
        </div>
        <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="customize__box">
                        <div class="customize__box-image animate__animated animate__fadeInLeft wow">
                            <a href="/small/public/superFood/products/{{$product->id}}"><img src="{{BASE_URL}}Frontend/assets{{$product->images}}" alt=""></a>
                        </div>
                        <div class="customize__box-item animate__animated animate__zoomIn wow" data-wow-delay="0.5s">
                            <div class="item__title">{{$product->name}}</div>
                            <p class="item__text">{{$product->description}}</p>
                        </div>
                    </div>
                </div>
            <div class="col-12 col-lg-8">
                <div class="customize__box">
{{--                    <div class="customize__box-image animate__animated animate__fadeInLeft wow">--}}
{{--                        <a href="/small/public/superFood/products/{{$product->id}}"><img src="{{BASE_URL}}Frontend/assets{{$product->images}}" alt=""></a>--}}
{{--                    </div>--}}
                    <div class="section-detail clearfix">
{{--                        <div class="thumb fl-left">--}}
{{--                            <img src="public/images/img-product.png" alt="">--}}
{{--                        </div>--}}
                        <div class="detail fl-right">
{{--                            <h3 class="title"><?php echo $item['product']?></h3>--}}

                            <p class="product-code">Mã sản phẩm: <span>An Vi Shop</span></p>
                            <div class="desc-short">
                                <h5>Mô tả sản phẩm:</h5>
                                <p>Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn. Lorem Ipsum đã được sử dụng như một văn bản</p>
                            </div>
                            <p class="price">Giá:    {{$product->price}}</p>
                            <div class="num-order-wp">
                                <span>Số lượng:</span>
                                <input type="number" min="1" max="10" name="" value="" class="num-order">
                                <a href="/small/public/superFood/products/add/{{$product->id}}" title="" class="btn btn-primary">Thêm giỏ hàng</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>

@endsection
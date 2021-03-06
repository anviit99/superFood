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

                            <p class="product-code">M?? s???n ph???m: <span>An Vi Shop</span></p>
                            <div class="desc-short">
                                <h5>M?? t??? s???n ph???m:</h5>
                                <p>Lorem Ipsum ch??? ????n gi???n l?? m???t ??o???n v??n b???n gi???, ???????c d??ng v??o vi???c tr??nh b??y v?? d??n trang ph???c v??? cho in ???n. Lorem Ipsum ???? ???????c s??? d???ng nh?? m???t v??n b???n</p>
                            </div>
                            <p class="price">Gi??:    {{$product->price}}</p>
                            <div class="num-order-wp">
                                <span>S??? l?????ng:</span>
                                <input type="number" min="1" max="10" name="" value="" class="num-order">
                                <a href="/small/public/superFood/products/add/{{$product->id}}" title="" class="btn btn-primary">Th??m gi??? h??ng</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>

@endsection
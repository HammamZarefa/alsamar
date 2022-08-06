@extends('layouts.front')

@section('content')

    <!--Main-->
    <main class="vlt-main" style="margin-top: 100px;">
        <!--Page Title-->
        <section>
            <!--Product Summary-->
            <div class="vlt-product-summary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <!--Product Thumbnail-->
                            <div class="vlt-single-product-thumbnail">
                                <!--Simple Image-->
                                <div class="vlt-simple-image">
                                    <div class="vlt-fit-image" style="--size-md: 100%; --size-sm: 100%;"><img src="{{ asset('storage/'.$portfolio->cover) }}" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!--Content-->
                            <div class="vlt-single-product-summary">
                                <!--Breadcrumbs-->
                                <nav class="vlt-shop-breadcrumbs"><a href="#">@lang('Home')</a><span class="sep">-</span><a href="#">@lang('Products')</a><span class="sep">-</span>{{$portfolio->pcategory->name}}</nav>
                                <!--Title-->
                                <h1 class="vlt-shop-product-title">{{$portfolio->name}}</h1>
                                <!--Rating-->
                                {{--<div class="vlt-shop-product-rating">--}}
                                    {{--<div class="vlt-star-rating"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div><a class="vlt-shop-review-link" href="#">(2 customer reviews)</a>--}}
                                </div>
                                <!--Price-->
                                {{--<div class="vlt-price">$75.00</div>--}}
                                <!--Description-->
                                <div class="vlt-shop-product-description">
                                    <p>{{$portfolio->desc}}</p>
                                </div>
                                <!--Add to Cart-->
                                <!-- <div class="vlt-cart">
                                    <div class="vlt-quantity">
                                        <button class="minus">-</button>
                                        <input class="qty" type="number" step="1" min="0" max="3" value="1" size="4" pattern="[0-9]*">
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="vlt-btn vlt-btn--primary vlt-btn--effect"><span>Add to cart</span></button>
                                </div> -->
                                <!--Metas-->
                                <div class="vlt-product-meta">
                                    {{--<div><span class="vlt-display-1">SKU: </span> 280810</div>--}}
                                    <div><span class="vlt-display-1">@lang('Category'): </span> <a href="#">{{$portfolio->pcategory->name}}</a></div>
                                    {{--<div><span class="vlt-display-1">Tags: </span> <a href="#">Black</a></div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

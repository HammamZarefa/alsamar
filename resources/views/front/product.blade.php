@extends('layouts.front')

@section('content')
    <!--Main-->
    <main class="vlt-main">
        <!--Page Title-->
        <section class="jarallax"><img class="jarallax-img" src="{{asset('front/img/fresh-food.jpg')}}" alt="">
            <div class="vlt-gap-170"></div>
            <div class="container">
                <!--Large Heading-->
                <h1 class="vlt-large-heading text-center" style="color:#fff;">@lang('Products')<span>.</span>
                </h1>
            </div>
            <div class="vlt-gap-170"></div>
        </section>
        <!--Content-->
        <section>
            <div class="vlt-gap-60"></div>
            <div class="container">
                <div class="vlt-cubeportfolio-filters vlt-display-1" id="vlt-filter-portfolio-01">
                    <div class="cbp-filter-item cbp-filter-item-active" data-filter="*">@lang('All')</div>
                    @foreach($pcategories as $pcategory)
                        <div class="cbp-filter-item" data-filter=".filter-{{$pcategory->id}}">{{$pcategory->name}}</div>
                    @endforeach
                </div>
                <div id="vlt-grid-portfolio-01">
                @foreach($portfolios as $portfolio)
                    <!--Portfolio Item-->
                    <article class="vlt-portfolio-item vlt-portfolio-item--style-1 filter-{{$portfolio->pcategory_id}} cbp-item">
                        <div class="vlt-portfolio-item-img">
                            <div class="vlt-fit-image" style="--size-md: 90%; --size-sm: 90%;"><img src="{{ asset('storage/'.$portfolio->cover) }}" alt=""></div>
                        </div><a class="vlt-portfolio-item-overlay vlt-portfolio-item-overlay--align-center" href="{{route('portfolioshow',$portfolio->slug)}}" style="background-color:rgba(255,255,255,.8);">
                            <div class="vlt-portfolio-item-meta">
                                <h4 class="vlt-portfolio-item-meta-title" style="color:#0b0b0b;">{{$portfolio->name}}
                                </h4><span class="vlt-portfolio-item-meta-category vlt-display-1" style="color:#5c5c5c;">{{$portfolio->desc}}</span>
                            </div>
                        </a>
                    </article>
                    @endforeach
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>
    </main>
@endsection

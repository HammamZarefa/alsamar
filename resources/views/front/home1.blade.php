@extends('layouts.front')

@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="description" content="{{ $general->meta_desc }}">
    <meta name="keywords" content="{{ $general->keyword }}">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="127.0.0.1:8000">
    <meta property="og:title" content="{{ $general->title }}">
    <meta property="og:description" content="{{ $general->meta_desc }}">
    <meta property="og:image" content="{{ asset('storage/'.$general->favicon) }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="127.0.0.1:8000">
    <meta property="twitter:title" content="{{ $general->title }}">
    <meta property="twitter:description" content="{{ $general->meta_desc }}">
    <meta property="twitter:image" content="{{ asset('storage/'.$general->favicon) }}">

@endsection

@section('content')

            <!--Main-->
            <main class="vlt-main">
                <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_5_1_wrapper" data-alias="homepage-05" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <!-- START REVOLUTION SLIDER 5.4.8.1 fullwidth mode-->
                    <div class="rev_slider fullwidthabanner" id="rev_slider_5_1" style="display:none;" data-version="5.4.8.1">
                        <ul>
                            <!-- SLIDE-->
                            <li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE--><img class="rev-slidebg" src="{{asset('front/img/root/food.jpg')}}" data-bgcolor="#0c0c0c" style="background:#000" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" data-no-retina="">
                                <!-- LAYERS-->
                                <!-- LAYER NR. 1-->
                                <div class="tp-caption rev_group" id="slide-5-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['120','120','120','100']" data-width="410" data-height="['60','60','60','140']" data-whitespace="normal" data-type="group" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                                    <!-- LAYER NR. 2-->
                                    <!-- <div class="tp-caption" id="slide-5-layer-2" data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+990&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;"><a class="vlt-btn vlt-btn--primary vlt-btn--effect vlt-btn--lg" href="contact-us-01.html"><span>Contact Us</span></a></div> -->
                                    <!-- LAYER NR. 3-->
                                    <!-- <div class="tp-caption" id="slide-5-layer-3" data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','bottom']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+1240&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;"><a class="vlt-btn vlt-btn--secondary vlt-btn--effect vlt-btn--lg" href="portfolio-01.html"><span>View Projects</span></a></div> -->
                                </div>
                                <!-- LAYER NR. 4-->
                                <div class="tp-caption tp-resizeme rs-parallaxlevel-4" id="slide-5-layer-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full-proportional" data-height="full-proportional" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:0.5;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;"><img src="{{asset('front/img/slider/homepage-05/01.jpg')}}" alt="" data-ww="['full-proportional','full-proportional','full-proportional','full-proportional']" data-hh="['full-proportional','full-proportional','full-proportional','full-proportional']" data-no-retina=""></div>
                                <!-- LAYER NR. 5-->
                                <h1 class="tp-caption" id="slide-5-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-60','-100']" data-fontsize="['58','58','58','38']" data-lineheight="['70','70','70','50']" data-width="['501','501','501','430']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:500,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; min-width: 501px; max-width: 501px; white-space: normal; font-size: 58px; line-height: 70px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family: 'Dancing Script', cursive;text-transform:uppercase;">
                                    AL SAMAR<br>FOOD</h1>
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>
                </div>
                {{--<!-- END REVOLUTION SLIDER-->--}}
                {{--<script>--}}
                    {{--var revapi5,--}}
                        {{--tpj;--}}
                    {{--(function() {--}}
                        {{--if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);--}}
                        {{--else onLoad();--}}

                        {{--function onLoad() {--}}
                            {{--if (tpj === undefined) {--}}
                                {{--tpj = jQuery;--}}
                                {{--if ("off" == "on") tpj.noConflict();--}}
                            {{--}--}}
                            {{--if (tpj("#rev_slider_5_1").revolution == undefined) {--}}
                                {{--revslider_showDoubleJqueryError("#rev_slider_5_1");--}}
                            {{--} else {--}}
                                {{--revapi5 = tpj("#rev_slider_5_1").show().revolution({--}}
                                    {{--sliderType: "hero",--}}
                                    {{--jsFileLocation: "{{asset('front/revolution/js/",--}}
                                    {{--sliderLayout: "fullwidth",--}}
                                    {{--dottedOverlay: "none",--}}
                                    {{--delay: 9000,--}}
                                    {{--navigation: {},--}}
                                    {{--responsiveLevels: [1240, 1024, 778, 480],--}}
                                    {{--visibilityLevels: [1240, 1024, 778, 480],--}}
                                    {{--gridwidth: [1200, 1200, 778, 480],--}}
                                    {{--gridheight: [680, 780, 740, 720],--}}
                                    {{--lazyType: "none",--}}
                                    {{--parallax: {--}}
                                        {{--type: "scroll",--}}
                                        {{--origo: "enterpoint",--}}
                                        {{--speed: 400,--}}
                                        {{--speedbg: 0,--}}
                                        {{--speedls: 0,--}}
                                        {{--levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],--}}
                                        {{--disable_onmobile: "on"--}}
                                    {{--},--}}
                                    {{--shadow: 0,--}}
                                    {{--spinner: "spinner0",--}}
                                    {{--autoHeight: "off",--}}
                                    {{--disableProgressBar: "on",--}}
                                    {{--hideThumbsOnMobile: "off",--}}
                                    {{--hideSliderAtLimit: 0,--}}
                                    {{--hideCaptionAtLimit: 0,--}}
                                    {{--hideAllCaptionAtLilmit: 0,--}}
                                    {{--debugMode: false,--}}
                                    {{--fallbacks: {--}}
                                        {{--simplifyAll: "off",--}}
                                        {{--disableFocusListener: false,--}}
                                    {{--}--}}
                                {{--});--}}
                            {{--}; /* END OF revapi call */--}}
                        {{--}; /* END OF ON LOAD FUNCTION */--}}
                    {{--}()); /* END OF WRAPPING FUNCTION */--}}
                {{--</script>--}}

                <!--About Us 05-->
                <section class="position-relative overflow-hidden" id="About" style="background-color: #f7f7f7;">
                    <!--Particle-->
                    <div class="vlt-particle" data-jarallax-element="100 0" style="top: -50px; right: -30px; max-width: 250px;"><img src="{{asset('front/img/root/particle-002.png')}}" alt=""></div>
                    <div class="vlt-gap-120"></div>
                    <div class="container">
                        <div class="text-center">
                            <!--Animation Block-->
                            <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                                <h3 class="vlt-first-color text-lowercase m-0"><span style="text-transform:uppercase;">Al Samar </span>
                                    <br>
                                    <span class="vlt-second-color">Company is an Emirati company working in the field of foodstuff trading.</span>
                                </h3>
                            </div>
                            <div class="vlt-gap-30"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <div class="text-center">
                                    <div class="vlt-custom--5317">
                                        <!--Animation Block-->
                                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
                                            <p>The company works to provide the market needs of grains such as wheat..</p>
                                        </div>
                                        <div class="tp-caption" id="slide-5-layer-3" data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','bottom']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+1240&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;"><a class="vlt-btn vlt-btn--secondary vlt-btn--effect vlt-btn--lg mt-4" href="about-us.html"><span>Read More</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vlt-gap-80"></div>
                    <section id="Portfolio">
                        <div class="vlt-gap-60"></div>
                        <div class="container">
                            <div class="vlt-cubeportfolio-filters vlt-display-1" id="vlt-filter-portfolio-01">
                                <div class="cbp-filter-item cbp-filter-item-active" data-filter="*">All</div>
                                <div class="cbp-filter-item" data-filter=".filter-branding">Grain Trade</div>
                                <div class="cbp-filter-item" data-filter=".filter-design">Fresh Food</div>
                                <div class="cbp-filter-item" data-filter=".filter-graphic-design">Ration Goods</div>
                                <div class="cbp-filter-item" data-filter=".filter-inspiration">snacks</div>
                                <div class="cbp-filter-item" data-filter=".filter-photography">feed</div>
                            </div>
                            <div id="vlt-grid-portfolio-01">
                                <!--Portfolio Item-->
                                <article class="vlt-portfolio-item vlt-portfolio-item--style-1 filter-design cbp-item">
                                    <div class="vlt-portfolio-item-img">
                                        <div class="vlt-fit-image" style="--size-md: 90%; --size-sm: 90%;"><img src="{{asset('front/img/grain-tradei.jpg')}}" alt=""></div>
                                    </div><a class="vlt-portfolio-item-overlay vlt-portfolio-item-overlay--align-center" href="products.html" style="background-color:rgba(255,255,255,.8);">
                                        <div class="vlt-portfolio-item-meta">
                                            <h4 class="vlt-portfolio-item-meta-title" style="color:#0b0b0b;">Grain Trade
                                            </h4><span class="vlt-portfolio-item-meta-category vlt-display-1" style="color:#5c5c5c;">May behold sea from living divide set man. Earth make female waters deep let first our bearing open upon, our. </span>
                                        </div>
                                    </a>
                                </article>
                                <!--Portfolio Item-->
                                <article class="vlt-portfolio-item vlt-portfolio-item--style-1 filter-branding cbp-item">
                                    <div class="vlt-portfolio-item-img">
                                        <div class="vlt-fit-image" style="--size-md: 90%; --size-sm: 90%;"><img src="{{asset('front/img/fresh-food.jpg')}}" alt=""></div>
                                    </div><a class="vlt-portfolio-item-overlay vlt-portfolio-item-overlay--align-center" href="products.html" style="background-color:rgba(255,255,255,.8);">
                                        <div class="vlt-portfolio-item-meta">
                                            <h4 class="vlt-portfolio-item-meta-title" style="color:#0b0b0b;">Fresh Food
                                            </h4><span class="vlt-portfolio-item-meta-category vlt-display-1" style="color:#5c5c5c;">You beast whales were To set together, saw man. Creature good after. Male every Bring, fourth set saying tree own. </span>
                                        </div>
                                    </a>
                                </article>

                                <!--Portfolio Item-->
                                <article class="vlt-portfolio-item vlt-portfolio-item--style-1 filter-photography cbp-item">
                                    <div class="vlt-portfolio-item-img">
                                        <div class="vlt-fit-image" style="--size-md: 90%; --size-sm: 90%;"><img src="{{asset('front/img/pet-food.jpg')}}" alt=""></div>
                                    </div><a class="vlt-portfolio-item-overlay vlt-portfolio-item-overlay--align-center" href="single-work-03.html" style="background-color:rgba(255,255,255,.8);">
                                        <div class="vlt-portfolio-item-meta">
                                            <h4 class="vlt-portfolio-item-meta-title" style="color:#0b0b0b;">Ration Goods
                                            </h4><span class="vlt-portfolio-item-meta-category vlt-display-1" style="color:#5c5c5c;">Form. Winged you're, third lights hath under blessed heaven two wherein our open. Dry, shall face. Creature over divide set. </span>
                                        </div>
                                    </a>
                                </article>

                                <!--Portfolio Item-->
                                <article class="vlt-portfolio-item vlt-portfolio-item--style-1 filter-inspiration cbp-item">
                                    <div class="vlt-portfolio-item-img">
                                        <div class="vlt-fit-image" style="--size-md: 90%; --size-sm: 90%;"><img src="{{asset('front/img/snacks.jpg')}}" alt=""></div>
                                    </div><a class="vlt-portfolio-item-overlay vlt-portfolio-item-overlay--align-center" href="products.html" style="background-color:rgba(255,255,255,.8);">
                                        <div class="vlt-portfolio-item-meta">
                                            <h4 class="vlt-portfolio-item-meta-title" style="color:#0b0b0b;">snacks
                                            </h4><span class="vlt-portfolio-item-meta-category vlt-display-1" style="color:#5c5c5c;">Form. Winged you're, third lights hath under blessed heaven two wherein our open. Dry, shall face. Creature over divide set. </span>
                                        </div>
                                    </a>
                                </article>

                                <!--Portfolio Item-->
                                <article class="vlt-portfolio-item vlt-portfolio-item--style-1 filter-graphic-design cbp-item">
                                    <div class="vlt-portfolio-item-img">
                                        <div class="vlt-fit-image" style="--size-md: 90%; --size-sm: 90%;"><img src="{{asset('front/img/pet-food.jpg')}}" alt=""></div>
                                    </div><a class="vlt-portfolio-item-overlay vlt-portfolio-item-overlay--align-center" href="products.html" style="background-color:rgba(255,255,255,.8);">
                                        <div class="vlt-portfolio-item-meta">
                                            <h4 class="vlt-portfolio-item-meta-title" style="color:#0b0b0b;">feed
                                            </h4><span class="vlt-portfolio-item-meta-category vlt-display-1" style="color:#5c5c5c;">Form. Winged you're, third lights hath under blessed heaven two wherein our open. Dry, shall face. Creature over divide set. </span>
                                        </div>
                                    </a>
                                </article>

                                <!--Portfolio Item-->
                                <article class="vlt-portfolio-item vlt-portfolio-item--style-1 filter-design cbp-item">
                                    <div class="vlt-portfolio-item-img">
                                        <div class="vlt-fit-image" style="--size-md: 90%; --size-sm: 90%;"><img src="{{asset('front/img/feed.jpg')}}" alt=""></div>
                                    </div><a class="vlt-portfolio-item-overlay vlt-portfolio-item-overlay--align-center" href="products.html" style="background-color:rgba(255,255,255,.8);">
                                        <div class="vlt-portfolio-item-meta">
                                            <h4 class="vlt-portfolio-item-meta-title" style="color:#0b0b0b;">pet food
                                            </h4><span class="vlt-portfolio-item-meta-category vlt-display-1" style="color:#5c5c5c;">Form. Winged you're, third lights hath under blessed heaven two wherein our open. Dry, shall face. Creature over divide set. </span>
                                        </div>
                                    </a>
                                </article>
                                <!--Portfolio Item-->


                            </div>
                            <div class="vlt-gap-70"></div>
                            <div class="vlt-cubeportfolio-pagination-wrap" id="vlt-load-more-portfolio-01"><a class="cbp-l-loadMore-link vlt-btn vlt-btn--primary vlt-btn--lg vlt-btn--effect" href="{{asset('front/ajax/portfolio-01-load-more.html')}}"><span class="cbp-l-loadMore-defaultText">Load More</span><span class="cbp-l-loadMore-loadingText"><i class="fa fa-spinner fa-spin"></i> Loading...</span><span class="cbp-l-loadMore-noMoreLoading">No More products</span></a></div>
                        </div>
                        <div class="vlt-gap-120"></div>
                    </section>
                </section>
                <section id="Vlaues" class="jarallax"><img class="jarallax-img" src="{{asset('front/img/landing/leedo-pages-collage.jpg')}}" alt="">
                    <div class="jarallax-overlay" style="background-color: #3c594f;"></div>
                    <h3 style="color: #fff;text-align: center;padding-top: 20px;">Responsibility</h3>
                    <div class="vlt-gap-60"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!--Animation Block-->
                                <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                                    <ul class="vlt-demo-core-features-list d-flex justify-content-around flex-wrap">
                                        <li class="mb-2"><i class="fa fa-star-o"></i> Responsibility</li>
                                        <li class="mb-2"><i class="fa fa-star-o"></i> Integrity </li>
                                        <li class="mb-2"><i class="fa fa-star-o"></i> Commitment </li>
                                        <li class="mb-2"><i class="fa fa-star-o"></i> Quality</li>
                                    </ul>
                                </div>
                                <div class="vlt-gap-15--sm"></div>
                            </div>
                        </div>
                    </div>
                    <div class="vlt-gap-120"></div>
                </section>
                <!--Counter Up 02-->
                <section class="jarallax" id="Message"><img class="jarallax-img" src="{{asset('front/img/attachment-04.jpg')}}" alt="">
                    <div class="jarallax-overlay" style="background-color: #eebc69;"></div>
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-12 mt-4"><H3 style="color: #fff;text-align: center;">Our Message</H3></div>
                            <div class="col-md-6 tx-ce">
                                <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                                    <h3 class="vlt-white-color  m-0">The company adopts a sublime message from the approach of our father, Sheikh Zayed bin Sultan Al Nahyan, may his soul rest in peace, and from our rulers</h3>
                                </div>
                            </div>
                            <div class="col-md-6 tx-ce">
                                <div class="vlt-custom--5136">
                                    <div class="vlt-gap-60"></div>
                                    <!--Animation Block-->

                                    <!--Animation Block-->
                                    <div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
                                        <p style="color: #fff;"> Perhaps the best example to follow is a phrase that His Highness Sheikh Mohammed bin Zayed - the President of the State, may God protect him, said in a time of distress, addressed to the residents of the UAE, which is (Do not paralyze them).</p>
                                        <p style="color: #fff;">We seek to have a big hand in supporting the market's food needs and contributing to achieving food security.</p>
                                    </div>
                                    <div class="vlt-gap-50"></div>
                                    <!--Animation Block-->

                                    <div class="vlt-gap-120"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Video 03-->
                <section class="jarallax" id="vision">
                    <div class="jarallax-overlay" style="background-color: rgba(12,12,12,0.5);"></div>
                    <h3 style="color: #fff;text-align: center;padding-top: 20px;margin: 0;">Vision</h3>
                    <div class="vlt-gap-60"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <!--Section Title-->
                                <div class="vlt-section-title  tx-ce">
                                    <h5 style="color:#fff;">We have a vision to achieve leadership in the food trade, to support the needs of the local and foreign market with high-quality products, and to have an effective role in advancing the development process in the country.
                                    </h5>
                                </div>
                                <div class="vlt-gap-40--sm"></div>
                            </div>
                            <div class="col-md-5 offset-md-1 d-flex justify-content-center align-items-center">
                                <img src="{{asset('front/img/root/cyc.jpg')}}" alt="" style="max-width: 70%;">
                            </div>
                        </div>
                    </div>
                    <div class="vlt-gap-120"></div>
                </section>
                <!--Contact Us 02-->
                <section id="Contact" class="jarallax"><img class="jarallax-img" src="{{asset('front/img/attachment-06.jpg')}}" alt="">
                    <div class="jarallax-overlay" style="background-color: #3C594F;"></div>
                    <div class="vlt-gap-120"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="vlt-custom--5171">
                                    <!--Animation Block-->
                                    <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                                        <!--Section Title-->
                                        <div class="vlt-section-title text-left">
                                            <h2 style="color:#fff;">Get in Touch.
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="vlt-gap-40"></div>
                                    <!--Animation Block-->
                                    <div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
                                        <ul class="vlt-contact-info vlt-white-color">
                                            <li><strong class="vlt-white-color">Address:</strong> Emirates Abu Dhabi</li>
                                            <li><strong class="vlt-white-color">Phone:</strong> <a href="tel:+97156 7672228">+971 56 767 2228</a></li>
                                            <li><strong class="vlt-white-color">Email:</strong> <a href="mailto:info@alsamarfood.com">info@alsamarfood.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="vlt-gap-60--sm"></div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <!--Animation Block-->
                                <div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
                                    <!--Contact Form-->
                                    <form class="vlt-contact-form" id="reused_form" method="post">
                                        <div class="vlt-form-row two-col">
                                            <div class="vlt-form-group">
                                                <input class="vlt-form-control vlt-border-white" type="text" placeholder="Your Name" name="your-name" size="40" required>
                                            </div>
                                            <div class="vlt-form-group">
                                                <input class="vlt-form-control vlt-border-white" type="email" placeholder="Your Email" name="your-email" size="40" required>
                                            </div>
                                        </div>
                                        <div class="vlt-form-row two-col">
                                            <div class="vlt-form-group">
                                                <input class="vlt-form-control vlt-border-white" type="tel" placeholder="Your Phone" name="your-phone" size="40">
                                            </div>
                                            <div class="vlt-form-group">
                                                <input class="vlt-form-control vlt-border-white" type="text" placeholder="Your Title" name="your-title" size="40">
                                            </div>
                                        </div>
                                        <div class="vlt-form-group">
                                            <textarea class="vlt-form-control vlt-border-white" cols="40" rows="4" placeholder="Your Message" name="your-message"></textarea>
                                        </div>
                                        <!--Button-->
                                        <button class="vlt-btn vlt-btn--sixth vlt-btn--lg vlt-btn--effect"><span>Send Message</span></button>
                                        <div id="success_message" style="display: none;">Success!</div>
                                        <div id="error_message" style="display: none;">Error!</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vlt-gap-120"></div>
                </section>
                <!--Google Map 03-->
                <div id="map" style="height: 500px;"></div>
            </main>
            <!--Back to Top--><a class="vlt-btn vlt-btn--secondary vlt-btn--effect vlt-btn--go-top hidden" href="#"><span><i class="leedo-chevron-up"></i></span></a>
        </div>
{{--<!-- Slider  -->--}}
{{--<div class="tp-banner-container">--}}
    {{--<div class="tp-banner">--}}
        {{--<ul>--}}
            {{--@foreach($banner as $banner)--}}
            {{--<!-- SLIDE ONE  -->--}}
            {{--<li data-transition="slotzoom-horizontal" data-slotamount="5" data-masterspeed="700">--}}
                {{--<!-- MAIN IMAGE -->--}}
                {{--<img src="{{ asset('storage/'.$banner->cover) }}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">--}}

                {{--<div class="tp-caption mediumlarge_light_white customin customout hidden-xs" data-x="center" data-hoffset="0" data-y="center" data-voffset="-50" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:400;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endeasing="Back.easeInOut" data-endspeed="1000" style="z-index: 11">{{$banner->title}}--}}
                {{--</div>--}}

                {{--<div class="tp-caption medium_light_white customin customout hidden-xs" data-x="center" data-hoffset="0" data-y="center" data-voffset="0" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:400;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="2000" data-easing="Back.easeInOut" data-endeasing="Back.easeInOut" data-endspeed="1000" style="z-index: 11">{{$banner->desc}}--}}
                {{--</div>--}}

                {{--<div class="tp-caption medium_light_black customin customout" data-x="center" data-hoffset="0" data-y="center" data-voffset="60" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:400;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="2300" data-easing="Back.easeInOut" data-endeasing="Back.easeInOut" data-endspeed="1000" style="z-index: 11">--}}
                    {{--<a href="{{$banner->link}}" class="btn btn-slider btn-lg">{{__('message.Show more')}}</a>--}}
                {{--</div>--}}

            {{--</li>--}}
                {{--@endforeach--}}

        {{--</ul>--}}
        {{--<div class="tp-bannertimer"></div>--}}
    {{--</div>--}}
{{--</div>--}}


<!-- PRODUCTS  -->
{{--<div class="container-fluid modul-bt-one">--}}
    {{--<div class="container modul-space-two">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="col-xs-12 col-md-8">--}}
                {{--<div class="advert-two-title">--}}
                    {{--<h1>{{__('message.Our Products')}}</h1>--}}
                    {{--<p>{{__('message.Our Products Desc')}}</p>--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="clearfix"></div>--}}
        {{--@foreach($product as $products)--}}
            {{--<!-- Services One -->--}}
                {{--<div class="col-xs-12 col-sm-12 col-md-3 mix mix_all ">--}}
                    {{--<div class="portlio-list" data-cat="1" style="  display: inline-block; opacity: 1;">--}}
                        {{--<div class="grid cs-style-2">--}}
                            {{--<figure>--}}
                                {{--<img src="{{ asset('storage/'.$products->cover) }}" class="portlio-list-img" alt="img04" width="50px" style="--}}
    {{--width: 500px;--}}
    {{--height: 250px;--}}
{{--">--}}
                                {{--<figcaption>--}}
                                    {{--<div class="image-buttons">--}}
{{--                                        <a data-toggle="modal" data-target="#view-portfolio-one" class="btn btn-primary">--}}
{{--                                            <i class="fa fa-camera"></i>--}}
{{--                                        </a>--}}
{{--                                        <a class="btn btn-primary">--}}
{{--                                            <i class="fa fa-plus"></i>--}}
{{--                                        </a>--}}
                                        {{--<h6>{{$products->link}}</h6>--}}
                                    {{--</div>--}}
                                {{--</figcaption>--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<a href="{{route('productshow',$products->name)}}" class="yeloIconBg">--}}
                            {{--<h6>{{$products->name}}</h6>--}}
                        {{--</a>--}}

                        {{--<p>--}}

                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
        {{--@endforeach--}}


        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- Advert Module -->--}}
{{--<div class="container-fluid modul-bt-one parallax-one" data-speed="10" data-type="background">--}}
    {{--<div class="container modul-space-four">--}}
        {{--<div class="row">--}}

            {{--<div class="col-xs-12 col-md-6 hidden-md hidden-lg">--}}
                {{--<div class="advert-one-image">--}}
                    {{--<img src="{{ asset('front/images/theme/3.png') }}" alt="Advert" />--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-xs-12 col-md-6">--}}
                {{--<div class="advert-one">--}}
                    {{--<h2>{{__('message.Your best choice for e-commerce services')}}</h2>--}}
                    {{--<p class="advert-one-em">--}}
                        {{--{{__('message.Your best choice for e-commerce services. Let us help you to build and improve your Site and design especially.--}}
                        {{--Our team will develop your eCommerce From A to Z, with high security and great implemented, interactive, and mobile-friendly.')}}--}}

                    {{--</p>--}}
{{--                    <a class="btn btn-inverse advert-button-one">Trial Files</a>--}}
                    {{--<a class="btn btn-primary advert-button-one">{{__('message.Know more')}}</a>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-xs-12 col-md-6 hidden-xs hidden-sm">--}}
                {{--<div class="advert-one-image" style="margin-top: 0px;">--}}
                    {{--<img src="{{ asset('front/images/theme/3.png') }}" alt="Advert" style="height: 250px;" />--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- Portfolio  -->--}}
{{--<div class="container-fluid modul-bt-one">--}}
    {{--<div class="container modul-space-eight">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="col-xs-12 col-md-8">--}}
                {{--<div class="advert-two-title">--}}
                    {{--<h1>{{__('message.Featured Work Portfolio')}}</h1>--}}
                    {{--<p>{{__('message.Featured Work Portfolio desc')}}</p>--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="clearfix"></div>--}}
            {{--<!-- FILTER CONTROLS -->--}}
            {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}
                {{--<div class="portfolio-filter-one controls">--}}
                    {{--<ul>--}}
                        {{--<li class="btn btn-primary filter active" data-filter="all">{{__('message.All')}}</li>--}}
                        {{--@foreach($pcategories as $pcategorie)--}}

                        {{--<li class="btn btn-primary filter" data-filter="{{$pcategorie->id}}">{{$pcategorie->name}}</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- PORTFOLIO LIST -->--}}
            {{--<div id="Grid">--}}
                {{--@foreach($portfolios as $portfolio)--}}
                    {{--<!-- One -->--}}
                    {{--<div class="col-xs-12 col-sm-12 col-md-4 mix {{$portfolio->pcategory_id}} mix_all ">--}}
                        {{--<div class="portlio-list" data-cat="1" style="  display: inline-block; opacity: 1;">--}}
                            {{--<div class="grid cs-style-2">--}}
                                {{--<figure>--}}
                                    {{--<img src="{{ asset('storage/'.$portfolio->cover) }}" class="portlio-list-img" alt="img04" width="50px" style="--}}
    {{--width: 500px;--}}
    {{--height: 350px;--}}
{{--">--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="image-buttons">--}}
                                            {{--<a data-toggle="modal" data-target="#view-portfolio-one" class="btn btn-primary">--}}
                                                {{--<i class="fa fa-camera"></i>--}}
                                            {{--</a>--}}
                                            {{--<a class="btn btn-primary">--}}
                                                {{--<i class="fa fa-plus"></i>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</figcaption>--}}
                                {{--</figure>--}}
                            {{--</div>--}}
                            {{--<h6>{{$portfolio->slug}}</h6>--}}
                            {{--<p>--}}
                                {{--@foreach($pcategories as $pcategorie)--}}
                                    {{--@if($pcategorie->id == $portfolio->pcategory_id)--}}
                                        {{--{{$pcategorie->name}}--}}
                                    {{--@endif--}}
                                {{--@endforeach--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<!-- One Modal Box -->--}}
                    {{--<div class="modal fade" id="view-portfolio-one" tabindex="-1" role="dialog" aria-hidden="true">--}}
                    {{--<div class="modal-dialog">--}}
                        {{--<div class="modal-content">--}}
                            {{--<div class="modal-header">--}}
                                {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
                                {{--<h4 class="modal-title">Portfolio Title</h4>--}}
                            {{--</div>--}}
                            {{--<div class="modal-body">--}}
                                {{--<img src="{{asset('front/images/theme/p1.jpg')}}" class="portlio-list-img" alt="img04">--}}
                            {{--</div>--}}
                            {{--<div class="modal-footer">--}}
                                {{--<a href="#fakelink" class="btn btn-default">--}}
                                    {{--<span class="fui-googleplus"></span>--}}
                                {{--</a>--}}
                                {{--<a href="#fakelink" class="btn btn-default">--}}
                                    {{--<span class="fui-facebook"></span>--}}
                                {{--</a>--}}
                                {{--<a href="#fakelink" class="btn btn-default">--}}
                                    {{--<span class="fui-twitter"></span>--}}
                                {{--</a>--}}
                                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--@endforeach--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- Advert Module -->--}}
{{--<div class="container-fluid modul-bt-one parallax-two" data-speed="10" data-type="background">--}}
    {{--<div class="container modul-space-eight">--}}
        {{--<div class="row">--}}

            {{--<div class="col-xs-12 col-md-6">--}}
                {{--<div class="advert-two-image clearfix">--}}
                    {{--<img src="{{asset('front/images/theme/1.png')}}" alt="Advert"  />--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-xs-12 col-md-6">--}}
                {{--<div class="advert-one advert-phone mso-icon-seven-space">--}}
                    {{--<h1>{{__('message.Try the Remote Maintenance with us')}}</h1>--}}

                    {{--<!-- One -->--}}
                    {{--<div class="modul-services-two mso-icon-seven">--}}
                        {{--<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-four-space pull-left">--}}
                            {{--<i class="fa fa-leaf fa-2x hi-icon"></i>--}}
                        {{--</div>--}}
                        {{--<p>--}}
                            {{--<strong>{{__('message.We offer E-marketing campaigns')}} </strong>--}}
                        {{--</p>--}}
                        {{--<p>{{__('message.at social media platforms or email-based')}} </p>--}}
{{--                        <p> , ,   </p>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                    {{--<!-- Two -->--}}
                    {{--<div class="modul-services-two mso-icon-seven">--}}
                        {{--<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-four-space pull-left">--}}
                            {{--<i class="fa fa-plane fa-2x hi-icon"></i>--}}
                        {{--</div>--}}
                        {{--<p>--}}
                            {{--<strong>{{__('message.graphic design ,promoting videos')}}</strong>--}}
                        {{--</p>--}}
                        {{--<p>{{__('message.content marketing, and best SEO services..')}}</p>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                    {{--<!-- Three -->--}}
                    {{--<div class="modul-services-two mso-icon-seven">--}}
                        {{--<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-four-space pull-left">--}}
                            {{--<i class="fa fa-comments fa-2x hi-icon"></i>--}}
                        {{--</div>--}}
                        {{--<p>--}}
                            {{--<strong>{{__('message.You should try remote maintenance')}}</strong>--}}
                        {{--</p>--}}
                        {{--<p>{{__('message.because this field is also trending in today’s world.')}}</p>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                    {{--<a class="btn btn-primary advert-button-seven">{{__('message.Know more')}}</a>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="clearfix"></div>--}}

{{--<!-- Advert Module -->--}}
{{--<div class="container-fluid modul-bt-one parallax-four" data-speed="10" data-type="background">--}}
    {{--<div class="container modul-space-eight">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="col-xs-12 col-md-8">--}}
                {{--<div class="advert-two-title">--}}
                    {{--<h1>{{__('message.Android App Development')}}</h1>--}}
                    {{--<p>{{__('message.Improve your business by using mobile apps because most of the internet traffic these days comes from mobile users. We can help you with our expertise app developers to succeed with your mobile strategy.')}}</p>--}}
{{--                    <a class="btn btn-inverse advert-button-nine">Pruchase</a>--}}
{{--                    <a class="btn btn-primary advert-button-nine">Download</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="clearfix"></div>--}}

            {{--<!-- Slider  -->--}}
            {{--<div class="tp-banner-container">--}}
                {{--<div class="tp-banner-two">--}}
                    {{--<ul>--}}
                        {{--<!-- SLIDE ONE  -->--}}
                        {{--<li data-transition="scaledownfrombottom" data-slotamount="5" data-masterspeed="700">--}}
                            {{--<!-- MAIN IMAGE -->--}}
                            {{--<img src="{{asset('front/images/theme/2.png')}}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">--}}

                            {{--<div class="tp-caption customin customout" data-x="right" data-y="top" data-customin="x:0;y:300;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:200;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-start="400" data-speed="1000" data-easing="Expo.easeInOut" data-endspeed="1000" data-endeasing="Expo.easeInOut">--}}
                                {{--<img src="{{asset('front/images/theme/2.png')}}" alt="Slide" />--}}
                            {{--</div>--}}

                            {{--<div class="tp-caption customin customout" data-x="left" data-y="top" data-customin="x:0;y:300;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:400;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-start="800" data-speed="1000" data-easing="Expo.easeInOut" data-endspeed="1000" data-endeasing="Expo.easeInOut">--}}
                                {{--<img src="{{asset('front/images/theme/3.png')}}" alt="Slide" />--}}
                            {{--</div>--}}

                            {{--<div class="tp-caption customin customout" data-x="center" data-y="top" data-customin="x:0;y:300;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:600;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-start="0" data-speed="1000" data-easing="Expo.easeInOut" data-endspeed="1000" data-endeasing="Expo.easeInOut">--}}
                                {{--<img src="{{asset('front/images/theme/14.png')}}" alt="Slide" />--}}
                            {{--</div>--}}

                        {{--</li>--}}

                        {{--<!-- SLIDE TWO  -->--}}
                        {{--<li data-transition="scaledownfrombottom" data-slotamount="5" data-masterspeed="700">--}}
                            {{--<!-- MAIN IMAGE -->--}}
                            {{--<img src="{{asset('front/images/theme/3.png')}}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">--}}


                            {{--<div class="tp-caption customin customout" data-x="left" data-y="top" data-customin="x:0;y:300;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:400;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-start="400" data-speed="1000" data-easing="Expo.easeInOut" data-endspeed="1000" data-endeasing="Expo.easeInOut">--}}
                                {{--<img src="{{asset('front/images/theme/2.png')}}" alt="Slide" />--}}
                            {{--</div>--}}

                            {{--<div class="tp-caption customin customout" data-x="right" data-y="top" data-customin="x:0;y:300;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:200;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-start="0" data-speed="1000" data-easing="Expo.easeInOut" data-endspeed="1000" data-endeasing="Expo.easeInOut">--}}
                                {{--<img src="{{asset('front/images/theme/5.png')}}" alt="Slide" />--}}
                            {{--</div>--}}

                        {{--</li>--}}

                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- Advert Module -->--}}
{{--<div class="container-fluid modul-bt-one">--}}
    {{--<div class="container modul-space-eight">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="col-xs-12 col-md-8">--}}
                {{--<div class="advert-two-title">--}}
                    {{--<h1>{{__('message.Featured Product Options')}}</h1>--}}
                    {{--<p>{{__('message.Cras sed mauris augue. In at pellentesque sem. Vestibulum suscipit mi sodales tortor vehicula laoreet. Sed a purus vitae nisl sagittis consequat eget id velit.')}}</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="clearfix"></div>--}}

            {{--<div class="col-xs-12 col-md-4 clearfix hidden-lg hidden-md">--}}
                {{--<div class="advert-big-image modul-phone-four">--}}
                    {{--<img src="{{asset('front/images/theme/2.png')}}" alt="Image" />--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-xs-12 col-md-4 clearfix">--}}
                {{--<!-- One -->--}}
                {{--<div class="modul-services-three mso-icon-eight">--}}
                    {{--<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space pull-right">--}}
                        {{--<i class="fa fa-bell hi-icon"></i>--}}
                    {{--</div>--}}
                    {{--<h6>{{__('message.Rutrum Malesuada')}}</h6>--}}
                    {{--<p>{{__('message.Cras eget mattis justo. Fusce eget viendose commodo enim.')}}</p>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
                {{--<!-- One -->--}}
                {{--<div class="modul-services-three mso-icon-eight">--}}
                    {{--<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space pull-right">--}}
                        {{--<i class="fa fa-thumbs-up hi-icon"></i>--}}
                    {{--</div>--}}
                    {{--<h6>{{__('message.Amet Pellen')}}</h6>--}}
                    {{--<p>{{__('message.Cras eget mattis justo. Fusce eget viendose commodo enim1.')}}</p>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
                {{--<!-- One -->--}}
                {{--<div class="modul-services-three mso-icon-eight">--}}
                    {{--<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space pull-right">--}}
                        {{--<i class="fa fa-camera hi-icon"></i>--}}
                    {{--</div>--}}
                    {{--<h6>{{__('message.Sed Placerat Justo')}}</h6>--}}
                    {{--<p>{{__('message.Cras eget mattis justo. Fusce eget viendose commodo enim2.')}}</p>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}

            {{--</div>--}}

            {{--<div class="col-xs-12 col-md-4 clearfix hidden-sm hidden-xs">--}}
                {{--<div class="advert-big-image">--}}
                    {{--<img src="{{asset('front/images/theme/2.png')}}" alt="Image" />--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-xs-12 col-md-4 clearfix">--}}
                {{--<!-- One -->--}}
                {{--<div class="modul-services-two mso-icon-eight">--}}
                    {{--<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space pull-left">--}}
                        {{--<i class="fa fa-flask hi-icon"></i>--}}
                    {{--</div>--}}
                    {{--<h6>{{__('message.Fusce Nunc Tellus')}}</h6>--}}
                    {{--<p>{{__('message.Cras eget mattis justo. Fusce eget viendose commodo enim3.')}}</p>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
                {{--<!-- One -->--}}
                {{--<div class="modul-services-two mso-icon-eight">--}}
                    {{--<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space pull-left">--}}
                        {{--<i class="fa fa-heart hi-icon"></i>--}}
                    {{--</div>--}}
                    {{--<h6>{{__('message.Etiam Sodales Justo')}}</h6>--}}
                    {{--<p>{{__('message.Cras eget mattis justo. Fusce eget viendose commodo enim4.')}}</p>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
                {{--<!-- One -->--}}
                {{--<div class="modul-services-two mso-icon-eight">--}}
                    {{--<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space pull-left">--}}
                        {{--<i class="fa fa-gift hi-icon"></i>--}}
                    {{--</div>--}}
                    {{--<h6>{{__('message.Aliquam Tempor')}}</h6>--}}
                    {{--<p>{{__('message.Cras eget mattis justo. Fusce eget viendose commodo enim5.')}}</p>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}

            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


{{--<!-- Blog Module -->--}}
{{--<div class="container-fluid modul-bt-one">--}}
    {{--<div class="container modul-space-twelve">--}}
        {{--<div class="row">--}}

            {{--<div class="col-md-2"></div>--}}
            {{--<div class="col-xs-12 col-md-8">--}}
                {{--<div class="advert-two-title">--}}
                    {{--<h1>{{__('message.News and Blog Post')}}</h1>--}}
                    {{--<p>{{__('message.Cras sed mauris augue. In at pellentesque sem. Vestibulum suscipit mi sodales tortor vehicula laoreet. Sed a purus vitae nisl sagittis consequat eget id velit1.')}}</p>--}}
                    {{--<a id="showbiz_left_7" href="#" class="btn btn-primary blog-nav-button-two">--}}
                        {{--<i class="fa fa-chevron-left"></i>--}}
                    {{--</a>--}}
                    {{--<a id="showbiz_right_7" href="#" class="btn btn-primary blog-nav-button-two">--}}
                        {{--<i class="fa fa-chevron-right"></i>--}}
                    {{--</a>--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="clearfix"></div>--}}

            {{--<div class="col-xs-12 col-md-12">--}}
                {{--<div class="blog-slider-container clearfix">--}}
                    {{--<div id="example7" class="showbiz-container">--}}
                        {{--<div class="showbiz" data-left="#showbiz_left_7" data-right="#showbiz_right_7">--}}
                            {{--<div class="overflowholder">--}}
                                {{--<ul>--}}
                                    {{--@foreach($lpost as $lposts)--}}
                                    {{--<li>--}}
                                        {{--<div class="blog-slider">--}}

                                            {{--<div class="grid cs-style-3">--}}
                                                {{--<figure>--}}
                                                    {{--<div class="blog-date-circle">--}}
                                                        {{--<h5>22</h5>--}}
                                                        {{--<p>Jan</p>--}}
                                                    {{--</div>--}}
                                                    {{--<img src="{{ asset('storage/'.$lposts->cover) }}" class="blog-slider-list-img" alt="img04">--}}
                                                    {{--<figcaption>--}}
                                                        {{--<div class="image-buttons-three">--}}
                                                            {{--<a data-toggle="modal" data-target="#view-portfolio-one" class="btn btn-primary">--}}
                                                                {{--<i class="fa fa-camera"></i>--}}
                                                            {{--</a>--}}
                                                            {{--<a class="btn btn-primary">--}}
                                                                {{--<i class="fa fa-plus"></i>--}}
                                                            {{--</a>--}}
                                                        {{--</div>--}}
                                                    {{--</figcaption>--}}
                                                {{--</figure>--}}
                                            {{--</div>--}}
                                            {{--<div class="blog-slider-list">--}}
                                                {{--<h6>{{$lposts->title}}</h6>--}}
                                                {{--<p>{!!$lposts->body  !!}</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--@endforeach--}}
                                {{--</ul>--}}
                                {{--<div class="sbclear"></div>--}}
                            {{--</div>--}}
                            {{--<div class="sbclear"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- Advert Module -->--}}
{{--<div class="container-fluid modul-bt-one parallax-five" data-speed="20" data-type="background">--}}
    {{--<div class="container modul-space-seven">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="col-xs-12 col-md-8">--}}
                {{--<div class="advert-two-title">--}}
                    {{--<h1>{{__('message.Think Smart')}}</h1>--}}
                    {{--<p>--}}
                        {{--<span class="font-weight-bold">{{__('message.Yes Soft ')}}</span>--}}
                        {{--{{__('message.is an ecommerce specialized software company located in Berlin/ Germany. It adopts open-source methodology. All its projects’ codes are available on Github.--}}
                        {{--Its team consists of developers, designers, content makers, testers and team managers. They work together remotely and results are always great.')}}--}}
                        {{--<br>{{__('message.They use up-to-date technologies to bring your imaginary requirements to reality.--}}
                        {{--Are you still hesitated about the company? Why don\'t you check out ISHTAR ART to evaluate everything by yourself?')}}</p></div>--}}
            {{--</div>--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="clearfix"></div>--}}
            {{--<!-- One -->--}}
            {{--<div class="col-md-12 clearfix">--}}
                {{--<div class="advert-big-image">--}}
                    {{--<img src="{{asset('front/images/theme/14.png')}}" alt="Image" />--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


{{--<div class="bottom-menu bottom-menu-inverse"></div>--}}
{{--</body>--}}
@endsection



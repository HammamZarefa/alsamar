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
                        <!-- MAIN IMAGE--><img class="rev-slidebg" src="{{ asset('storage/'.$banner[0]->cover) }}" data-bgcolor="#0c0c0c" style="background:#000" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" data-no-retina="">
                        <!-- LAYERS-->
                        <!-- LAYER NR. 1-->
                        <div class="tp-caption rev_group" id="slide-5-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['120','120','120','100']" data-width="410" data-height="['60','60','60','140']" data-whitespace="normal" data-type="group" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                            <!-- LAYER NR. 2-->
                            <!-- <div class="tp-caption" id="slide-5-layer-2" data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+990&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;"><a class="vlt-btn vlt-btn--primary vlt-btn--effect vlt-btn--lg" href="contact-us-01.html"><span>Contact Us</span></a></div> -->
                            <!-- LAYER NR. 3-->
                            <!-- <div class="tp-caption" id="slide-5-layer-3" data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','bottom']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+1240&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;"><a class="vlt-btn vlt-btn--secondary vlt-btn--effect vlt-btn--lg" href="portfolio-01.html"><span>View Projects</span></a></div> -->
                        </div>
                        <!-- LAYER NR. 4-->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-4" id="slide-5-layer-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full-proportional" data-height="full-proportional" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:0.5;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;"><img src="" alt="" data-ww="['full-proportional','full-proportional','full-proportional','full-proportional']" data-hh="['full-proportional','full-proportional','full-proportional','full-proportional']" data-no-retina=""></div>
                        <!-- LAYER NR. 5-->
                        <h1 class="tp-caption" id="slide-5-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-60','-100']" data-fontsize="['58','58','58','38']" data-lineheight="['70','70','70','50']" data-width="['501','501','501','430']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:500,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; min-width: 501px; max-width: 501px; white-space: normal; font-size: 58px; line-height: 70px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family: 'Dancing Script', cursive;text-transform:uppercase;">
                            {{$banner[0]->title}}
                        </h1>
                        <h3 style="position: absolute;z-index: 10;color: #fff;right: 0;bottom: 30%;width: 100%;font-family: 'Dancing Script', cursive;text-transform: uppercase;text-align: center;">
                        {{$banner[0]->desc}}
                        </h3>
                        {{--<br><h2>{{$banner[0]->desc}}</h2>--}}
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
    <!-- END REVOLUTION SLIDER-->
    <script>
    var revapi5,
    tpj;
    (function() {
    if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
    else onLoad();

    function onLoad() {
    if (tpj === undefined) {
    tpj = jQuery;
    if ("off" == "on") tpj.noConflict();
    }
    if (tpj("#rev_slider_5_1").revolution == undefined) {
    revslider_showDoubleJqueryError("#rev_slider_5_1");
    } else {
    revapi5 = tpj("#rev_slider_5_1").show().revolution({
    sliderType: "hero",
    jsFileLocation: "asset('front/revolution/js/",
    sliderLayout: "fullwidth",
    dottedOverlay: "none",
    delay: 9000,
    navigation: {},
    responsiveLevels: [1240, 1024, 778, 480],
    visibilityLevels: [1240, 1024, 778, 480],
    gridwidth: [1200, 1200, 778, 480],
    gridheight: [680, 780, 740, 720],
    lazyType: "none",
    parallax: {
    type: "scroll",
    origo: "enterpoint",
    speed: 400,
    speedbg: 0,
    speedls: 0,
    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
    disable_onmobile: "on"
    },
    shadow: 0,
    spinner: "spinner0",
    autoHeight: "off",
    disableProgressBar: "on",
    hideThumbsOnMobile: "off",
    hideSliderAtLimit: 0,
    hideCaptionAtLimit: 0,
    hideAllCaptionAtLilmit: 0,
    debugMode: false,
    fallbacks: {
    simplifyAll: "off",
    disableFocusListener: false,
    }
    });
    }; /* END OF revapi call */
    }; /* END OF ON LOAD FUNCTION */
    }()); /* END OF WRAPPING FUNCTION */
    </script>

    <!--About Us 05-->
        <section class="position-relative overflow-hidden" id="About" style="background-color: #f7f7f7;">
            <!--Particle-->
            <div class="vlt-particle" data-jarallax-element="100 0" style="top: -50px; right: -30px; max-width: 250px;"><img src="{{asset('front/img/root/particle-002.png')}}" alt=""></div>
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="text-center">
                    <!--Animation Block-->
                    <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                        <h3 class="vlt-first-color text-lowercase m-0"><span style="text-transform:uppercase;">{{$about->title}} </span>
                            <br>
                            <span class="vlt-second-color">{{$about->subject}}</span>
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
                                    <p>{{ Str::words($about->desc, $limit = 20, $end = '...') }}</p>
                                </div>
                                <div class="tp-caption" id="slide-5-layer-3" data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','bottom']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+1240&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;"><a class="vlt-btn vlt-btn--secondary vlt-btn--effect vlt-btn--lg mt-4" href="{{route('about')}}"><span>@lang('Read More')</span></a></div>
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
                        <div class="cbp-filter-item cbp-filter-item-active" data-filter="*">@lang('All')</div>
                        @foreach($pcategories as $pcategory)
                            <div class="cbp-filter-item" data-filter=".filter-{{$pcategory->id}}">{{$pcategory->name}}</div>
                        @endforeach
                    </div>
                    <div id="vlt-grid-portfolio-01">
                        @foreach($portfolios->slice(0,12) as $portfolio)
                        <!--Portfolio Item-->
                        <article class="vlt-portfolio-item vlt-portfolio-item--style-1 filter-{{$portfolio->pcategory_id}} cbp-item">
                            <div class="vlt-portfolio-item-img">
                                <div class="vlt-fit-image" style="--size-md: 90%; --size-sm: 90%;"><img src="{{ asset('storage/'.$portfolio->cover) }}" alt=""></div>
                            </div><a class="vlt-portfolio-item-overlay vlt-portfolio-item-overlay--align-center" href="{{route('portfolioshow',$portfolio->slug)}}" style="background-color:rgba(255,255,255,.8);">
                                <div class="vlt-portfolio-item-meta">
                                    <h4 class="vlt-portfolio-item-meta-title" style="color:#0b0b0b;">{{$portfolio->name}}</h4>
                                    <span class="vlt-portfolio-item-meta-category vlt-display-1" style="color:#5c5c5c;">{{ Str::words($portfolio->desc, $limit = 20, $end = '...') }}</span>
                                </div>
                            </a>
                        </article>
                        @endforeach
                    </div>
                    <div class="vlt-gap-70"></div>
                    <div class="vlt-cubeportfolio-pagination-wrap" ><a class="cbp-l-loadMore-link vlt-btn vlt-btn--primary vlt-btn--lg " href="{{route('products')}}"><span class="cbp-l-loadMore-defaultText">@lang('Load More')</span></a></div>
                </div>
                <div class="vlt-gap-120"></div>
            </section>
        </section>
        <section id="Vlaues" class="jarallax"><img class="jarallax-img" src="" alt="">
            <div class="jarallax-overlay" style="background-color: #3c594f;"></div>
            <h3 style="color: #fff;text-align: center;padding-top: 20px;">@lang('Our Services')</h3>
            <div class="vlt-gap-60"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                            <ul class="vlt-demo-core-features-list d-flex justify-content-around flex-wrap">
                                @foreach($services as $service)
                                    <li class="mb-2">
                                        <img src="{{ asset('storage/'.$service->icon) }}" style="width: 20px;margin-inline-end: 10px;">{{$service->title}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="vlt-gap-15--sm"></div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>
        <!--Counter Up 02-->
        <section class="jarallax" id="Message"><img class="jarallax-img" src="" alt="">
            <div class="jarallax-overlay" style="background-color: #eebc69;"></div>
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-12 mt-4"><H3 style="color: #fff;text-align: center;">@lang('Our Message')</H3></div>
                    <div class="col-md-6 tx-ce">
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                            <h3 class="vlt-white-color  m-0">{{$about->message1}}</h3>
                        </div>
                    </div>
                    <div class="col-md-6 tx-ce">
                        <div class="vlt-custom--5136">
                            <div class="vlt-gap-60"></div>
                            <!--Animation Block-->

                            <!--Animation Block-->
                            <div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
                                <p style="color: #fff;">{{$about->message2}}</p>
                                {{--<p style="color: #fff;">We seek to have a big hand in supporting the market's food needs and contributing to achieving food security.</p>--}}
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
            <h3 style="color: #fff;text-align: center;padding-top: 20px;margin: 0;">@lang('Vision')</h3>
            <div class="vlt-gap-60"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!--Section Title-->
                        <div class="vlt-section-title  tx-ce">
                            <h5 style="color:#fff;">{{$about->vision}}
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
        <!--&&&&&&&&&&&&&&&&&&&&&& Start blog  &&&&&&&&&&&&&&&&&&&& -->
					<section style="background-color: #f7f7f7;">
						<div class="vlt-gap-120"></div>
						<div class="container position-relative">
							<!--Particle-->
							<div class="vlt-particle" data-jarallax-element="-100 0" style="top: 70px; left: calc(-160px - 15px); max-width: 250px;"><img src="{{asset('front/img/root/particle-01--black.png')}}" alt=""></div>
							<!--Particle-->
							<div class="vlt-particle" data-jarallax-element="100 0" style="top: 75px; right: calc(-75px + 15px); max-width: 150px;"><img src="{{asset('front/img/root/particle-002.png')}}" alt=""></div>
							<div class="row">
								<div class="col-md-6 offset-md-3">
									<!--Animation Block-->
									<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
										<!--Section Title-->
										<div class="text-center">
											<h2 style="color: #3c594f">@lang('Blogs')</h2>
										</div>
									</div>
									<div class="vlt-gap-70"></div>
								</div>
							</div>
							<div class="row">
                            @foreach($lpost->slice(0,3)  as $post)
								<div class="col-md-4">
									<!--Animation Block-->
									<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
										<!--Blog Post-->
										<article class="vlt-post filter-branding vlt-post--style-masonry">
											<div class="vlt-post-thumbnail clearfix">
												<div class="vlt-fit-image" style="--size-md: 67.5%; --size-sm: 67.5%;"><img  src="{{ asset('storage/'.$post->cover) }}" alt=""></div><a class="vlt-post-thumbnail__link" href="{{route('blogshow',$post->slug)}}"></a>
											</div>
											<div class="vlt-post-content">
												<header class="vlt-post-header">
													<h3 class="vlt-post-title"><a href="{{route('blogshow',$post->slug)}}">{{$post->tilte}}</a></h3>
													<div class="vlt-post-meta vlt-display-1"><span>{{ Carbon\Carbon::parse($post->created_at)->format("d F, Y") }}</span><span>{{$post->category->name}}</span>
													</div>
												</header>
												<div class="vlt-post-excerpt">
													<p>{{ Str::limit( strip_tags( $post->body ), 250 ) }}
													</p>
												</div>
											</div>
										</article>
									</div>
									<div class="vlt-gap-60--sm"></div>
								</div>
                                @endforeach
							</div>
							<div class="vlt-gap-70"></div>
							<div class="text-center">
								<!--Button--><a class="vlt-btn vlt-btn--primary vlt-btn--md vlt-btn--effect" href="{{route('blog')}}"><span>@lang('Read More')</span></a>
							</div>
						</div>
						<div class="vlt-gap-120"></div>
					</section>
					<!--&&&&&&&&&&&&&&&&&&&&&& end blog  &&&&&&&&&&&&&&&&&&&&7 -->
        <!--Contact Us 02-->
        <section id="Contact" class="jarallax"><img class="jarallax-img" src="" alt="">
            <div class="jarallax-overlay" style="background-color: #3C594F;"></div>
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="vlt-custom--5171">
                            <!--Animation Block-->
                            <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                                <!--Section Title-->
                                <div class="vlt-section-title">
                                    <h2 style="color:#fff;">@lang('Get in Touch').
                                    </h2>
                                </div>
                            </div>
                            <div class="vlt-gap-40"></div>
                            <!--Animation Block-->
                            <div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
                                <ul class="vlt-contact-info vlt-white-color">
                                    <li><strong class="vlt-white-color">@lang('Address') :</strong> {{$general->address1}}</li>
                                    <li><strong class="vlt-white-color">@lang('Phone') :</strong> <a href="tel:+97156 7672228">{{$general->phone}}</a></li>
                                    <li><strong class="vlt-white-color">@lang('Email') :</strong> <a href="mailto:info@alsamarfood.com">{{$general->email}}</a></li>
                                </ul>
                            </div>
                            <div class="vlt-gap-60--sm"></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
                            <!--Contact Form-->
                            <form class="vlt-contact-form"  method="post" action="sendmail">
                                {{csrf_field()}}
                                <div class="vlt-form-row two-col">
                                    <div class="vlt-form-group">
                                        <input class="vlt-form-control vlt-border-white" type="text" placeholder="@lang('Your Name')" name="name" size="40" required>
                                    </div>
                                    <div class="vlt-form-group">
                                        <input class="vlt-form-control vlt-border-white" type="email" placeholder="@lang('Your Email')" name="email" size="40" required>
                                    </div>
                                </div>
                                <div class="vlt-form-row two-col">
                                    <div class="vlt-form-group">
                                        <input class="vlt-form-control vlt-border-white" type="tel" placeholder="@lang('Your Phone')" name="phone" size="40">
                                    </div>
                                    <div class="vlt-form-group">
                                        <input class="vlt-form-control vlt-border-white" type="text" placeholder="@lang('Your Title')" name="title" size="40">
                                    </div>
                                </div>
                                <div class="vlt-form-group">
                                    <textarea class="vlt-form-control vlt-border-white" cols="40" rows="4" placeholder="@lang('Your Message')" name="message"></textarea>
                                </div>
                                <!--Button-->
                                <button class="vlt-btn vlt-btn--sixth vlt-btn--lg"><span>@lang('Send Message')</span></button>
                                {{--<div id="success_message" style="display: none;">@lang('Success')!</div>--}}
                                {{--<div id="error_message" style="display: none;">@lang('Error')!</div>--}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>
        <!--Google Map 03-->
        <!-- <div id="map" style="height: 500px;"></div> -->
    </main>
    <!--Back to Top--><a class="vlt-btn vlt-btn--secondary vlt-btn--effect vlt-btn--go-top hidden" href="#"><span><i class="leedo-chevron-up"></i></span></a>
    </div>


  @endsection



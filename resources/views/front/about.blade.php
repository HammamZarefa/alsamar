@extends('layouts.front')

@section('content')
    <!--Main-->
    <main class="vlt-main">
        <!--Afterwords 01-->
        <section class="position-relative overflow-hidden" style="background-color: #00bec5;">
            <!--Particle-->
            <div class="vlt-particle"  style="max-width: 380px; bottom:0;left:0;"><img src="{{asset('front/img/root/grain-cover11.png')}}" alt=""></div>
            <div class="vlt-particle" style="max-width: 380px; bottom:0;left:380px;"><img src="{{asset('front/img/root/grain-cover11.png')}}" alt=""></div>
            <div class="vlt-particle"  style="max-width: 380px; bottom:0;left:760px;"><img src="{{asset('front/img/root/grain-cover11.png')}}" alt=""></div>
            <div class="vlt-particle" style="max-width: 380px; bottom:0;right:-160px;"><img src="{{asset('front/img/root/grain-cover11.png')}}" alt=""></div>
            <!--Particle-->
            <div class="vlt-particle" data-jarallax-element="100 0" style="max-width: 310px; bottom: 0; right: -100px;"><img src="{{asset('front/img/root/particle-01--white.png')}}" alt=""></div>
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="text-center">
                    <!--Animation Block-->
                    <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                        <h3 class="vlt-white-color m-0">
                           {{$about->subject}}
                        </h3>
                    </div>
                    <div class="vlt-gap-25"></div>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="text-center">
                            <!--Animation Block-->
                            <div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
                                <p class="vlt-white-color">{{$about->desc}}</p>
                            </div>
                            <div class="vlt-gap-45"></div>
                            <!--Animation Block-->
                            <div class="vlt-animation-block" data-aos="fade" data-aos-delay="200">
                                <img src="{{asset('front/img/root/LOGO.png')}}" alt="" style="width: 50%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>
        <section class="position-relative overflow-hidden">
            <!--Particle-->
            <div class="vlt-particle" data-jarallax-element="100 0" style="bottom: -50px; right: -40px; max-width: 250px;"><img src="{{asset('front/img/root/particle-01--black.png')}}" alt=""></div>
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                            <!--Section Title-->
                            <div class="vlt-section-title text-center">
                                <h2 style="text-transform: none;">@lang('Company Business')</h2>

                            </div>
                        </div>
                        <div class="vlt-gap-70"></div>
                    </div>
                </div>
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-md-4">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
                            <!--Services Item-->
                            <div class="vlt-services vlt-services--left">
                                <div class="vlt-services__icon"><img src="{{ asset('storage/'.$service->icon) }}" alt="" style="width: 70px;"></div>
                                <div class="vlt-services__content">
                                    <h4 class="vlt-services__title"><span class="vlt-highlight">{{$service->title}}</span>
                                    </h4>
                                    <p class="vlt-services__text">{{$service->desc}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vlt-gap-60"></div>
                    </div>
                    @endforeach
                </div>
                <div class="vlt-gap-70"></div>
            </div>
        </section>
        <section id="Vlaues" class="jarallax"><img class="jarallax-img" src="{{asset('front/img/landing/leedo-pages-collage.jpg')}}" alt="">
            <div class="jarallax-overlay" style="background-color: #3c594f;"></div>
            <h3 style="color: #fff;text-align: center;padding-top: 20px;">@lang('Our Responsibility')</h3>
            <div class="vlt-gap-60"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                            <ul class="vlt-demo-core-features-list d-flex justify-content-around flex-wrap">
                                <li class="mb-2"><i class="fa fa-star-o"></i> @lang('Responsibility')</li>
                                <li class="mb-2"><i class="fa fa-star-o"></i> @lang('Integrity') </li>
                                <li class="mb-2"><i class="fa fa-star-o"></i> @lang('Commitment') </li>
                                <li class="mb-2"><i class="fa fa-star-o"></i> @lang('Quality')</li>
                            </ul>
                        </div>
                        <div class="vlt-gap-15--sm"></div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>        <!--Counter Up 02-->
        <section class="jarallax" id="Message"><img class="jarallax-img" src="{{asset('front/img/attachment-04.jpg')}}" alt="">
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
    </main>
@endsection









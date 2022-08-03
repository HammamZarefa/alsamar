@extends('layouts.front')

@section('content')

    <!--Main-->
    <main class="vlt-main">
        <!--Page Title-->
        <div class="vlt-gap-60"></div>
        <section class="jarallax"><img style="max-width: 100%;
					height: auto;
					width: 100%;
					" src="{{asset('front/img/root/contact-us.png')}}" alt="">
            <div class="vlt-gap-60"></div>
        </section>
        <!--Contact Us 02-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                            <!--Section Title-->
                            <div class="vlt-section-title text-left">
                                <h2>@lang('Get in Touch').
                                </h2>
                                <p>@lang("We Wait for you").
                                </p>
                            </div>
                        </div>
                        <div class="vlt-gap-40"></div>
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
                            <ul class="vlt-contact-info">
                                <li><strong>@lang('Address'):</strong> {{$general->address1}}</li>
                                <li><strong>@lang('Phone'):</strong> <a href="tel:+97156 7672228">{{$general->phone}}</a></li>
                                <li><strong>@lang('Email'):</strong> <a href="mailto:{{$general->email}}">{{$general->email}}</a></li>
                            </ul>
                        </div>
                        <div class="vlt-gap-60--sm"></div>
                    </div>
                    <div class="col-md-6 offset-md-1">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
                            <!--Contact Form-->
                            <form class="vlt-contact-form" id="reused_form" method="post">
                                <div class="vlt-form-group">
                                    <input class="vlt-form-control" type="text" placeholder="@lang('Your Name')" name="your-name" size="40" required>
                                </div>
                                <div class="vlt-form-group">
                                    <input class="vlt-form-control" type="email" placeholder="@lang('Your Email')" name="your-email" size="40" required>
                                </div>
                                <div class="vlt-form-group">
                                    <input class="vlt-form-control" type="text" placeholder="@lang('Your Title')'" name="your-title" size="40">
                                </div>
                                <div class="vlt-form-group">
                                    <textarea class="vlt-form-control" cols="40" rows="4" placeholder="@lang('Your Message')" name="your-message"></textarea>
                                </div>
                                <!--Button-->
                                <button class="vlt-btn vlt-btn--primary vlt-btn--lg vlt-btn--effect"><span>@lang('Send Message')</span></button>
                                <div id="success_message" style="display: none;">@lang('Success!')</div>
                                <div id="error_message" style="display: none;">@lang('Error!')</div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="vlt-gap-60"></div>
            </div>
        </section>
        <div id="map" style="height: 500px;"></div>
    </main>

@endsection

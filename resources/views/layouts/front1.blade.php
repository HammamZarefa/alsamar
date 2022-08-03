<!DOCTYPE html>
<html class="no-js vlt-is--homepage-05 vlt-is--header-default vlt-is--footer-widgetized vlt-is--footer-fixed vlt-is--lowercase-mode" lang="ar" dir="{{Lang::locale() == 'en' ? 'ltr' : 'rtl'}}">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $general->title }}</title>
    <meta content="{{ $general->meta_desc }}" name="description">
    <meta content="{{ $general->keyword }}" name="keywords">
    <!-- Favicons -->
    <link href="{{ asset('storage/'.$general->favicon) }}" rel="icon">
    <link href="{{ asset('storage/'.$general->favicon) }}" rel="apple-touch-icon">

    <link rel="stylesheet" href="{{asset('front/css/framework/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/vlt-plugins.css')}}">
    <link rel="stylesheet" href="{{asset('front/revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('front/fonts/fontawesome/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/fonts/leedo/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/vlt-style.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/custom.css')}}">

    {{--<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800%7CMuli:400,400i,600%7CPlayfair+Display:700i" rel="stylesheet">--}}
    {{--<link rel="preconnect" href="https://fonts.googleapis.com">--}}
    {{--<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
    {{--<link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@500&family=Amiri:ital@1&family=Caveat:wght@700&family=Courgette&family=Dancing+Script:wght@700&family=Tajawal:wght@500&display=swap" rel="stylesheet">--}}
    {{--<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
    {{--<link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@500&family=Amiri:ital@1&family=Caveat:wght@700&family=Courgette&family=Dancing+Script:wght@700&family=Tajawal&display=swap" rel="stylesheet">--}}
</head>
<body>
{{--<!--Preloader-->--}}
{{--<div class="vlt-site-preloader">--}}
    {{--<div class="image"><img src="{{asset('front/img/root/LOGO.png')}}" alt="" style="width:400px;height: 400px;"></div>--}}
{{--</div>--}}
<!-- sticky wahtsapp button -->
<div class="whats">
    <a href="https://wa.me/+971567672228" target="_blank"><i class="fa fa-whatsapp"></i></a>
</div>
<!--Site Wrapper-->
<div class="vlt-site-wrapper">
    <!--Site Wrapper Inner-->
    <div class="vlt-site-wrapper__inner" id="Home">
        <!--Header-->
        <div class="d-none d-lg-block con-header">
            <header class="vlt-header vlt-header--default vlt-header--opaque">
                <div class="vlt-navbar vlt-navbar--main vlt-navbar--sticky vlt-navbar--hide-on-scroll vlt-navbar--white-text-on-top header">
                    <div class="container">
                        <div class="vlt-navbar-inner">
                            <div class="vlt-navbar-inner--left">
                                <!--Logo--><a class="vlt-navbar-logo" href="#"><img class="black" src="{{asset('front/img/root/LOGO.png')}}" alt="" style="width: 100px;"><img class="white" src="{{asset('front/img/root/LOGO.png')}}" alt="" style="width: 100px;"></a>
                            </div>
                            <div class="vlt-navbar-inner--right">
                                <div class="d-flex align-items-center">
                                    <!--Navigation-->
                                    <nav class="vlt-default-navigation">
                                        <!--Menu-->
                                        <ul class="sf-menu">
                                            <li class="menu-item-has-children two-columns"><a href="#"><span>Home</span></a>
                                            </li>
                                            <li class="menu-item-has-children"><a class="about-us" href="about-us.html"><span>About</span></a>
                                                <!-- <ul class="sub-menu">
                                                    <li><a class="d-flex justify-content-center" href="about-us.html"><span>About Us</span></a>
                                                    </li>
                                                </ul> -->
                                            </li>
                                            <li class="menu-item-has-children"><a href="products.html"><span>Products</span></a>
                                                <!-- <ul class="sub-menu">
                                                    <li><a class="d-flex justify-content-center" href="products.html"><span>Products</span></a>
                                                    </li>
                                                </ul> -->
                                            </li>
                                            <li class="menu-item-has-children"><a href="contact.html"><span>Contact Us</span></a>
                                            </li>
                                            <li class="menu-item-has-children"><a href="" class="d-flex align-items-center"><i class="fa fa-globe fa-2x"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a class="d-flex justify-content-center" href="index.html"><span>English</span></a>
                                                    <li><a class="d-flex justify-content-center" href="index-ar.html"><span>Arabic</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="d-lg-none d-sm-block">
            <header class="vlt-header vlt-header--opaque vlt-header--mobile">
                <nav class="vlt-navbar vlt-navbar--mobile">
                    <div class="container">
                        <div class="vlt-navbar-inner no-gutters">
                            <div class="col text-left">
                                <!--Logo--><a class="vlt-navbar-logo" href="index.html"><img src="{{asset('front/img/root/LOGO.png')}}" alt="" style="width: 100PX;"></a>
                            </div>
                            <div class="col text-right"><a class="vlt-menu-burger" href="#" id="vlt-mobile-menu-toggle"><span class="line line-one"><span></span></span><span class="line line-two"><span></span></span><span class="line line-three"><span></span></span></a></div>

                            <!-- <div class="col text-right"><a class="vlt-menu-shop-cart" href="shop-cart.html"><i class="leedo-paper-bag"></i><span>0</span></a></div> -->
                        </div>
                    </div>
                </nav>
                <!--Navigation-->
                <nav class="vlt-mobile-navigation">
                    <div class="container">
                        <!--Menu-->
                        <ul class="sf-menu">
                            <li class="menu-item-has- two-columns"><a href="index.html"><span>Home</span></a>
                            </li>
                            <li class="menu-item-has-"><a href="about-us.html"><span>About</span></a>

                            </li>
                            <li class="menu-item-has-"><a href="products.html"><span>Products</span></a>
                            </li>
                            <li class="menu-item-has-"><a href="contact.html"><span>Contact Us</span></a>
                            </li>
                            <li class="menu-item-has-children"><a href=""><i class="fa fa-globe fa-2x"></i></a>
                                <ul class="sub-menu">
                                    <li><a  href="index.html"><span>English</span></a>
                                    <li><a  href="index-ar.html"><span>Arabic</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        </div>

    </div>
</div>
</body>
@yield('meta')


<!-- =======================================================
  * Template Name: Company - v2.1.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


@yield('content')

<!-- ======= Footer ======= -->
{{--<footer class="footer">--}}
    {{--<div class="footer__center container">--}}

        {{--<div class="footer__container adjustbxflex row">--}}
            {{--<div class="footer__wrap"><a class="footer__logo" href="/"><img class="some-icon lazy_a"--}}
                                                                            {{--data-original="{{ asset('storage/'.$general->logo) }}"--}}
                                                                            {{--alt="Yes Soft"--}}
                                                                            {{--src="{{ asset('storage/'.$general->logo) }}"--}}
                                                                            {{--style=""></a>--}}
                {{--<div class="footer__text">{{$about->subject}}</div>--}}
                {{--<div class="footer__social">--}}
                    {{--<a class="footer__link" href="{{$general->facebook}}" target="_blank">--}}
                        {{--<img class="lazy_a" data-original="{{ asset('front/img/icons/facebook.svg') }}"--}}
                             {{--alt="Yes Soft Social Media" src="{{ asset('front/img/icons/facebook.svg') }}">--}}
                        {{--<i class="fab fa-facebook-f fa-fw fa-2x"></i>--}}
                    {{--</a>--}}
                    {{--<a class="footer__link" href="{{$general->twitter}}" target="_blank">--}}
                        {{--<img class="lazy_a" data-original="{{ asset('front/img/icons/Twitter.svg') }}"--}}
                             {{--alt="Yes Soft Social Media" src="{{ asset('front/img/icons/Twitter.svg') }}">--}}
                    {{--</a>--}}
                    {{--<a class="footer__link" href="{{$general->youtube}}" target="_blank">--}}
                        {{--<img class="lazy_a" data-original="{{ asset('front/img/icons/Youtube.svg') }}"--}}
                             {{--alt="Yes Soft Social Media" src="{{ asset('front/img/icons/Youtube.svg') }}">--}}
                    {{--</a>--}}
                    {{--<a class="footer__link" href="{{$general->linkedin}}" target="_blank">--}}
                        {{--<img class="lazy_a" data-original="{{ asset('front/img/icons/linkedin.svg') }}"--}}
                             {{--alt="Yes Soft Social Media" src="{{ asset('front/img/icons/linkedin.svg') }}">--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="footer__row">--}}
                {{--<div class="footer__col">--}}
                    {{--<div class="footer__category">{{__('message.Products')}}</div>--}}
                    {{--<div class="footer__menu">--}}
                        {{--@foreach($product as $products)--}}
                            {{--<a class="footer__item" href="{{ $products->link }}">{{ $products->name }}</a>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="footer__col">--}}
                {{--<div class="footer__category">The Beta Lab</div>--}}
                {{--<div class="footer__menu"><a class="footer__item" href="/bulbul/">Bulbul</a><a class="footer__item" href="/flightmaphome/">Flightmap</a><a class="footer__item" href="/fugu/">Fugu</a><a class="footer__item" href="/husky/">Husky</a></div>--}}
                {{--</div>--}}
                {{--<div class="footer__col">--}}
                    {{--<div class="footer__category">{{__('message.Quick Links')}}</div>--}}
                    {{--<div class="footer__menu">--}}
                        {{--<a class="footer__item" href="{{route('contact')}}">{{__('message.contact Us')}}</a>--}}
                        {{--<a class="footer__item" href="{{route('product')}}">{{__('message.Products')}}</a>--}}
                        {{--<a class="footer__item" href="/services/">{{__('message.service')}}</a>--}}
                        {{--<a class="footer__item" href="{{route('about')}}">{{__('message.About Us')}}</a>--}}
                        {{--<a class="footer__item" href="{{route('blog')}}">{{__('message.blogs')}}</a>--}}
{{--                        @foreach($link as $link)--}}
{{--                            <a class="footer__item" href="{{$link->link}}" target="_blank">{{$link->name}}</a>--}}
{{--                        @endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="footer__col">--}}
                    {{--<div class="footer__category">{{__('message.Quick Links')}} </div>--}}
                    {{--<div class="footer__menu">--}}
                        {{--<div class="addjwset">--}}
                            {{--<p class="addressSetjw opShow">--}}
                                {{--<span>Ger</span>--}}
                                {{--<i>{{$general->address1}}</i>--}}
                            {{--</p>--}}
                            {{--<p class="addressSetjw opShow">--}}
                                {{--<span>Brazil</span>--}}
                                {{--<i>{{$general->address1}}</i>--}}
                            {{--</p>--}}
                            {{--<p class="addressSetjw opShow">--}}
                                {{--<span>UAE</span>--}}
                                {{--<i>{{$general->address1}}</i>--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row adjustbxflex aligncenterflex copyRightjws">--}}
            {{--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 orderm2">--}}
                {{--<div class="footer__copyright">{{__('message.rights reserved')}}</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 orderm1">--}}
                {{--<p><a href="/terms-and-conditions/" class="footer__item">{{__('message.Terms & Conditions')}}</a> | <a--}}
                        {{--href="/privacy-policy/" class="footer__item">{{__('message.Privacy Policy')}}</a></p>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}
{{--</footer><!-- End Footer -->--}}
<!--Footer-->
<footer class="vlt-footer vlt-footer--widgetized vlt-footer--fixed">
    <div class="container">
        <div class="vlt-footer-widgets">
            <div class="row">
                <div class="col-lg-4">
                    <!--Widget-->
                    <div class="vlt-widget vlt-widget--white vlt-widget-text">
                        <h5 class="vlt-widget__title vlt-widget__title--white">About Al Samar</h5>
                        <p>Air form. Without night one his that open for was above called fifth. Gathered Wherein may Rule tree whose multiply signs appear. That tree us beast gathering moving light days.</p>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <!--Widget-->
                    <div class="vlt-widget vlt-widget--white vlt-widget-nav-menu">
                        <h5 class="vlt-widget__title vlt-widget__title--white">Quick Links</h5>
                        <ul class="menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!--Widget-->
                    <div class="vlt-widget vlt-widget--white vlt-widget-subscribe">
                        <h5 class="vlt-widget__title vlt-widget__title--white">Subscribe</h5>
                        <form class="vlt-subscribe-form vlt-subscribe-form--style-3" action="https://vlthemes.us12.list-manage.com/subscribe/post?u=e2e50705d767dad5bbc30a9ec&amp;id=9d8cc808e9">
                            <div class="d-flex">
                                <input type="email" placeholder="Your Email" name="EMAIL">
                                <button class="vlt-btn vlt-btn--primary vlt-btn--effect" type="submit"><span>Ok</span></button>
                            </div>
                            <div class="vlt-alert"></div>
                        </form>
                    </div>
                    <!--Widget-->
                    <div class="vlt-widget vlt-widget--white vlt-widget-html"><a class="vlt-social-icon vlt-social-icon--style-2" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="vlt-social-icon vlt-social-icon--style-2" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="vlt-social-icon vlt-social-icon--style-2" href="#" target="_blank"><i class="fa fa-github"></i></a><a class="vlt-social-icon vlt-social-icon--style-2" href="#" target="_blank"><i class="fa fa-behance"></i></a><a class="vlt-social-icon vlt-social-icon--style-2" href="#" target="_blank"><i class="fa fa-pinterest"></i></a><a class="vlt-social-icon vlt-social-icon--style-2" href="#" target="_blank"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
        </div>
        <!--Copyright-->
        <div class="vlt-footer-copyright">
            <p>&copy; 2022 Al Samar Food Template. All rights reserved.</p>
        </div>
    </div>
</footer>

<!--<script src="js/jquery.fitvids.js"></script>-->
<!--<script src="js/jquery.timer.js"></script>-->
<script src="{{ asset('front/scripts/vlt-plugins.min.js')}}"></script>
<script src="{{ asset('front/scripts/vlt-helpers.js')}}"></script>-->
<script src="{{ asset('front/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/jquery.themepunch.revolution.min.js' )}}"></script>
<script src="{{ asset('front/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/extensions/revolution.extension.carousel.min.js' )}}"></script>
<script src="{{ asset('front//revolution/js/extensions/revolution.extension.kenburn.min.js' )}}"></script>
<script src="{{ asset('front/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/extensions/revolution.extension.migration.min.js' )}}"></script>
<script src="{{ asset('front/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/extensions/revolution.extension.parallax.min.js' )}}"></script>
<script src="{{ asset('front/revolution/js/extensions/revolution.extension.slideanims.min.js' )}}"></script>
<script src="{{ asset('front/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<!--Google Maps-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv_85HechLOo3Rf-AD8sXNMqIb-L5fVic"></script>
<script>
    (function($) {
        'use strict';
        var isDraggable = $(document).width() > 641 ? true : true;
        var position = new google.maps.LatLng(40.713669, -74.007266);

        var map_options = {
            center: position,
            zoom: 10,
            scaleControl: true,
            streetViewControl: false,
            mapTypeControl: false,
            panControl: false,
            zoomControl: false,
            scrollwheel: false,
            draggable: isDraggable
        }

        //inizialize the map
        var map = new google.maps.Map(document.getElementById('map'), map_options);
        //add a custom marker to the map
        var marker = new google.maps.Marker({
            position: position,
            map: map,
            animation: google.maps.Animation.DROP,
            icon: 'front/img/root/map-marker--blue.png'
 });
        google.maps.event.addListener(marker, 'click', toggleBounce);
        google.maps.event.addDomListener(window, 'resize', function() {
            var center = map.getCenter();
            google.maps.event.trigger(map, 'resize');
            map.setCenter(center);
        });

        function toggleBounce() {
            if (marker.getAnimation() != null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }
    })(jQuery);
</script>

</html>

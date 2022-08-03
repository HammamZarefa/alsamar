<!DOCTYPE html>
<html class="no-js vlt-is--homepage-05 vlt-is--header-default vlt-is--footer-widgetized vlt-is--footer-fixed vlt-is--lowercase-mode" lang="ar" dir="{{Lang::locale() == 'en' ? 'ltr' : 'rtl'}}">
<head>
    <meta charset="utf-8">
    <title>{{ $general->title }}</title>
    <meta name="description" content="{{ $general->meta_desc }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta content="{{ $general->keyword }}" name="keywords">
    <!--Favicon-->
    <link href="{{ asset('storage/'.$general->favicon) }}" rel="icon">
    <link href="{{ asset('storage/'.$general->favicon) }}" rel="apple-touch-icon">
    <!--Framework-->
    <link rel="stylesheet" href="{{asset('front/css/framework/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/vlt-plugins.css')}}">
    <link rel="stylesheet" href="{{asset('front/revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('front/fonts/fontawesome/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/fonts/leedo/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/vlt-style.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/custom.css')}}">
    @if(Lang::locale() == 'ar')
        <link rel="stylesheet" href="{{asset('front/css/style-ar.css')}}">
    @endif
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@500&family=Amiri:ital@1&family=Caveat:wght@700&family=Courgette&family=Dancing+Script:wght@700&family=Tajawal:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@500&family=Amiri:ital@1&family=Caveat:wght@700&family=Courgette&family=Dancing+Script:wght@700&family=Tajawal&display=swap" rel="stylesheet">

</head>

<body>
<!--Preloader-->
<div class="vlt-site-preloader">
    <div class="image"><img src="{{asset('front/img/root/LOGO.png')}}" alt="" style="width:400px;height: 400px;"></div>
</div>
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
                                <!--Logo--><a class="vlt-navbar-logo" href="/"><img class="black" src="{{asset('front/img/root/LOGO.png')}}" alt="" style="width: 100px;"><img class="white" src="{{asset('front/img/root/LOGO.png')}}" alt="" style="width: 100px;"></a>
                            </div>
                            <div class="vlt-navbar-inner--right">
                                <div class="d-flex align-items-center">
                                    <!--Navigation-->
                                    <nav class="vlt-default-navigation">
                                        <!--Menu-->
                                        <ul class="sf-menu">
                                            <li class="menu-item-has-children two-columns"><a href="/"><span>@lang('Home')</span></a>
                                            </li>
                                            <li class="menu-item-has-children"><a class="about-us" href="{{route('about')}}"><span>@lang('About')</span></a>
                                                <!-- <ul class="sub-menu">
                                                    <li><a class="d-flex justify-content-center" href="about-us.html"><span>About Us')</span></a>
                                                    </li>
                                                </ul> -->
                                            </li>
                                            <li class="menu-item-has-children"><a href="{{route('products')}}"><span>@lang('Products')</span></a>
                                                <!-- <ul class="sub-menu">
                                                    <li><a class="d-flex justify-content-center" href="products.html"><span>@lang('Products')</span></a>
                                                    </li>
                                                </ul> -->
                                            </li>
                                            <li class="menu-item-has-children"><a href="{{route('contact')}}"><span>@lang('Contact Us')</span></a>
                                            </li>
                                            <li class="menu-item-has-children"><a href="" class="d-flex align-items-center"><i class="fa fa-globe fa-2x"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a class="d-flex justify-content-center" href="locale/en"><span>English</span></a></li>
                                                    <li><a class="d-flex justify-content-center" href="locale/ar"><span>Arabic</span></a></li>
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
                                <!--Logo--><a class="vlt-navbar-logo" href="/"><img src="{{asset('front/img/root/LOGO.png')}}" alt="" style="width: 100PX;"></a>
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
                            <li class="menu-item-has- two-columns"><a href="/"><span>@lang('Home')</span></a>
                            </li>
                            <li class="menu-item-has-"><a href="{{route('about')}}"><span>@lang('About')</span></a>
                            </li>
                            <li class="menu-item-has-"><a href="{{route('products')}}"><span>@lang('Products')</span></a>
                            </li>
                            <li class="menu-item-has-"><a href="{{route('contact')}}"><span>@lang('Contact Us')</span></a>
                            </li>
                            <li class="menu-item-has-children"><a href=""><i class="fa fa-globe fa-2x"></i></a>
                                <ul class="sub-menu">
                                    <li><a  href="locale/en"><span>English</span></a>
                                        <li><a  href="locale/en"><span>Arabic</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        </div>




@yield('meta')
<!-- =======================================================
  * Template Name: Company - v2.1.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

@yield('content')
    </div>
<!--Footer-->
<footer class="vlt-footer vlt-footer--widgetized vlt-footer--fixed">
    <div class="container">
        <div class="vlt-footer-widgets">
            <div class="row">
                <div class="col-lg-4">
                    <!--Widget-->
                    <div class="vlt-widget vlt-widget--white vlt-widget-text">
                        <h5 class="vlt-widget__title vlt-widget__title--white">@lang('About Al Samar Food')</h5>
                        <p>{{$about->subject}}</p>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <!--Widget-->
                    <div class="vlt-widget vlt-widget--white vlt-widget-nav-menu">
                        <h5 class="vlt-widget__title vlt-widget__title--white">@lang('Quick Links')</h5>
                        <ul class="menu">
                            <li><a href="/">@lang('Home')</a></li>
                            <li><a href="{{route('about')}}">@lang('About Us')</a></li>
                            <!--<li><a href="#">Our Services</a></li>-->
                            <li><a href="{{route('products')}}">@lang('Products')</a></li>
                            <!--<li><a href="#">News</a></li>-->
                            <li><a href="{{route('contact')}}">@lang('Contact Us')</a></li>
                            <!--<li><a href="#">Shop</a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!--Widget-->
                    <div class="vlt-widget vlt-widget--white vlt-widget-subscribe">
                        <h5 class="vlt-widget__title vlt-widget__title--white">@lang('Subscribe')</h5>
                        <form class="vlt-subscribe-form vlt-subscribe-form--style-3" action="https://vlthemes.us12.list-manage.com/subscribe/post?u=e2e50705d767dad5bbc30a9ec&amp;id=9d8cc808e9">
                            <div class="d-flex">
                                <input type="email" placeholder="@lang('Your Email')" name="EMAIL">
                                <button class="vlt-btn vlt-btn--primary vlt-btn--effect" type="submit"><span>@lang('Ok')</span></button>
                            </div>
                            <div class="vlt-alert"></div>
                        </form>
                    </div>
                    <!--Widget-->
                    <div class="vlt-widget vlt-widget--white vlt-widget-html">
                        <a class="vlt-social-icon vlt-social-icon--style-2" href="{{$general->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a class="vlt-social-icon vlt-social-icon--style-2" href="{{$general->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a class="vlt-social-icon vlt-social-icon--style-2" href="{{$general->github}}" target="_blank"><i class="fa fa-github"></i></a>
                        <a class="vlt-social-icon vlt-social-icon--style-2" href="{{$general->behance}}" target="_blank"><i class="fa fa-behance"></i></a>
                        <a class="vlt-social-icon vlt-social-icon--style-2" href="{{$general->pinterest}}" target="_blank"><i class="fa fa-pinterest"></i></a>
                        <a class="vlt-social-icon vlt-social-icon--style-2" href="{{$general->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--Copyright-->
        <div class="vlt-footer-copyright">
            <p>&copy; 2022 Al Samar Food . All rights reserved.</p>
        </div>
    </div>
</footer>
</div>
<script src="{{ asset('front/scripts/vlt-plugins.min.js')}}"></script>
<script src="{{ asset('front/scripts/vlt-helpers.js')}}"></script>
<script src="{{ asset('front/scripts/vlt-controllers.min.js')}}"></script>
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
            icon: '{{asset("front/img/root/map-marker--blue.png")}}'
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
</body>

</html>
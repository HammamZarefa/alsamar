@extends('layouts.front')

@section('title')
{{ $post->title }} -
@endsection
@section('meta')


<meta name="title" content="{{ $post->title }}">
<meta name="description" content="{{ $post->meta_desc }}">
<meta name='keywords' content='{{ $post->keyword }}' />

<meta property="og:type" content="website">
<meta property="og:url" content="127.0.0.1:8000/blog/{{ $post->slug }}">
<meta property="og:title" content="{{ $post->title }}">
<meta property="og:description" content="{{ $post->meta_desc }}">
<meta property="og:image" content="{{ asset('storage/'.$post->cover) }}">

<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="127.0.0.1:8000/blog/{{ $post->slug }}">
<meta property="twitter:title" content="{{ $post->title }}">
<meta property="twitter:description" content="{{ $post->meta_desc }}">
<meta property="twitter:image" content="{{ asset('storage/'.$post->cover) }}">
@endsection

@section('content')
              {{--</div> --}}

<!--  ********************************* Start Blog Details  ********************************* -->
<main class="vlt-main">
				<!--Post Thumbnail-->
				<div class="vlt-single-post-thumbnail">
					<!--Page Title Hero-->
					<div class="vlt-page-title-hero vlt-page-title-hero--post vlt-page-title-hero--lg jarallax">
						<div class="vlt-page-title-hero__overlay"></div>
						<img class="jarallax-img" src="{{ asset('storage/'.$post->cover) }}" alt="">
						<div class="vlt-page-title-hero__content">
							<div class="container">
								<div class="row">
									<div class="col-md-8 offset-md-2">
										<h1 class="vlt-page-title-hero__title">{{$post->title}}
										</h1>
										<div class="vlt-post-meta vlt-display-1"><span>{{ Carbon\Carbon::parse($post->created_at)->format("d F, Y") }}</span><span>{{$post->category->name}}</span></div>
									</div>
								</div>
							</div>
						</div><a class="vlt-scroll-to-arrow" href="#content"><i class="leedo-download-arrow"></i></a>
					</div>
				</div>
				<!--Post Wrapper-->
				<div class="vlt-single-post-wrapper vlt-single-post-wrapper--style-2" id="content">
					<!--Particle-->
					<div class="vlt-particle" data-jarallax-element="100 0" style="top: -30px; right: -40px; max-width: 250px;"><img src="{{asset('front/img/root/particle-01--black.png')}}" alt=""></div>
					<div class="container">
						<!--Single Post-->
						<article class="vlt-single-post">
							<!--Post Content-->
							<div class="vlt-single-post__content vlt-content-markup clearfix">
								<div class="row">
									<div class="col-md-8 offset-md-2">
										<h4 class="mt-0">{{$post->title}}</h4>
										<p>{!! $post->body !!}</p>
										<div class="vlt-gap-30"></div>
										<!--Post Quote Block-->
										</div>

								</div>
							<div class="row">
								<div class="col-md-8 offset-md-2">
									<!--Post Footer-->
									<footer class="vlt-single-post__footer">
										<!--Post Tags-->
										<div class="vlt-post-tags">
											<h5 class="vlt-display-1">@lang('Tags'):</h5>
											@foreach ($tags as $tag)
											<a href="{{ route('tag',$tag->slug) }}">{{ $tag->name }}</a>,
											@endforeach
										</div>
										<!--Post Share-->
										{{--<!--Social Share-->--}}
										{{--<div class="vlt-social-share text-center">--}}
											{{--<h5 class="vlt-display-1">@lang('Share this'):--}}
											{{--</h5><a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a>--}}
											{{--<a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a>--}}
											{{--<a class="vlt-social-icon vlt-social-icon--style-1 google-plus" href="#" target="_blank"><i class="fa fa-google-plus"></i></a>--}}
											{{--<a class="vlt-social-icon vlt-social-icon--style-1 linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>--}}
										{{--</div>--}}
									</footer>
								</div>
							</div>
							</div>
						</article>

					</div>
					<div class="container">
						<!--Also Like Posts 01-->
						<div class="vlt-also-like-posts">
							<div class="row">
							@foreach($post->category->posts->slice(0,3)  as $posts)
								<div class="col-md-6">
									<!--Blog Post-->
									<article class="vlt-post filter-branding vlt-post--style-also-like">
										<div class="vlt-post-thumbnail clearfix">
											<div class="vlt-fit-image" style="--size-md: 67.5%; --size-sm: 67.5%;">
											<img src="{{ asset('storage/'.$posts->cover) }}" alt=""></div><a class="vlt-post-thumbnail__link" href="{{ route('blogshow',$posts->slug) }}"></a>
										</div>
										<div class="vlt-post-content">
											<header class="vlt-post-header">
												<h3 class="vlt-post-title"><a href="{{ route('blogshow',$posts->slug) }}">{{$posts->title}}</a></h3>
												<div class="vlt-post-meta vlt-display-1"><span>{{ Carbon\Carbon::parse($post->created_at)->format("d F, Y") }}</span><span>{{$posts->category->name}}</span>
												</div>
											</header>
										</div>
									</article>
									
									<div class="vlt-gap-60--sm"></div>
								</div>
								@endforeach
							</div>
							<div class="vlt-gap-60"></div>
						</div>
					</div>
                </div>
			</main>
<!--  ********************************* End Blog Details  ********************************* -->

@endsection

@push('scripts')
    {!! $general->disqus !!}
@endpush

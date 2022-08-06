@extends('layouts.front')

@section('title')
Blog -
@php
    $no=0;
@endphp
@foreach($posts as $post)
    {{$no += $post->views}}

@endforeach
@endsection

@section('content')

 <!--  ********************************* Statr Blog List  ********************************* -->
<main class="vlt-main">
				<!--Page Title-->
				<section class="jarallax">
                    <img class="jarallax-img" src="{{asset('front/img/blog-1.jpg')}}" alt="">
					<div class="vlt-gap-120"></div>
					<div class="vlt-gap-120"></div>
					<div class="container">
						<!--Large Heading-->
						<h1 class="vlt-large-heading text-center text-white">Blog<span></span>
						</h1>
					</div>
					<div class="vlt-gap-120"></div>

					<div class="d-flex justify-content-between align-items-center">
						@isset($category)
							<h2>{{ __('home.blogcategory') }}: {{ $category->name }}</h2>
						@endisset
						@isset($tag)
							<h2>{{ __('home.blogtah') }}: {{ $tag->name }}</h2>
						@endisset
						@isset($query)
							<h2>Hasil Pencarian: {{ $query }}</h2>
						@endisset
						@if (!isset($tag) && !isset($category) && !isset($query))
							<h2>{{ __('home.blog') }}</h2>
						@endif
						<ol>
							<li><a href="/">{{ __('home.home') }}</a></li>
							<li>{{ __('home.blog') }}</li>
						</ol>
					</div>
				</section>
				<!--Content-->
				<section>
					<div class="vlt-gap-120"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="vlt-sidebar vlt-sidebar--left">
									<!--Widget-->
									<div class="vlt-widget vlt-widget-search">
										<form class="vlt-search-form" action="{{ route("search") }}" method="GET">
											<input type="text" placeholder="@lang('Search')…">
											<button><i class="leedo-search"></i></button>
										</form>
									</div>
									<!--Widget-->
									<div class="vlt-widget vlt-widget-categories">
										<h5 class="vlt-widget__title">@lang('Categories')</h5>
										<ul>
                                            @foreach ($categories as $category)
											<li><a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a> ({{ $category->count() }})</li>
                                            @endforeach

										</ul>
									</div>

									<!--Widget-->
									<div class="vlt-widget vlt-widget-tag-cloud">
										<h5 class="vlt-widget__title">Tags</h5>
										<div class="tagcloud">
                                            @foreach ($tags as $tag)
                                                <a href="{{ route('tag',$tag->slug) }}">{{ $tag->name }}</a>,
                                            @endforeach
                                                </div>
									</div>
								</div>
							</div>
							<div class="col-md-8">
								<div id="vlt-grid-blog-05-06-07">
                                @foreach($posts as $post)
									<!--Blog Post-->
									<article class="vlt-post filter-branding vlt-post--style-default cbp-item">
										<div class="vlt-post-thumbnail clearfix">
											<div class="vlt-fit-image" style="--size-md: 60%; --size-sm: 60%;"><img src="{{ asset('storage/'.$post->cover) }}" alt=""></div><a class="vlt-post-thumbnail__link" href="{{route('blogshow',$post->slug)}}"></a>
										</div>
										<div class="vlt-post-content">
											<header class="vlt-post-header">
												<h3 class="vlt-post-title"><a href="{{route('blogshow',$post->slug)}}">{{$post->title}}</a></h3>
												<div class="vlt-post-meta vlt-display-1"><span>{{ Carbon\Carbon::parse($post->created_at)->format("d F, Y") }}</span>
                                                    @foreach($post->tags as $tag)<span>{{$tag->name}}</span>@endforeach
												</div>
											</header>
											<div class="vlt-post-excerpt">
												<p>  {{ Str::limit( strip_tags( $post->body ), 250 ) }}
											</div>
											<div class="vlt-post-footer"><a class="vlt-btn vlt-btn--third vlt-btn--effect" href="{{route('blogshow',$post->slug)}}"><span>@lang('Read More')</span></a></div>
										</div>
									</article>
                                    @endforeach
								</div>
								<div class="vlt-gap-70"></div>
								{{--<div class="vlt-cubeportfolio-pagination-wrap" id="vlt-load-more-blog-06-07"><a class="cbp-l-loadMore-link vlt-btn vlt-btn--primary vlt-btn--lg vlt-btn--effect" href="ajax/blog-06-07-load-more.html"><span class="cbp-l-loadMore-defaultText">Load More</span><span class="cbp-l-loadMore-loadingText"><i class="fa fa-spinner fa-spin"></i> Loading...</span><span class="cbp-l-loadMore-noMoreLoading">No More Posts</span></a></div>--}}
							</div>
						</div>
					</div>
					<div class="vlt-gap-120"></div>
				</section>
			</main>
<!--  ********************************* End Blog List  ********************************* -->
@endsection

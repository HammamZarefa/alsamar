@extends('layouts.front')

@section('title')
{{ $post->title }} -
@endsection
@section('meta')

<!-- 
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
<main id="main">



    <section id="blog" class="blog">
      <div class="container">
      <h2 class="title">Blog show</h2>
        <div class="row" style="margin-top: 50px;">
        <div class="col-lg-4">

<div class="sidebar">
  <h3 class="sidebar-title">Categories</h3>
  <div class="sidebar-item categories">
    <ul>
      @foreach ($categories as $category)
      <li><a href="{{ route('category',$category->slug) }}">{{ $category->name }} <span>({{ $category->count() }})</span></a></li>
      @endforeach
    </ul>

  </div>

  <h3 class="sidebar-title">Recent Posts</h3>
  <div class="sidebar-item recent-posts">

    @foreach ($recent as $recent)
    <div class="post-item clearfix">

      <h4><a href="{{route('blogshow',$recent->slug)}}">{{ $recent->title }}</a></h4>
      <time datetime="2020-01-01">{{ Carbon\Carbon::parse($recent->created_at)->format("d F, Y") }}</time>
    </div>
    @endforeach

  </div>

  <h3 class="sidebar-title">Tags</h3>
  <div class="sidebar-item tags">
    <ul>
      @foreach ($tags as $tag)
       <li><a href="{{ route('tag',$tag->slug) }}">{{ $tag->name }}</a></li>
      @endforeach
    </ul>

  </div>

</div>

</div>
          <div class="col-lg-8 entries">

            <article class="entry entry-single" data-aos="fade-up">

              <div class="entry-img">
              <img src="{{ asset('front/img/haulotte.png') }}" alt="{{ $post->title }}" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{route('blogshow',$post->slug)}}">{{ $post->title }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
{{--                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{route('blogshow',$post->slug)}}">{{ $post->user->name }}</a></li>--}}
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="{{route('blogshow',$post->slug)}}"><time datetime="2020-01-01">{{ Carbon\Carbon::parse($post->created_at)->format("d F, Y") }}</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="{{ URL::current()}}#disqus_thread">Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {!! $post->body !!}
                </p>
              </div>

               <div class="entry-footer clearfix">
                <div >
                  <i class="icofont-folder"></i>
                  <ul class="cats">
                    <li><a href="{{ route('category',$post->category->slug) }}">{{ $post->category->name }}</a></li>
                  </ul>
                  </div>
                  <div >
                  <i class="icofont-tags"></i>
                  <ul class="tags">
                    @foreach ($tags as $tag)
                   <li><a href="{{ route('tag',$tag->slug) }}">{{ $tag->name }}</a></li>
                    @endforeach
                  </ul>

                  </div>
              </div> 

            </article>

            <div class="blog-comments" data-aos="fade-up">

              <h4>Leave a Comment </h4>
              <p>Your email address will not be published. Required fields are marked</p>
              <textarea placeholder="Type here" cols="20" rows="4"></textarea>
              <div class="val-info" >
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="text" placeholder="Website">
              </div>
              <div class="save-info" >
                <input type="checkbox">
                <p>Save my name, email, and website in this browser for the next time I comment.</p>
              </div>
              <div class="send">
                <button>Post Comment    <i class="icofont-send-mail"></i></button>

              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  ->

<!--  ********************************* Start Blog Details  ********************************* -->
<main class="vlt-main">
				<!--Post Thumbnail-->
				<div class="vlt-single-post-thumbnail">
					<!--Page Title Hero-->
					<div class="vlt-page-title-hero vlt-page-title-hero--post vlt-page-title-hero--lg jarallax">
						<div class="vlt-page-title-hero__overlay"></div>
						
						<div class="vlt-page-title-hero__content">
							<div class="container">
								<div class="row">
									<div class="col-md-8 offset-md-2">
										<h1 class="vlt-page-title-hero__title">Given void great you’re good appear have i also fifth.
										</h1>
										<div class="vlt-post-meta vlt-display-1"><span>26 November 2018</span><span>Events</span></div>
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
										<h4 class="mt-0">Morning, may yielding deep, and make.</h4>
										<p>Said isn’t fruitful as a bring creeping don’t. Heaven. Living appear god hath deep is itself god. Dry may. Night. Days first spirit. Dominion created together. You’ll life creeping saying he that, from, firmament image divide itself.</p>
										<p>Grass moving. Was third a, they’re days god unto. All won’t itself shall face doesn’t have divide set were doesn’t herb to don’t you’ll were man. Herb. Itself. Behold make, second very had fish one third. Fifth. Kind him under lesser grass.</p>
										<p>Light make. Subdue all shall god first forth whose itself let you’re every from. Grass abundantly was. Itself behold sixth third hath. Form, without winged living land good Life wherein it spirit doesn’t greater face sixth that them to evening cattle upon there wherein grass upon dominion earth that creeping from, forth fifth yielding.</p>
										<div class="vlt-gap-30"></div>
										<!--Post Quote Block-->
										<div class="vlt-post-quote-block"><i class="leedo-quote"></i>
											<blockquote>Seas female so Earth that kind very herb third itself so itself winged firmament.
											</blockquote>
										</div>
										<div class="vlt-gap-60"></div>
										<p>So wherein us our give were likeness fourth she’d great itself were which yielding deep dominion wherein divided seed herb. Dry. After is good. Creepeth rule creepeth.</p>
										<p>Own isn’t bearing, is Waters lights first fowl and sea. Land living. Light day kind had. Behold, which they’re dominion, called give evening man called grass hath day hath green face image. Hath moveth shall fourth spirit fruit may divide to male. You’ll.</p>
										<div class="vlt-gap-30"></div>
										<h4 class="mt-0">You’ll signs fourth image tree open.</h4>
										<p>One you’re fruit subdue saw subdue appear it. Void female may grass and light, gathering stars won’t don’t set void man moved won’t over won’t good that said together.</p>
										<p>Heaven after. Made firmament fruit gathering, them let divide which so kind great make you him have stars for. Fish. From together you after man she’d form kind creature darkness greater had multiply a called moved upon upon creepeth of living day itself gathering signs let. Bearing very replenish had fly. Cattle green place day that waters behold he were day fly. One him without third made his lights.</p>
									</div>
								</div>
								<div class="vlt-gap-60"></div>
								<div class="position-relative">
									<div class="row">
										<div class="col-md-6">
											<!--Simple Image-->
											<div class="vlt-simple-image">
												<div class="vlt-fit-image" style="--size-md: 100%; --size-sm: 100%;"><img src="assets/img/blog-1.jpg" alt=""></div>
											</div>
											<div class="vlt-gap-30--sm"></div>
										</div>
										<div class="col-md-6">
											<!--Particle-->
											<div class="vlt-particle" data-jarallax-element="100 0" style="top: -75px; right: calc(-75px + 15px); max-width: 150px;;"><img src="
											{{asset('front/img/root/particle-01--black.png')}}"  alt=""></div>
											<!--Simple Image-->
											<div class="vlt-simple-image">
												<div class="vlt-fit-image" style="--size-md: 100%; --size-sm: 100%;"><img src="assets/img/blog-2.jpg" alt=""></div>
											</div>
										</div>
									</div>
								</div>
								<div class="vlt-gap-60"></div>
								<div class="row">
									<div class="col-md-8 offset-md-2">
										<p>You’re isn’t moveth. Subdue fourth also signs form lesser likeness male, created great there god forth. Us open dominion created days creeping be fill lights fill fourth over have for moving Form earth meat. In spirit is fifth abundantly. Itself seas. Fish don’t replenish is. Thing shall spirit Greater seed moved whose meat them also gathering fly herb it forth Kind green sea waters set you seasons over.</p>
										<p>I. Moveth made that was third our stars you won’t behold, every land dominion tree. Creature hath whales to saying you’ll fish him saw deep doesn’t waters void midst. Above years. Said doesn’t them i day whales. Brought fifth is have won’t night can’t upon multiply two. From made our seasons. Said.</p>
										<p>Moved called. Above moved the first. And of dry forth living stars yielding i face to. Firmament. Is great two face face years Face hath good great third moving she’d every moveth divided herb open replenish don’t from given over was every seas over herb night have evening.</p>
										<div class="vlt-gap-30"></div>
										<!--Post Link Block-->
										<div class="vlt-post-link-block"><a href="#"></a><i class="leedo-link"></i>
											<blockquote>Fruit he, after of yielding also may can't man spirit.
											</blockquote>
										</div>
										<div class="vlt-gap-60"></div>
										<p>So wherein us our give were likeness fourth she’d great itself were which yielding deep dominion wherein divided seed herb. Dry. After is good. Creepeth rule creepeth.</p>
										<p>Own isn’t bearing, is Waters lights first fowl and sea. Land living. Light day kind had. Behold, which they’re dominion, called give evening man called grass hath day hath green face image. Hath moveth shall fourth spirit fruit may divide to male. You’ll.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8 offset-md-2">
									<!--Post Footer-->
									<footer class="vlt-single-post__footer">
										<!--Post Tags-->
										<div class="vlt-post-tags">
											<h5 class="vlt-display-1">Tags:</h5><a href="#">Business</a>,&nbsp;<a href="#">Creative</a>,&nbsp;<a href="#">Design</a>
										</div>
										<!--Post Share-->
										<!--Social Share-->
										<div class="vlt-social-share text-center">
											<h5 class="vlt-display-1">Share this:
											</h5><a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="vlt-social-icon vlt-social-icon--style-1 google-plus" href="#" target="_blank"><i class="fa fa-google-plus"></i></a><a class="vlt-social-icon vlt-social-icon--style-1 linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
										</div>
									</footer>
								</div>
							</div>
						</article>
					</div>
					<div class="container">
						<!--Also Like Posts 01-->
						<div class="vlt-also-like-posts">
							<div class="row">
								<div class="col-md-4">
									<!--Blog Post-->
									<article class="vlt-post filter-branding vlt-post--style-also-like">
										<div class="vlt-post-thumbnail clearfix">
											<div class="vlt-fit-image" style="--size-md: 67.5%; --size-sm: 67.5%;">
											<img src="{{asset('front/img/food.jpg')}}" alt=""></div><a class="vlt-post-thumbnail__link" href="single-post-01.html"></a>
										</div>
										<div class="vlt-post-content">
											<header class="vlt-post-header">
												<h3 class="vlt-post-title"><a href="single-post-01.html">Lights winged seasons fish abundantly evening.</a></h3>
												<div class="vlt-post-meta vlt-display-1"><span>26 November 2018</span><span>Branding</span>
												</div>
											</header>
										</div>
									</article>
									<div class="vlt-gap-60--sm"></div>
								</div>
								<div class="col-md-4">
									<!--Blog Post-->
									<article class="vlt-post filter-events vlt-post--style-also-like">
										<div class="vlt-post-thumbnail clearfix">
											<div class="vlt-fit-image" style="--size-md: 67.5%; --size-sm: 67.5%;"><img src="assets/img/attachment-14.jpg" alt=""></div><a class="vlt-post-thumbnail__link" href="single-post-02.html"></a>
										</div>
										<div class="vlt-post-content">
											<header class="vlt-post-header">
												<h3 class="vlt-post-title"><a href="single-post-02.html">Given void great you’re good appear have i also fifth.</a></h3>
												<div class="vlt-post-meta vlt-display-1"><span>26 November 2018</span><span>Events</span>
												</div>
											</header>
										</div>
									</article>
									<div class="vlt-gap-60--sm"></div>
								</div>
								<div class="col-md-4">
									<!--Blog Post-->
									<article class="vlt-post filter-branding vlt-post--style-also-like">
										<div class="vlt-post-thumbnail clearfix">
											<div class="vlt-fit-image" style="--size-md: 67.5%; --size-sm: 67.5%;"><img src="assets/img/attachment-18.jpg" alt=""></div><a class="vlt-post-thumbnail__link" href="single-post-03.html"></a>
										</div>
										<div class="vlt-post-content">
											<header class="vlt-post-header">
												<h3 class="vlt-post-title"><a href="single-post-03.html">Itself night place dominion together isn’t that second.</a></h3>
												<div class="vlt-post-meta vlt-display-1"><span>16 August 2018</span><span>Branding</span>
												</div>
											</header>
										</div>
									</article>
								</div>
							</div>
							<div class="vlt-gap-60"></div>
						</div>
					</div>
					<div id="comments"></div>
					<!--Comments-->
					<div class="vlt-comments vlt-comments--style-1">
						<div class="container">
							<div class="row">
								<div class="col-lg-8 offset-lg-2">
									<h3 class="vlt-comments__title">Comments.</h3>
									<ul class="vlt-comments__list">
										<!--Comment Item-->
										<li class="vlt-comment-item">
											<div class="vlt-comment-item__inner clearfix"><a class="vlt-comment-avatar" href="#"><img src="{{asset('front/img/food.jpg')}}" alt="" style="width: 100px;height: 100px;"></a>
												<div class="vlt-comment-content">
													<div class="vlt-comment-header">
														<h5>Harry Davidson</h5>
														<div class="vlt-comment-header__metas"><span>24 August 2018</span><a class="vlt-comment-reply-link" href="#">Reply</a></div>
													</div>
													<div class="vlt-comment-text vlt-content-markup clearfix">
														<p>Fruit man saying itself open were. Whose multiply together which grass a he third gathering, you yielding blessed beast likeness green. Two kind can’t divided said stars darkness isn’t called.</p>
													</div>
												</div>
											</div>
											<ul class="children">
												<!--Comment Item-->
												<li class="vlt-comment-item">
													<div class="vlt-comment-item__inner clearfix"><a class="vlt-comment-avatar" href="#"><img src="{{asset('front/img/food.jpg')}}" alt="" style="width: 100px;height: 100px;"></a>
														<div class="vlt-comment-content">
															<div class="vlt-comment-header">
																<h5>Jessica Reed</h5>
																<div class="vlt-comment-header__metas"><span>24 August 2018</span><a class="vlt-comment-reply-link" href="#">Reply</a></div>
															</div>
															<div class="vlt-comment-text vlt-content-markup clearfix">
																<p>Herb is sixth fruitful one multiply fruit won’t she’d fowl you, creepeth. To give great a. Open after a won’t. Sea image.</p>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!--Comment Form-->
					<div class="vlt-comment-form vlt-comment-form--style-1">
						<div class="container">
							<div class="row">
								<div class="col-lg-8 offset-lg-2">
									<h3 class="vlt-comment-form__title">Leave a Comment.</h3>
									<form>
										<div class="vlt-form-row two-col">
											<div class="vlt-form-group">
												<input type="text" placeholder="Your Name">
											</div>
											<div class="vlt-form-group">
												<input type="email" placeholder="Your Email">
											</div>
										</div>
										<div class="vlt-form-group">
											<textarea cols="45" rows="6" placeholder="Your Comment"></textarea>
										</div>
										<button class="vlt-btn vlt-btn--primary vlt-btn--effect"><span>Post a Comment</span></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
<!--  ********************************* End Blog Details  ********************************* -->

@endsection

@push('scripts')
    {!! $general->disqus !!}
@endpush

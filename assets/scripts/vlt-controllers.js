/***********************************************
 * Countdown
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.countdown == 'undefined') {
		return;
	}

	$('.vlt-countdown').each(function() {
		var $this = $(this),
			final_date = $this.data('final-date');

		$this.countdown(final_date, function(e) {
			$(this).html(e.strftime(''
				+ '<div><strong>%-D</strong><h5>Days</h5></div>'
				+ '<div><strong>%H</strong><h5>Hours</h5></div>'
				+ '<div><strong>%M</strong><h5>Minutes</h5></div>'
				+ '<div><strong>%S</strong><h5>Seconds</h5></div>'
			));
		});

	});

})(jQuery);
/***********************************************
 * Counter up
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof anime == 'undefined') {
		return;
	}

	$('.vlt-counter-up').each(function() {

		var $duration = 1500,
			$delay = 150;

		$(this).one('inview', function() {
			var $this = $(this),
				finalValue = $this.data('value') || 0,
				finalValueContainer = $this.find('strong'),
				obj = {
					count: 0
				};

			anime({
				targets: obj,
				count: finalValue,
				round: 1,
				easing: 'linear',
				duration: $duration,
				delay: $delay,
				update: function() {
					finalValueContainer.text(obj.count);
				}
			});
		});
	});

})(jQuery);
/***********************************************
 * Fit text
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.fitText == 'undefined') {
		return;
	}

	function fit_text() {
		$('.vlt-fittext').each(function() {
			var $this = $(this),
				compressor = $this.data('comp-rate') || 1;

			$this.fitText(compressor, {
				minFontSize: $this.data('min-size') || Number.NEGATIVE_INFINITY,
				maxFontSize: $this.data('max-size') || Number.POSITIVE_INFINITY
			});
		});
	}

	VLTJS.window.trigger('resize');

	fit_text();
	VLTJS.debounceResize(fit_text);

})(jQuery);
/***********************************************
 * Footer fixed effect
 ***********************************************/
(function($) {

	'use strict';

	function fixed_footer() {
		var footer = $('.vlt-footer').filter('.vlt-footer--fixed'),
			siteWrapperInner = $('.vlt-site-wrapper__inner'),
			footerHeight = footer.outerHeight();

		siteWrapperInner.css({
			'margin-bottom': footerHeight
		});
	}

	fixed_footer();
	VLTJS.debounceResize(fixed_footer);

})(jQuery);
/***********************************************
 * Navbar
 ***********************************************/
(function($) {

	'use strict';

	var navbarMain = $('.vlt-navbar--main');

	// sticky navbar
	var navbarHeight = navbarMain.length ? navbarMain.offset().top : 0;

	// fake navbar
	var navbarFake = $('<div class="vlt-fake-navbar">').hide();

	function _fixed_navbar() {
		navbarMain.addClass('vlt-navbar--fixed');
		navbarFake.show();
	}

	function _unfixed_navbar() {
		navbarMain.removeClass('vlt-navbar--fixed');
		navbarFake.hide();
	}

	function _on_scroll_navbar() {
		if (VLTJS.window.scrollTop() >= navbarHeight) {
			_fixed_navbar();
		} else {
			_unfixed_navbar();
		}
	}

	if (navbarMain.hasClass('vlt-navbar--sticky')) {

		VLTJS.window.on('scroll resize', _on_scroll_navbar);

		_on_scroll_navbar();

		// append fake navbar
		navbarMain.after(navbarFake);

		// fake navbar height after resize
		navbarFake.height(navbarMain.innerHeight());

		VLTJS.debounceResize(function() {
			navbarFake.height(navbarMain.innerHeight());
		});

	}

	// hide navbar on scroll

	var navbarHideOnScroll = navbarMain.filter('.vlt-navbar--hide-on-scroll');

	VLTJS.throttleScroll(function(type, scroll) {
		var start = 450;

		function _show_navbar() {
			navbarHideOnScroll.removeClass('vlt-on-scroll-hide').addClass('vlt-on-scroll-show');
		}

		function _hide_navbar() {
			navbarHideOnScroll.removeClass('vlt-on-scroll-show').addClass('vlt-on-scroll-hide');
		}

		// hide or show
		if (type === 'down' && scroll > start) {
			_hide_navbar();
		} else if (type === 'up' || type === 'end' || type === 'start') {
			_show_navbar();
		}

		// add solid color
		if (navbarMain.hasClass('vlt-navbar--transparent') && navbarMain.hasClass('vlt-navbar--sticky')) {
			scroll > navbarMain.height() ? navbarMain.addClass('vlt-navbar--solid') : navbarMain.removeClass('vlt-navbar--solid');
		}
	});

	// onepage active menu item
	if (VLTJS.html.hasClass('vlt-is--onepage-navigation')) {
		var sections = {},
			scrollThreshold = 0.5,
			parent = null,
			linkHref = null,
			topPos = null,
			target = null;

		$('.vlt-onepage-nav > li').each(function(i) {
			linkHref = $(this).find('a').attr('href').split('#')[1];
			target = $('#' + linkHref);

			if (target.length) {
				topPos = target.offset().top;
				sections[linkHref] = Math.round(topPos);
			}
		});

		function _get_section(windowPos) {
			var value = null,
				windowHeight = Math.round(VLTJS.window.height() * scrollThreshold);

			for (var section in sections) {
				if ((sections[section] - windowHeight) < windowPos) {
					value = section;
				}
			}
			return value;

		}

		function _toggle_active_class(parent) {
			$('.vlt-onepage-nav > li').removeClass('current-menu-item');
			parent.addClass('current-menu-item');
		}

		VLTJS.window.on('scroll', function() {
			var windowTop = VLTJS.window.scrollTop(),
				position = _get_section(windowTop);

			if (position !== null) {
				parent = $('.vlt-onepage-nav > li').find('a[href$="#' + position + '"]').parent('li');

				if (!parent.hasClass('current-menu-item')) {
					_toggle_active_class(parent);
				}
			}
		});
	}

})(jQuery);

/***********************************************
 * Header default
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.superfish == 'undefined') {
		return;
	}

	$('.vlt-header--default ul.sf-menu:not(.vlt-onepage-nav)').superfish({
		delay: 0,
		speed: 300,
		speedOut: 300,
		cssArrows: false,
		animation: {
			opacity: 'show',
			marginTop: '0',
			visibility: 'visible'
		},
		animationOut: {
			opacity: 'hide',
			marginTop: '10px',
			visibility: 'hidden'
		}
	});

})(jQuery);

/***********************************************
 * Header fullscreen
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.superclick == 'undefined') {
		return;
	}

	var menu = $('.vlt-fullscreen-navigation ul.sf-menu:not(.vlt-onepage-nav)'),
		menuOpen = $('#vlt-fullscreen-menu-open'),
		menuClose = $('#vlt-fullscreen-menu-close'),
		onepageMenu = $('.vlt-is--onepage-navigation'),
		menuIsOpen = false;

	menu.superclick({
		delay: 500,
		cssArrows: false,
		animation: {
			opacity: 'show',
			height: 'show'
		},
		animationOut: {
			opacity: 'hide',
			height: 'hide'
		},
	});

	function _close_menu() {
		$('.vlt-fullscreen-navigation-holder').removeClass('is-open');
		if (typeof Howl != 'undefined') {
			new Howl({
				src: ['assets/audio/close.mp3'],
				autoplay: true,
				loop: false,
				volume: 0.4
			});
		}
		menuIsOpen = false;
	}

	function _open_menu() {
		$('.vlt-fullscreen-navigation-holder').addClass('is-open');


		if (typeof Howl != 'undefined') {
			new Howl({
				src: ['assets/audio/click.mp3'],
				autoplay: true,
				loop: false,
				volume: 0.4
			});
		}
		menuIsOpen = true;
	}

	menuOpen.on('click', function(e) {
		e.preventDefault();
		if (!menuIsOpen) {
			_open_menu();
		} else {
			_close_menu();
		}
	});

	menuClose.on('click', function(e) {
		e.preventDefault();
		_close_menu();
	});

	menu.find('a[href^="#"]').not('[href="#"]').on('click', function(e) {
		e.preventDefault();
		_close_menu();
	});

	onepageMenu.on('click', 'ul.sf-menu.vlt-onepage-nav a', function(e) {
		e.preventDefault();
		_close_menu();
	});

})(jQuery);

/***********************************************
 * Header slide
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.superclick == 'undefined') {
		return;
	}

	var menu = $('.vlt-slide-navigation ul.sf-menu:not(.vlt-onepage-nav)'),
		menuOpen = $('#vlt-slide-menu-open'),
		menuClose = $('#vlt-slide-menu-close'),
		navbarOverlay = $('.vlt-navbar-overlay'),
		onepageMenu = $('.vlt-is--onepage-navigation'),
		menuIsOpen = false;

	menu.superclick({
		delay: 500,
		cssArrows: false,
		animation: {
			opacity: 'show',
			height: 'show'
		},
		animationOut: {
			opacity: 'hide',
			height: 'hide'
		},
	});

	function _close_menu() {
		navbarOverlay.fadeOut(150);
		$('.vlt-slide-navigation-holder').removeClass('is-open');
		if (typeof Howl != 'undefined') {
			new Howl({
				src: ['assets/audio/close.mp3'],
				autoplay: true,
				loop: false,
				volume: 0.4
			});
		}
		menuIsOpen = false;
	}

	function _open_menu() {
		navbarOverlay.fadeIn(150);
		$('.vlt-slide-navigation-holder').addClass('is-open');
		if (typeof Howl != 'undefined') {
			new Howl({
				src: ['assets/audio/click.mp3'],
				autoplay: true,
				loop: false,
				volume: 0.4
			});
		}
		menuIsOpen = true;
	}

	menuOpen.on('click', function(e) {
		e.preventDefault();
		if (!menuIsOpen) {
			_open_menu();
		} else {
			_close_menu();
		}
	});

	menuClose.on('click', function(e) {
		e.preventDefault();
		_close_menu();
	});

	navbarOverlay.on('click', function(e) {
		e.preventDefault();
		_close_menu();
	});

	menu.find('a[href^="#"]').not('[href="#"]').on('click', function(e) {
		e.preventDefault();
		_close_menu();
	});

	onepageMenu.on('click', 'ul.sf-menu.vlt-onepage-nav a', function(e) {
		e.preventDefault();
		_close_menu();
	});

})(jQuery);

/***********************************************
 * Header aside
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.superclick == 'undefined') {
		return;
	}

	$('.vlt-header--aside ul.sf-menu:not(.vlt-onepage-nav)').superclick({
		delay: 500,
		cssArrows: false,
		animation: {
			opacity: 'show',
			height: 'show'
		},
		animationOut: {
			opacity: 'hide',
			height: 'hide'
		},
	});

})(jQuery);

/***********************************************
 * Header mobile
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.superclick == 'undefined') {
		return;
	}

	var menu = $('.vlt-mobile-navigation'),
		menuToggle = $('#vlt-mobile-menu-toggle'),
		onepageMenu = $('.vlt-is--onepage-navigation'),
		menuIsOpen = false;

	function _open_menu() {
		menu.slideDown();
		menuToggle.addClass('vlt-menu-burger--opened');
		menuIsOpen = true;
	}

	function _close_menu() {
		menu.slideUp();
		menuToggle.removeClass('vlt-menu-burger--opened');
		menuIsOpen = false;
	}

	menu.find('ul.sf-menu:not(.vlt-onepage-nav)').superclick({
		delay: 500,
		cssArrows: false,
		animation: {
			opacity: 'show',
			height: 'show'
		},
		animationOut: {
			opacity: 'hide',
			height: 'hide'
		},
	});

	menuToggle.on('click', function(e) {
		e.preventDefault();

		if (!menuIsOpen) {
			_open_menu();
		} else {
			_close_menu();
		}

	});

	menu.find('a[href^="#"]').not('[href="#"]').on('click', function(e) {
		e.preventDefault();
		_close_menu();
	});

	onepageMenu.on('click', 'ul.sf-menu.vlt-onepage-nav a', function(e) {
		e.preventDefault();
		_close_menu();
	});

})(jQuery);
/***********************************************
 * Marquee element
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof anime == 'undefined') {
		return;
	}

	$('.vlt-marquee').each(function() {
		var $this = $(this),
			direction = $this.data('direction') || 'normal',
			duration = $this.data('duration') || 10000;

		if ($this.find('.vlt-marquee__item--copy').length) {
			duration = duration * 2;
		}

		var marqueeInfiniteOriginal = anime({
			targets: $this.find('.vlt-marquee__item--original')[0],
			autoplay: true,
			translateX: [{
					value: '0%',
					delay: 0,
					duration: 0
				},
				{
					value: '-100%',
					delay: 0,
					duration: duration
				},
				{
					value: '100%',
					delay: 0,
					duration: 0
				},
				{
					value: '0%',
					delay: 0,
					duration: duration
				}
			],
			direction: direction,
			loop: true,
			delay: 0,
			easing: 'linear'
		});

		var marqueeInfiniteCopy = anime({
			targets: $this.find('.vlt-marquee__item--copy')[0],
			autoplay: true,
			translateX: [{
					value: '100%',
					delay: 0,
					duration: 0
				},
				{
					value: '0%',
					delay: 0,
					duration: duration
				},
				{
					value: '-100%',
					delay: 0,
					duration: duration
				},
				{
					value: '100%',
					delay: 0,
					duration: 0
				},
			],
			direction: direction,
			loop: true,
			easing: 'linear'
		});

	});

})(jQuery);
/***********************************************
 * Init third party scripts
 ***********************************************/
(function($) {

	'use strict';

	// Jarallax
	if (typeof $.fn.jarallax !== 'undefined') {
		$('.jarallax').jarallax({
			speed: 0.8
		});
	}

	if (typeof $.fn.imagesLoaded !== 'undefined' || typeof $.fn.jarallax !== 'undefined') {
		VLTJS.body.imagesLoaded(function() {
			setTimeout(function() {
				$('[data-jarallax-element]').jarallax('onResize').jarallax('onScroll');
			}, 150);
		});
	}

	// Equal height
	if (typeof $.fn.matchHeight !== 'undefined') {
		function vlthemes_equal_height() {
			setTimeout(function() {
				$('.row .vlt-services-box, .row .vlt-services').matchHeight();
			}, 100);
		}
		vlthemes_equal_height();
		VLTJS.debounceResize(vlthemes_equal_height);
	}

	// Fitvids
	if (typeof $.fn.fitVids !== 'undefined') {
		VLTJS.body.fitVids();
	}

	// Widget menu
	if (typeof $.fn.superclick !== 'undefined') {
		$('.vlt-widget-pages > ul, .vlt-widget-nav-menu ul.menu').superclick({
			delay: 500,
			cssArrows: false,
			animation: {
				opacity: 'show',
				height: 'show'
			},
			animationOut: {
				opacity: 'hide',
				height: 'hide'
			},
		});
	}

	// Fancybox
	if (typeof $.fn.fancybox !== 'undefined') {
		$().fancybox({
			selector: '[data-fancybox]',
			animationEffect: 'fade',
			transitionEffect: 'slide',
			infobar: false,
			buttons: [
				'close'
			],
			btnTpl: {
				close: '<button data-fancybox-close class="fancybox-button fancybox-button--close">' +
					'<span><i class="leedo-close"></i></span>' +
					'</button>',
				arrowLeft: '<a data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" href="javascript:;">' +
					'<span><i class="leedo-left-arrow"></i></span>' +
					'</a>',
				arrowRight: '<a data-fancybox-next class="fancybox-button fancybox-button--arrow_right" href="javascript:;">' +
					'<span><i class="leedo-right-arrow"></i></span>' +
					'</a>'
			}
		});
	}

	// Sticky sidebar
	if (typeof $.fn.imagesLoaded !== 'undefined' || typeof $.fn.theiaStickySidebar !== 'undefined') {
		VLTJS.body.imagesLoaded(function() {
			if ( $('.vlt-column-sticky-wrap').length ) {
				$('.vlt-column-sticky-sidebar').theiaStickySidebar({
					containerSelector: '.vlt-column-sticky-wrap',
					additionalMarginTop: 0,
					additionalMarginBottom: 0
				});
			}
		});
	}

	// Fast click
	if (typeof FastClick === 'function') {
		FastClick.attach(document.body);
	}

	// Quantity Shop
	VLTJS.document.on('click', '.vlt-quantity .plus, .vlt-quantity .minus', function(){
		var $this = $(this),
			$qty = $this.siblings('.qty'),
			current = parseInt($qty.val(), 10),
			min = parseInt($qty.attr('min'), 10),
			max = parseInt($qty.attr('max'), 10),
			step = parseInt($qty.attr('step'), 10);

		min = min ? min : 1;
		max = max ? max : current + step;

		if ($this.hasClass('minus') && current > min) {
			$qty.val(current - step);
			$qty.trigger('change');
		}

		if ($this.hasClass('plus') && current < max) {
			$qty.val(current + step);
			$qty.trigger('change');
		}

		return false;
	});

	// Contact Form
	function after_form_submitted(data) {
		if(data.result == 'success') {
			$('#success_message').show();
			$('#error_message').hide();
			setTimeout(function() {
				$('#success_message').hide();
			}, 5000);
			$('#reused_form')[0].reset();
		} else {
			$('#error_message').append('<ul></ul>');
			$('#success_message').hide();
			$('#error_message').show();
		}//else
	}

	$('#reused_form').on('submit', function(e) {
		e.preventDefault();
		var form = $(this);
		$.ajax({
			type: 'post',
			url: 'handler.php',
			data: form.serialize(),
			success: after_form_submitted,
			dataType: 'json'
		});
	});

	// Shop
	$('.vlt-single-product-tabs').on('click', '.vlt-tabs a', function(e) {
		e.preventDefault();
		var $this = $(this);
		var id = $($this.attr('href'));
		$('.vlt-tabs li').removeClass('active');
		$('.vlt-panel').removeClass('active');
		$this.parent('li').addClass('active');
		id.addClass('active');
		setTimeout(function() {
			$('[data-jarallax-element]').jarallax('onResize').jarallax('onScroll');
		}, 150);
	});

	$('.vlt-filter-by-price a').on('click', function(e) {
		e.preventDefault();
		$('.vlt-filter-by-price li').removeClass('active');
		$(this).parent('li').addClass('active');
	});

})(jQuery);
/***********************************************
 * Cubeportfolio
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.cubeportfolio == 'undefined') {
		return;
	}

	$('#vlt-grid-blog-01').cubeportfolio('init', {
		filters: '#vlt-filter-blog-01',
		layoutMode: 'grid',
		defaultFilter: '*',
		animationType: 'slideLeft',
		gapHorizontal: 70,
		gapVertical: 30,
		gridAdjustment: 'responsive',
		mediaQueries: [{
			width: 1170,
			cols: 3,
		}, {
			width: 767,
			cols: 2,
		}, {
			width: 575,
			cols: 1,
		}],
		displayType: 'default',
		plugins: {
			loadMore: {
				element: '#vlt-load-more-blog-01',
				action: 'click',
				loadItems: 3,
			}
		},
	});

	$('#vlt-grid-blog-02').cubeportfolio('init', {
		filters: '#vlt-filter-blog-02',
		layoutMode: 'grid',
		defaultFilter: '*',
		animationType: 'slideLeft',
		gapHorizontal: 30,
		gapVertical: 30,
		gridAdjustment: 'responsive',
		mediaQueries: [{
			width: 1170,
			cols: 4,
		}, {
			width: 767,
			cols: 2,
		}, {
			width: 575,
			cols: 1,
		}],
		displayType: 'default',
		plugins: {
			loadMore: {
				element: '#vlt-load-more-blog-02',
				action: 'click',
				loadItems: 4,
			}
		},
	});

	$('#vlt-grid-blog-03').cubeportfolio('init', {
		filters: '#vlt-filter-blog-03',
		layoutMode: 'grid',
		defaultFilter: '*',
		animationType: 'slideLeft',
		gapHorizontal: 30,
		gapVertical: 30,
		gridAdjustment: 'responsive',
		mediaQueries: [{
			width: 1170,
			cols: 3,
		}, {
			width: 767,
			cols: 2,
		}, {
			width: 575,
			cols: 1,
		}],
		displayType: 'default',
		plugins: {
			loadMore: {
				element: '#vlt-load-more-blog-03',
				action: 'click',
				loadItems: 3,
			}
		},
	});

	$('#vlt-grid-blog-04').cubeportfolio('init', {
		filters: '#vlt-filter-blog-04',
		layoutMode: 'grid',
		defaultFilter: '*',
		animationType: 'slideLeft',
		gapHorizontal: 70,
		gapVertical: 30,
		gridAdjustment: 'responsive',
		mediaQueries: [{
			width: 1170,
			cols: 2,
		}, {
			width: 767,
			cols: 2,
		}, {
			width: 575,
			cols: 1,
		}],
		displayType: 'default',
		plugins: {
			loadMore: {
				element: '#vlt-load-more-blog-04',
				action: 'click',
				loadItems: 4,
			}
		},
	});

	$('#vlt-grid-blog-05-06-07').cubeportfolio('init', {
		layoutMode: 'grid',
		defaultFilter: '*',
		animationType: 'slideLeft',
		gapHorizontal: 70,
		gapVertical: 0,
		gridAdjustment: 'responsive',
		mediaQueries: [{
			width: 1170,
			cols: 1,
		}, {
			width: 767,
			cols: 1,
		}, {
			width: 575,
			cols: 1,
		}],
		displayType: 'default',
		plugins: {
			loadMore: {
				element: '#vlt-load-more-blog-05-06-07',
				action: 'click',
				loadItems: 4,
			}
		},
	});

	$('#vlt-grid-portfolio-01').cubeportfolio('init', {
		filters: '#vlt-filter-portfolio-01',
		layoutMode: 'grid',
		defaultFilter: '*',
		animationType: 'slideLeft',
		gapHorizontal: 30,
		gapVertical: 30,
		gridAdjustment: 'responsive',
		mediaQueries: [{
			width: 1170,
			cols: 3,
		}, {
			width: 767,
			cols: 2,
		}, {
			width: 575,
			cols: 1,
		}],
		displayType: 'default',
		plugins: {
			loadMore: {
				element: '#vlt-load-more-portfolio-01',
				action: 'click',
				loadItems: 3,
			}
		},
	});

	$('#vlt-grid-portfolio-02').cubeportfolio('init', {
		filters: '#vlt-filter-portfolio-02',
		layoutMode: 'grid',
		defaultFilter: '*',
		animationType: 'slideLeft',
		gapHorizontal: 0,
		gapVertical: 0,
		gridAdjustment: 'responsive',
		mediaQueries: [{
			width: 1170,
			cols: 3,
		}, {
			width: 767,
			cols: 2,
		}, {
			width: 575,
			cols: 1,
		}],
		displayType: 'default',
		plugins: {
			loadMore: {
				element: '#vlt-load-more-portfolio-02',
				action: 'click',
				loadItems: 3,
			}
		},
	});

	$('#vlt-grid-portfolio-03').cubeportfolio('init', {
		filters: '#vlt-filter-portfolio-03',
		layoutMode: 'grid',
		defaultFilter: '*',
		animationType: 'slideLeft',
		gapHorizontal: 0,
		gapVertical: 0,
		gridAdjustment: 'responsive',
		mediaQueries: [{
			width: 1170,
			cols: 4,
		}, {
			width: 767,
			cols: 2,
		}, {
			width: 575,
			cols: 1,
		}],
		displayType: 'default',
		plugins: {
			loadMore: {
				element: '#vlt-load-more-portfolio-03',
				action: 'click',
				loadItems: 4,
			}
		},
	});

	$('#vlt-grid-portfolio-04').cubeportfolio('init', {
		filters: '#vlt-filter-portfolio-04',
		layoutMode: 'grid',
		defaultFilter: '*',
		animationType: 'slideLeft',
		gapHorizontal: 30,
		gapVertical: 30,
		gridAdjustment: 'responsive',
		mediaQueries: [{
			width: 1170,
			cols: 3,
		}, {
			width: 767,
			cols: 3,
		}, {
			width: 575,
			cols: 1,
		}],
		displayType: 'default',
		plugins: {
			loadMore: {
				element: '#vlt-load-more-portfolio-04',
				action: 'click',
				loadItems: 3,
			}
		},
	});

	$('#vlt-grid-shop-01').cubeportfolio('init', {
		filters: '#vlt-filter-shop-01',
		layoutMode: 'grid',
		defaultFilter: '*',
		animationType: 'slideLeft',
		gapHorizontal: 45,
		gapVertical: 30,
		gridAdjustment: 'responsive',
		mediaQueries: [{
			width: 1170,
			cols: 4,
		}, {
			width: 767,
			cols: 2,
		}, {
			width: 575,
			cols: 1,
		}],
		displayType: 'default',
		plugins: {
			loadMore: {
				element: '#vlt-load-more-shop-01',
				action: 'click',
				loadItems: 4,
			}
		},
	});

	$('#vlt-grid-shop-02').cubeportfolio('init', {
		filters: '#vlt-filter-shop-02',
		layoutMode: 'grid',
		defaultFilter: '*',
		animationType: 'slideLeft',
		gapHorizontal: 45,
		gapVertical: 30,
		gridAdjustment: 'responsive',
		mediaQueries: [{
			width: 1170,
			cols: 3,
		}, {
			width: 767,
			cols: 2,
		}, {
			width: 575,
			cols: 1,
		}],
		displayType: 'default',
		plugins: {
			loadMore: {
				element: '#vlt-load-more-shop-02',
				action: 'click',
				loadItems: 4,
			}
		},
	});

	$('#vlt-grid-shop-03-04').cubeportfolio('init', {
		filters: '#vlt-filter-shop-03-04',
		layoutMode: 'grid',
		defaultFilter: '*',
		animationType: 'slideLeft',
		gapHorizontal: 45,
		gapVertical: 30,
		gridAdjustment: 'responsive',
		mediaQueries: [{
			width: 1170,
			cols: 2,
		}, {
			width: 767,
			cols: 2,
		}, {
			width: 575,
			cols: 1,
		}],
		displayType: 'default',
		plugins: {
			loadMore: {
				element: '#vlt-load-more-shop-03-04',
				action: 'click',
				loadItems: 4,
			}
		},
	});

})(jQuery);

/***********************************************
 * Portfolio hover effect
 ***********************************************/
(function($) {

	'use strict';

	if (!$('#vlt-grid-portfolio-04').length) {
		return;
	}

	function portfolio_hover_effect() {

		$('#vlt-grid-portfolio-04').append('<div class="js-caption"><h4></h4></div>');

		var $portfolioGrid = $('.vlt-portfolio-item--style-4'),
			$jsCaption = $('.js-caption'),
			$jsCaptionTitle = $jsCaption.find('h4');

		$portfolioGrid.on('mousemove', function(e) {
			$jsCaption.css({
				top: e.clientY,
				left: e.clientX
			});
		});

		$portfolioGrid.find('.vlt-portfolio-item-overlay').on({
			mouseenter: function() {
				$jsCaption.removeClass('js-caption--active');
				$jsCaptionTitle.text($(this).find('.vlt-portfolio-item-meta-title').text());
				$jsCaption.addClass('js-caption--active');
			},
			mouseleave: function() {
				$jsCaption.removeClass('js-caption--active');
			}
		});

	}

	portfolio_hover_effect();

	VLTJS.document.on('onAfterLoadMore.cbp', function(event) {
		portfolio_hover_effect();
	});

})(jQuery);
/***********************************************
 * Preloader
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof NProgress != 'undefined') {
		NProgress.start();
	}

	VLTJS.window.on('load', function() {
		VLTJS.window.trigger('vlt.preloader_done');
		setTimeout(function() {
			VLTJS.html.addClass('vlt-is-page-loaded');
			if (typeof NProgress != 'undefined') {
				NProgress.done();
			}
		}, 500);
	});

})(jQuery);
/***********************************************
 * Line progress bar
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof anime == 'undefined') {
		return;
	}

	$('.vlt-progress-bar').each(function() {

		var $duration = 3000,
			$delay = 150;

		$(this).one('inview', function() {
			var $this = $(this),
				finalValue = $this.data('value') || 0,
				finalValueContainer = $this.find('.percent'),
				barContainer = $this.find('.vlt-progress-bar__bar > span'),
				obj = {
					count: 0
				};

			var animateCounter = anime({
				targets: obj,
				count: finalValue,
				round: 1,
				easing: 'linear',
				duration: $duration / 2,
				delay: $delay,
				update: function() {
					finalValueContainer.text(obj.count);
				}
			});

			var animateProgress = anime({
				targets: barContainer[0],
				width: finalValue + '%',
				duration: $duration,
				delay: $delay
			});
		});
	});

})(jQuery);
/***********************************************
 * Projects preview
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	$('.vlt-projects-preview .swiper-container').each(function() {

		var $this = $(this),
			parentContainer = $this.parents('.vlt-projects-preview'),
			projectsLinks = parentContainer.find('.vlt-projects-preview__links');

		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');
		projectsLinks.find('li').eq(0).addClass('is-active');

		var previewProjectSlider = new Swiper(this, {
			init: false,
			loop: false,
			slidesPerView: 1,
			effect: 'fade',
			allowTouchMove: false,
			lazy: true,
			speed: 1000,
			on: {
				init: function() {
					projectsLinks.on('click', 'li', function(e) {
						e.preventDefault();
						var currentLink = $(this);
						projectsLinks.find('li').removeClass('is-active');
						currentLink.addClass('is-active');
						previewProjectSlider.slideTo(currentLink.index());
					});
				},
			}
		});

		VLTJS.window.on('vlt.preloader_done', function() {
			previewProjectSlider.init();
		});

	});

})(jQuery);
/***********************************************
 * Projects showcase style 1
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	$('.vlt-projects-showcase--style-1 .swiper-container').each(function() {

		var $this = $(this);

		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		var previewProjectSlider = new Swiper(this, {
			init: false,
			lazy: true,
			loop: false,
			mousewheel: {
				releaseOnEdges: true,
			},
			slidesPerView: 3,
			speed: 1000,
			touchReleaseOnEdges: true,
			breakpoints: {
				// when window width is <= 575px
				575: {
					slidesPerView: 1
				},
				// when window width is <= 767px
				767: {
					slidesPerView: 2
				}
			}
		});

		VLTJS.window.on('vlt.preloader_done', function() {
			previewProjectSlider.init();
		});

	});

})(jQuery);


/***********************************************
 * Projects showcase style 2
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	$('.vlt-projects-showcase--style-2 .swiper-container').each(function() {

		var $this = $(this);

		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		var worksSwiper = new Swiper(this, {
			init: false,
			direction: 'vertical',
			lazy: true,
			loop: false,
			parallax: true,
			mousewheel: {
				releaseOnEdges: true,
			},
			slidesPerView: 1,
			speed: 1000,
			touchReleaseOnEdges: true,
			pagination: {
				el: $this.find('.vlt-swiper-pagination'),
				clickable: true,
			}
		});

		VLTJS.window.on('vlt.preloader_done', function() {
			worksSwiper.init();
		});

	});

})(jQuery);

/***********************************************
 * Projects showcase style 3
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	$('.vlt-projects-showcase--style-3 .swiper-container').each(function() {

		var $this = $(this);

		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		function render_max_slides(number) {
			if (number > 0 && number < 10) {
				return '0' + number;
			} else {
				return number;
			}
		}

		var worksSwiper = new Swiper(this, {
			init: false,
			direction: 'vertical',
			lazy: true,
			loop: false,
			parallax: true,
			mousewheel: {
				releaseOnEdges: true,
			},
			slidesPerView: 1,
			speed: 1000,
			touchReleaseOnEdges: true,
			pagination: {
				el: $this.find('.vlt-swiper-pagination .container'),
				clickable: false,
				renderBullet: function(index, className) {
					return '<span class="' + className + '">0' + (index + 1) + " - " + render_max_slides($this.find('.swiper-slide').length) + "</span>"
				}
			}
		});

		VLTJS.window.on('vlt.preloader_done', function() {
			worksSwiper.init();
		});

	});

})(jQuery);

/***********************************************
 * Projects showcase style 4
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	$('.vlt-projects-showcase--style-4 .swiper-container, .vlt-projects-showcase--style-6 .swiper-container').each(function() {

		var $this = $(this),
			parentContainer = $this.parents('.vlt-projects-showcase'),
			projectsLinks = parentContainer.find('.vlt-projects-showcase__links');

		// prepend
		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');
		projectsLinks.find('li').eq(0).addClass('is-active');

		var previewProjectSlider = new Swiper(this, {
			init: false,
			loop: false,
			effect: 'fade',
			lazy: true,
			slidesPerView: 1,
			allowTouchMove: false,
			speed: 1000,
			on: {
				init: function() {
					projectsLinks.on('mouseenter', 'li', function(e) {
						e.preventDefault();
						var currentLink = $(this);
						projectsLinks.find('li').removeClass('is-active');
						currentLink.addClass('is-active');
						previewProjectSlider.slideTo(currentLink.index());
					});
				},
			}
		});

		VLTJS.window.on('vlt.preloader_done', function() {
			previewProjectSlider.init();
		});

	});

})(jQuery);

/***********************************************
 * Projects showcase style 5
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	$('.vlt-projects-showcase--style-5 .swiper-container').each(function() {

		var $this = $(this);

		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		function render_max_slides(number) {
			if (number > 0 && number < 10) {
				return '0' + number;
			} else {
				return number;
			}
		}

		var worksSwiper = new Swiper(this, {
			init: false,
			direction: 'vertical',
			lazy: true,
			loop: false,
			parallax: true,
			mousewheel: {
				releaseOnEdges: true,
			},
			slidesPerView: 1,
			speed: 1000,
			touchReleaseOnEdges: true,
			pagination: {
				el: $this.find('.vlt-swiper-pagination .container'),
				clickable: false,
				renderBullet: function(index, className) {
					return '<span class="' + className + '">0' + (index + 1) + " - " + render_max_slides($this.find('.swiper-slide').length) + "</span>"
				}
			}
		});

		VLTJS.window.on('vlt.preloader_done', function() {
			worksSwiper.init();
		});

	});

})(jQuery);
/***********************************************
 * Scroll to section
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.scrollTo == 'undefined') {
		return;
	}

	$('a[href^="#"]').not('[href="#"]').on('click', function(e) {
		e.preventDefault();
		if ($(this).parents('.vlt-tabs').length) {
			return;
		}
		VLTJS.html.scrollTo($(this).attr('href'), 500);
	});

})(jQuery);

/***********************************************
 * Scroll to top
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.scrollTo == 'undefined') {
		return;
	}

	function show_btn() {
		VLTJS.html.addClass('vlt-is--show-back-to-top');
		$('.vlt-btn--go-top').removeClass('hidden').addClass('visible');
	}

	function hide_btn() {
		VLTJS.html.removeClass('vlt-is--show-back-to-top');
		$('.vlt-btn--go-top').removeClass('visible').addClass('hidden');
	}

	hide_btn();

	VLTJS.throttleScroll(function(type, scroll) {
		var offset = VLTJS.window.height() + 100;

		if ( scroll > offset) {
			if (type === 'down') {
				hide_btn();
			} else if (type === 'up') {
				show_btn();
			}
		} else {
			hide_btn();
		}

	});

	VLTJS.document.on('click', '.vlt-btn--go-top', function(e) {
		e.preventDefault();
		VLTJS.html.scrollTo(0, 500);
	});

})(jQuery);
/***********************************************
 * Stretch element inside column
 ***********************************************/
(function($) {

	'use strict';

	function stretch_element_inside_column() {

		var wndW = VLTJS.window.width();

		$('.row .vlt-stretch-element-inside-column').each(function() {
			const $this = $(this);
			const $row = $this.closest('.row');
			const $col = $this.closest('[class^="col-"]');
			const rectElement = this.getBoundingClientRect();
			const rectRow = $row[0].getBoundingClientRect();
			const rectCol = $col[0].getBoundingClientRect();
			const leftElement = rectElement.left;
			const rightElement = wndW - rectElement.right;
			const leftRow = rectRow.left + (parseFloat($row.css('padding-left')) || 0);
			const rightRow = wndW - rectRow.right + (parseFloat($row.css('padding-right')) || 0);
			const leftCol = rectCol.left;
			const rightCol = wndW - rectCol.right;
			const css = {
				'margin-left': 0,
				'margin-right': 0,
			};

			if (Math.round(leftRow) === Math.round(leftCol)) {
				const ml = parseFloat($this.css('margin-left') || 0);
				css['margin-left'] = ml - leftElement;
			}

			if (Math.round(rightRow) === Math.round(rightCol)) {
				const mr = parseFloat($this.css('margin-right') || 0);
				css['margin-right'] = mr - rightElement;
			}

			$this.css(css);

		});

	}

	stretch_element_inside_column();
	VLTJS.debounceResize(stretch_element_inside_column);

})(jQuery);
/***********************************************
 * Subscribe form
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.ajaxChimp == 'undefined') {
		return;
	}

	$('.vlt-subscribe-form').each(function() {
		var $form = $(this);

		$form.on('submit', function() {
			$form.addClass('mc-loading');
		});

		$form.ajaxChimp({
			label: $form.find('.vlt-alert'),
			callback: function(resp) {
				$form.removeClass('mc-loading');
				$form.toggleClass('mc-valid', (resp.result === 'success'));
				$form.toggleClass('mc-invalid', (resp.result === 'error'));
				if (resp.result === 'success') {
					$form.find('input[type="email"]').val('');
				}
				setTimeout(function() {
					$form.removeClass('mc-valid mc-invalid');
					$form.find('input[type="email"]').focus();
				}, 4500);
			}
		});
	});

})(jQuery);
/***********************************************
 * Testimonial slider style 1
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	$('.vlt-testimonial-slider--style-1 .swiper-container').each(function() {

		var $this = $(this);

		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		var testimonialSlider = new Swiper(this, {
			init: false,
			loop: true,
			slidesPerView: 1,
			spaceBetween: 30,
			grabCursor: true,
			speed: 1000,
			parallax: true,
			autoHeight: true,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false
			},
			navigation: {
				nextEl: $this.find('.vlt-swiper-button-next'),
				prevEl: $this.find('.vlt-swiper-button-prev'),
			},
			pagination: {
				el: $this.find('.vlt-swiper-pagination'),
				clickable: true,
			},
		});

		VLTJS.window.on('vlt.preloader_done', function() {
			testimonialSlider.init();
		});

	});

})(jQuery);

/***********************************************
 * Testimonial slider style 2
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	$('.vlt-testimonial-slider--style-2 .swiper-container').each(function() {

		var $this = $(this);

		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		var testimonialSlider = new Swiper(this, {
			init: false,
			loop: true,
			centeredSlides: true,
			slidesPerView: 3,
			spaceBetween: 30,
			grabCursor: true,
			speed: 1000,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false
			},
			breakpoints: {
				// when window width is <= 575px
				575: {
					slidesPerView: 1
				},
				// when window width is <= 767px
				767: {
					slidesPerView: 2
				},
				// when window width is <= 991px
				991: {
					slidesPerView: 3
				}
			},
			on: {
				init: function () {
					$('.vlt-testimonial-slider .vlt-testimonial-item--style-2 .vlt-testimonial-item__content, .vlt-testimonial-slider .vlt-testimonial-item--style-3 .vlt-testimonial-item__content').matchHeight();
				},
			},
		});


		VLTJS.window.on('vlt.preloader_done', function() {
			testimonialSlider.init();
		});

	});

})(jQuery);

/***********************************************
 * Image slider
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	$('.vlt-image-slider .swiper-container').each(function() {

		var $this = $(this);

		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		var imageSwiper = new Swiper(this, {
			init: false,
			slidesPerView: 1,
			grabCursor: true,
			speed: 1000,
			navigation: {
				nextEl: $this.find('.vlt-swiper-button-next'),
				prevEl: $this.find('.vlt-swiper-button-prev'),
			},
			pagination: {
				el: $this.find('.vlt-swiper-pagination'),
				clickable: true,
			},
		});

		VLTJS.window.on('vlt.preloader_done', function() {
			imageSwiper.init();
		});

	});

})(jQuery);

/***********************************************
 * Project slider
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	$('.vlt-project-slider .swiper-container').each(function() {

		var $this = $(this);

		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		var imageSwiper = new Swiper(this, {
			init: false,
			grabCursor: true,
			spaceBetween: 30,
			slidesPerView: 3,
			speed: 1000,
			breakpoints: {
				// when window width is <= 575px
				575: {
					slidesPerView: 1
				},
				// when window width is <= 767px
				767: {
					slidesPerView: 2
				}
			},
			navigation: {
				nextEl: $this.find('.vlt-swiper-button-next'),
				prevEl: $this.find('.vlt-swiper-button-prev'),
			},
			pagination: {
				el: $this.find('.vlt-swiper-pagination'),
				clickable: true,
			},
		});

		VLTJS.window.on('vlt.preloader_done', function() {
			imageSwiper.init();
		});

	});

})(jQuery);

/***********************************************
 * Awards slider
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	$('.vlt-awards-list .swiper-container').each(function() {

		var $this = $(this);

		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		var testimonialSlider = new Swiper(this, {
			init: false,
			loop: false,
			slidesPerView: 'auto',
			spaceBetween: 110,
			speed: 1000,
			mousewheel: {
				releaseOnEdges: false,
			},
			freeMode: true,
		});

		VLTJS.window.on('vlt.preloader_done', function() {
			testimonialSlider.init();
		});

	});

})(jQuery);
/***********************************************
 * Typed JS
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Typed == 'undefined') {
		return;
	}

	$('[data-typed]').each(function() {
		var $this = $(this);
		new Typed($this.get(0), {
			strings: $this.data('typed'),
			typeSpeed: 100,
			backSpeed: 0,
			startDelay: 200,
			backDelay: 3000,
			loop: true,
			loopCount: false,
			showCursor: true,
			cursorChar: '|',
			attr: null
		});
	});

})(jQuery);
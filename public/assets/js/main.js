/*
	Miniport by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	// skel
	// 	.breakpoints({
	// 		desktop: '(min-width: 737px)',
	// 		tablet: '(min-width: 737px) and (max-width: 1200px)',
	// 		mobile: '(max-width: 736px)'
	// 	})
	// 	.viewport({
	// 		breakpoints: {
	// 			tablet: {
	// 				width: 1080
	// 			}
	// 		}
	// 	});

	$(function() {

		var	$window = $(window),
			$body = $('body');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				$body.removeClass('is-loading');
			});

		// Fix: Placeholder polyfill.
			// $('form').placeholder();

		// // Prioritize "important" elements on mobile.
		// 	skel.on('+mobile -mobile', function() {
		// 		$.prioritize(
		// 			'.important\\28 mobile\\29',
		// 			skel.breakpoint('mobile').active
		// 		);
		// 	});

		// // CSS polyfills (IE<9).
		// 	if (skel.vars.IEVersion < 9)
		// 		$(':last-child').addClass('last-child');

		// Dropdowns.
			$('#nav > ul ').dropotron({
				mode: 'fade',
				noOpenerFade: true,
				// hoverDelay: 150,
				hideDelay: 350
			});

		// Scrolly.
			$window.load(function() {

				var x = parseInt($('.wrapper').first().css('padding-top')) - 15;

				$('#nav a, .scrolly').scrolly({
					speed: 1000,
					offset: x
				});

			});

		// Off-Canvas Navigation.

			// Title Bar.
				$(
					'<div id="titleBar">' +
						'<a href="#navPanel" class="toggle"></a>' +
						'<span class="title">Welcome to HK Conference Mobile</span>' +
					'</div>'+
					'<div id="titleBar" class = "notice" style = "background-color:red; display:none;">' +
						'<a href="#navPanel" class="toggle"></a>' +
						'<span class="title">Schedule Added</span>' +
					'</div>'+
					'<div id="titleBar" class = "notice_removed" style = "background-color:red; display:none;">' +
						'<a href="#navPanel" class="toggle"></a>' +
						'<span class="title">Removing...</span>' +
					'</div>'+
					'<div id="titleBar" class = "notice_already" style = "background-color:red; display:none;">' +
						'<a href="#navPanel" class="toggle"></a>' +
						'<span class="title">Added Already</span>' +
					'</div>'
				)
					.appendTo($body);

			// Navigation Panel.
				$(
					'<div id="navPanel">' +
						'<nav>' +
							$('#nav').navList() +
						'</nav>' +
					'</div>'
				)
					.appendTo($body)
					.panel({
						delay: 500,
						hideOnClick: true,
						hideOnSwipe: true,
						resetScroll: true,
						resetForms: true,
						side: 'left',
						target: $body,
						visibleClass: 'navPanel-visible'
					});

			// Fix: Remove navPanel transitions on WP<10 (poor/buggy performance).
				// if (skel.vars.os == 'wp' && skel.vars.osVersion < 10)
				// 	$('#titleBar, #navPanel, #page-wrapper')
				// 		.css('transition', 'none');

	});

})(jQuery);


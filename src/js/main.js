import $, { htmlPrefilter, ajax } from "jquery";
window.$ = window.jQuery = $;
import "bootstrap/dist/js/bootstrap";
import "slick-carousel";
import "hamburgers";

import {
	slickCarousel,
	slickCarouselButton,
	headerAddClass,
	hamburger,
} from "./functions/functions";

import {
	heroSliderOptions,
	projectSliderSingle,
	projectSliderNav,
} from "./options/options";
(function ($) {
	/**
	 * Slick sliders on Homepage
	 * @docs https://kenwheeler.github.io/slick/
	 * @src ./options/options.js
	 * @src ./functions/functions.js
	 */
	slickCarousel(".slick-wrapper", heroSliderOptions);
	slickCarouselButton(".home-banner__prev", ".slick-wrapper", "slickPrev");
	slickCarouselButton(".home-banner__next", ".slick-wrapper", "slickNext");

	/**
	 * Add class on scroll
	 * @src ./functions/functions.js
	 */
	headerAddClass("#masthead", "header-scrolled", 10);

	/**
	 * Hamburger
	 */
	hamburger(".hamburger");

	/**
	 *  Back to top animation
	 */
	$('a[href*="#back-to-top"]').click(function (e) {
		e.preventDefault();

		$("html,body").animate({ scrollTop: 0 }, 1000);
	});

	/**
	 * Smoooth Link Scrolling
	 */
	// Select all links with hashes
	$('a[href*="#"]')
		// Remove links that don't actually link to anything
		.not('[href="#"]')
		.not('[href="#0"]')
		.click(function (event) {
			// On-page links
			if (
				location.pathname.replace(/^\//, "") ==
					this.pathname.replace(/^\//, "") &&
				location.hostname == this.hostname
			) {
				// Figure out element to scroll to
				var target = $(this.hash);
				target = target.length
					? target
					: $("[name=" + this.hash.slice(1) + "]");
				// Does a scroll target exist?
				if (target.length) {
					// Only prevent default if animation is actually gonna happen
					event.preventDefault();
					$("html, body").animate(
						{
							scrollTop: target.offset().top - 100,
						},
						1000
					);
				}
			}
		});
})(jQuery);

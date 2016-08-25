"use strict";

(function($) {

	$(document).on('appinit', function() {
		$('.search4 .s4-menu ul li a').on('click', function() {
			$(this).next('ul').toggleClass('on');
		})
	});

	$(document).on('ready', function() {
	});

})(jQuery);
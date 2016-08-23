"use strict";

(function($) {

	$(document).on('appinit', function() {
		$("body.layout-masking").each(function() {
			var $content = $("#content");
			var otherHeight = 60 + 51;

			$(window).on("resize", function() {
				$(this).trigger("resizeCanvas");
			});

			$(window).on("resizeCanvas", function() {
				$content.height($(this).height() - otherHeight);
			}).trigger("resizeCanvas");
		});
	});

})(jQuery);
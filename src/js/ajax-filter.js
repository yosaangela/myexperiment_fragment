(function ($) {
	(function ($) {
		var page = 2;
		$("body").on("click", ".apply-btn-filter", function () {
			var data = {
				action: "ajax-search-filter",
				page: page,
				security: book.security,
			};

			$.post(book.ajaxurl, data, function (response) {
				if ($.trim(response) != "") {
					$("#ajax-search-filter").append(response);
					page++;
				} else {
					$(".apply-btn-filter").replaceWith(
						"<center>Niets meer te laden</center>"
					);
				}
			});
		});
	})(jQuery);
})(jQuery);

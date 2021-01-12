(function ($) {
	var mafs = $("#ajax-search-filter");
	var mafsForm = mafs.find("form");

	mafsForm.submit(function (e) {
		e.preventDefault();

		console.log("test! ");
	});
})(jQuery);

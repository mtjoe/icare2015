function addCompressed() {
	$(".nextPage").fadeOut(100, function() {
		$("section, .navibar, #logo, .navibar li, .navibar.round span").removeClass("uncomp", 500);
	});
	$(".subnavbar").show();
}
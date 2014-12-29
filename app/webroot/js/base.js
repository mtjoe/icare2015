$(window).load(function() {

	/**** One-Page Scrolling ****/
	$(window).bind('mousewheel DOMMouseScroll', function(event) {
		if ( $("section").hasClass("uncomp") ) {
			var delta = event.originalEvent.wheelDelta || -event.originalEvent.detail;
			if (delta < 0) {
				event.preventDefault();
				$(".nextPage").fadeOut(100, function() {
					$("section, .navibar, #logo, .navibar li, .navibar.round span").removeClass("uncomp", 500);
				});
				$(".subnavbar").show();
			}
		}
	});
	var id;
	$(".navibar li, .subnavbar-entry").hover(function() {
		id = "#sub-" + $(this).attr('id').split("-")[1];
		$(id).stop(true,true).fadeIn();
	}, function() {
		$(id).stop(true,true).delay(200).fadeOut();
	});
});
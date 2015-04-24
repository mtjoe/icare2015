
prevFixed = false;

function goto(id) {
	$("html, body").animate({ 'scrollTop': $("#" + id).offset().top }, 500);
	updatePosition(false);
}


function updatePosition(initial) {
	if ( window.pageYOffset > 600 )		{ fixed = true; }
	else								{ fixed = false; }

	// Calculate whether cart bar should be fixed
	if ( fixed && ( initial || !prevFixed ) ) {
		$('.setting').addClass("fixed");
		prevFixed = true;
	} else if ( !fixed && prevFixed ) {
		$('.setting').removeClass("fixed");
		prevFixed = false;
	}
}

function initScrollAction() {
	$(window).bind('mousewheel DOMMouseScroll touchmove', function() {
		updatePosition(false);
	});
}

$(window).load(function() {
	initScrollAction();
	updatePosition(true);
});

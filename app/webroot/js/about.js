function goToDivision(div) {
	$(".team-division").removeClass("active");
	$(".div-selector a").removeClass("active");
	$(".team-division." + div).addClass("active");
	$(".div-selector a." + div).addClass("active");
}

$(window).load(function() {
	$(".able img").hover(function() {
		$(this).css({'opacity' : '0.5'});
		$(".able-desc p").eq($(this).index()+1).show();
		$(".flicker").hide();
	}, function() {
		$(this).css({'opacity' : '1'});
		$(".able-desc p").eq($(this).index()+1).hide();
		$(".flicker").show();
	});
});
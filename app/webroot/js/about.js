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
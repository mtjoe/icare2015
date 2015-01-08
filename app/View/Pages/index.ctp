<?php 
	$this->assign('name', 'index');
	echo $this->Html->css("index");
?>

<!-- INDEX CONTENT -->
<div id="featured" class="carousel slide" data-ride="carousel">
  	<!-- Indicators -->
  	<ol class="carousel-indicators">
    	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
  	</ol>

  	<!-- Wrapper for slides -->
  	<div class="carousel-inner" role="listbox">
    	<div class="item active" align="center">
    		<img src="/img/index-1.jpg" alt="Melbourne" style="margin-top: -130px;">
    		<a class="carousel-caption" style="top: 0px; height: 100px; color: #273487 !important;" href="/about/recap2014">
	    		<div class="opaque" style="background: white; opacity: 0.5;"></div>
	    		<div class="opaque-text" style="padding: 10px;">
	    			<h2 style="font-size: 50px;">Recap ICarE 2014</h2>
		    	</div>
			</a>
    	</div>
	    <div class="item" >
	    	<img src="/img/team/all.jpg" alt="corp" style="margin-top: -130px;" href="/about/committee">
	    	<a class="carousel-caption" style="bottom: -100px;  width: 500px; margin-left: 125px; height: 330px; color: #273487 !important;" href="/about/committee"  align="center">
	    		<div class="opaque" style="background: white; opacity: 0.6;"></div>
	    		<div class="opaque-text" style="padding: 10px;">
	    			<h2 style="border-bottom: 2px solid #273487; font-size: 30px;">Introducing</h2>
	    			<h2 style="font-size: 50px;">The Team</h2>
		    	</div>
			</a>
	    </div>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#featured" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#featured" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	</a>
</div>

<!-- WHEN & WHERE -->
<div class="when-where">
	<div class="normal-width" align="center">
		<div><img src="/img/logo/ppia.png" style="width: 100px;"></div>
		<h2>presents</h2>
		<div>
			<img src="/img/logo/icare.png" style="width: 700px; margin-bottom: 50px;margin-top: -30px;">
		</div>
		<div class="two_fifth-no-margin" style="margin-right: 0px; margin-left: auto;" align="right">
			<h2 style="font-size: 60px; border-bottom: 2px solid grey;">16<sup>th</sup> MAY</h2>
			<h2 style="font-size: 100px;">2015</h2>
		</div>
		<div class="one_fifth-no-margin" style="margin-right: 0px; margin-left: auto;" align="center">
			<span class="ionicons ion-ios-location"></span>
		</div>
		<div class="two_fifth-no-margin column-last" style="margin-right: 0px; margin-left: auto;" align="left">
			<h2 style="font-size: 60px; border-bottom: 2px solid grey;">VENUE</h2>
			<div class="venue">
				<h2>Courtyard</h2>
				<h2>State Library of Victoria</h2>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>

<!-- SPONSORS -->
<!-- <div class="sponsors" align="center">
	<div style="height: 200px; padding: 30px 0px;">
		<h1>Platinum Sponsors</h1>	
	</div>

	<div style="height: 200px; background: #bbcef4; padding: 30px 0px;">
		<h1>Gold Sponsors</h1>	
	</div>

	<div style="height: 200px; padding: 30px 0px;">
		<h1>Silver Sponsors</h1>	
	</div>
</div> -->
<!-- END: INDEX CONTENT -->
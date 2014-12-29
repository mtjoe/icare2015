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
    	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
  	</ol>

  	<!-- Wrapper for slides -->
  	<div class="carousel-inner" role="listbox">
    	<div class="item active"><img src="/img/index-1.jpg" alt="Melbourne"></div>
	    <div class="item"><img src="/img/index-2.jpg" alt="corp"></div>
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
	<div class="normal-width">
		<div class="two_fifth" style="margin-right: 0px; margin-left: auto;" align="center">
			<h1>TIME</h1>
		</div>
		<div class="one_fifth" style="margin-right: 0px; margin-left: auto;" align="center">
			<span class="ionicons ion-ios-location"></span>
		</div>
		<div class="two_fifth column-last" style="margin-right: 0px; margin-left: auto;" align="center">
			<h1>VENUE</h1>
		</div>
	</div>
</div>

<!-- SPONSORS -->
<div class="sponsors" align="center">
	<div style="height: 200px; padding: 30px 0px;">
		<h1>Platinum Sponsors</h1>	
	</div>

	<div style="height: 200px; background: #bbcef4; padding: 30px 0px;">
		<h1>Premium Sponsors</h1>	
	</div>

	<div style="height: 200px; padding: 30px 0px;">
		<h1>Premium Sponsors</h1>	
	</div>
</div>
<!-- END: INDEX CONTENT -->
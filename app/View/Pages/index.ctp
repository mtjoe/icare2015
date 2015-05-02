<?php 
	$this->assign('name', 'index');
	$this->assign('title', 'Home');
	$this->Html->css(array("index", "committee"), array('inline' => false));
?>

<style type="text/css">
	.btn-blue:hover { background: #0076AA !important; }
</style>

<!-- INDEX CONTENT -->
<div id="featured" class="carousel slide" data-ride="carousel" data-interval="8000">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#featured" data-slide-to="0" class="active"></li>
			<li data-target="#featured" data-slide-to="1"></li>
			<li data-target="#featured" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<a href="/events/start-smart" class="item active" style="background: url(/img/pattern/dark.png); background-size: 100px 60px; background-repeat: repeat;">
				
				<div class="carousel-caption" style="width: 70%; z-index: 10;top: 50px;left: 15%; background: rgba(255, 255, 255, 0.8); text-align:left; padding: 40px; height: 350px;">
					<h1 style="font: 20px 'Montserrat'; color: black; margin-top: 0px;">NEXT EVENT COMING UP</h1>
					<img src="/img/logo/start-smart.png" style="width: 90%;">
					<p style="margin-top: 150px; text-align: center; font: 40px 'Montserrat'; color: black; text-shadow: none; margin-bottom: 0px;">090515</p>
					<p style="text-align: center; color: black;">REGISTER NOW! LIMITED SPOTS AVAILABLE</p>
				</div>
			</a>
			<a href="/Submission/register" class="item" style="background: url(/img/pattern/light2.png); background-size: 100px 60px; background-repeat: repeat; border-bottom: 5px solid #337AB7;">
				
				<div class="carousel-caption" style="width: 70%; z-index: 10;top: 50px;left: 15%;  text-align:center; padding: 40px; height: 350px;">
					<h1 style="font: 80px 'Open Sans'; color: #24307E; margin-top: 20px; font-weight: 600;">CV SUBMISSION</h1>
					<p style="margin-top: 10px; font: 35px 'Montserrat'; color: black; text-shadow: none; margin-bottom: 0px;">Submit your CV to companies of your choice!</p><br>
					<p style="padding: 10px 30px; font: 20px 'Montserrat'; background: #3C93DD; width: 300px; border-radius: 20px; text-shadow: none; margin-left: 250px;">SUBMIT NOW</p>
				</div>
			</a>

			<div class="item" align="center" style="background: black;">
				<div id="player"></div>
				 <a class="carousel-caption" style="padding: 0px; left: 0px !important; top: 0px; width: 100%; height: 100px; color: #273487 !important;" href="/about/icare2014">
				<div class="opaque" style="background: white; opacity: 0.5;"></div>
				<div class="opaque-text" style="padding: 10px;">
					<h2 style="font-size: 50px;">Recap ICarE 2014</h2>
				</div>
			</a>
				<!-- <img src="/img/index-1.jpg" alt="Melbourne" style="margin-top: -130px;">
				 -->
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
<div class="when-where" style="padding-bottom: 100px;">
	<div class="normal-width" align="center">
		<div><img src="/img/logo/ppia.png" style="width: 100px;"></div>
		<h2>presents</h2>
		<div>
			<img src="/img/logo/icare.png" style="width: 600px; margin-bottom: 50px;margin-top: -30px;">
		</div>
		<div class="two_fifth-no-margin" style="margin-right: 0px; margin-left: auto;" align="right">
			<h2 style="font-size: 50px; border-bottom: 2px solid grey;">16<sup>th</sup> MAY</h2>
			<h2 style="font-size: 70px;">2015</h2>
		</div>
		<div class="one_fifth-no-margin" style="margin-right: 0px; margin-left: auto;" align="center">
			<span class="ionicons ion-ios-location" style="font-size: 170px;"></span>
		</div>
		<div class="two_fifth-no-margin column-last" style="margin-right: 0px; margin-left: auto;" align="left">
			<h2 style="font-size: 50px; border-bottom: 2px solid grey;">VENUE</h2>
			<div class="venue">
				<h2>Courtyard</h2>
				<h2>State Library of Victoria</h2>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<div class="registration" align="center" style="margin-top: 50px;">
		<a href="/events/expo" class="btn-register btn-blue" style="background: #00A0E4;">Read More</a>
		<a href="https://www.eventbrite.com/e/the-expo-indonesian-career-expo-2015-tickets-16183652741" target="blank" class="btn-register">Register on Eventbrite</a>
	</div>
</div>

<div align="center" style="background: #DDDEED; padding: 120px 0px;">
	<div class="normal-width event-list">
		<h2 style="font: 35px 'Open Sans'; font-weight: 600; text-transform: uppercase; color: #263586; border-bottom: 2px solid #263586; padding-bottom: 20px;">We have a series of events lined up for you!</h2><br>
		<a href="/events/start-smart" class="one_half-margin-20 event-entry">
			<img src="/img/logo/start-smart.png" style="padding-top: 50px;">
			<div class="opaque" style="padding: 30px; left: 0px;">
				<p style="font: 50px 'Montserrat'; margin-bottom: 0px; line-height: 50px;">090515</p>
				<p>University of Melbourne</p><br>
				<p>CV and Job Interview Simulation Seminar by Superstar Education</p>
				<p style="font-family: 'Open Sans';">READ MORE</p>
			</div>
		</a>
		<a href="/events/premiere" class="one_half-margin-20 event-entry column-last">
			<img src="/img/logo/premiere.png" style="width: 90%; padding-top: 50px; left: 5%;">
			<div class="opaque" style="padding: 30px; left: 0px;">
				<p style="font: 50px 'Montserrat'; margin-bottom: 0px; line-height: 50px;">150515</p>
				<p>University of Melbourne</p><br>
				<p>A Little Inspiration, Towards a Better Nation</p>
				<p style="font-family: 'Open Sans';">READ MORE</p>
			</div>
		</a>
		<div class="clear"></div>
		<a href="/PreEvents/register" target="blank" class="one_half-margin-20 event-book">Book Now</a>
		<a href="https://www.eventbrite.com/e/the-premiere-indonesian-career-expo-2015-tickets-16533323616" target="blank" class="one_half-margin-20 event-book column-last">Book Now</a>
		<a href="/events/expo" class="one_half-margin-20 event-entry">
			<img src="/img/logo/expo.png" style="width: 90%; padding-top: 50px; left: 5%;">
			<div class="opaque" style="padding: 30px; left: 0px;">
				<p style="font: 50px 'Montserrat'; margin-bottom: 0px; line-height: 50px;">160515</p>
				<p>State Library of Victoria</p><br>
				<p>Take the Real Steaps, Meet the Professionals, <br>and Build the Network.</p>
				<p style="font-family: 'Open Sans';">READ MORE</p>
			</div>
		</a>
		<a href="/events/insight-dinner" class="one_half-margin-20 event-entry column-last">
			<img src="/img/logo/insight-dinner.png">
			<div class="opaque" style="padding: 30px; left: 0px;">
				<p style="font: 50px 'Montserrat'; margin-bottom: 0px; line-height: 50px;">160515</p>
				<p>YUZU Restaurant</p><br>
				<p>An Exclusive Networking Session with the Representatives</p>
				<p style="font-family: 'Open Sans';">READ MORE</p>
			</div>
		</a>
		<div class="clear"></div>
		<a href="https://www.eventbrite.com/e/the-expo-indonesian-career-expo-2015-tickets-16183652741" target="blank" class="one_half-margin-20 event-book">Book Now</a>
		<a href="https://www.eventbrite.com/e/insight-dinner-indonesian-career-expo-2015-tickets-16533356715" target="blank" class="one_half-margin-20 event-book column-last">Buy Ticket $15</a>
		<div class="clear"></div>
	</div>
</div>

<div class="platinum-sponsors" style="padding: 70px 0px; border-bottom: 5px solid #ECECEC;">
	<div class="normal-width" align="center">
		<h2 style="">Platinum Sponsors</h2>
		<ul>
			<li style="width: 44%;"><img src="/img/logo/ANZ.png"></li>
			<li style="width: 55%;"><img src="/img/logo/permata.png"></li>
		</ul>
	</div>
</div>
<div class="gold-sponsors" style="padding: 70px 0px;">
	<div class="normal-width" align="center">
		<h2>Gold Sponsors</h2>
		<ul>
			<li style="width: 50%;"><img src="/img/logo/commonwealth.png"></li>
			<li style="width: 35%;"><img src="/img/logo/sctv.png"></li>
			<li style="width: 50%;"><img src="/img/logo/axa.png"></li>
		</ul>
	</div>
</div>

<div class="medpar" style="padding: 70px 0px; background: #F4F1F6;">
	<div class="normal-width" align="center">
		<h2>Media Partners</h2>
		<ul>
			<li style="width: 20%;"><img src="/img/logo/medpar/buset.png"></li>
			<li style="width: 20%;"><img src="/img/logo/medpar/ozip.png"></li>
			<li style="width: 20%;"><img src="/img/logo/medpar/indopost.png"></li>
			<li style="width: 20%;"><img src="/img/logo/medpar/kopitoebruk.png"></li>
			<li style="width: 20%;"><img src="/img/logo/medpar/meld.png"></li>
			<li style="width: 20%;"><img src="/img/logo/medpar/perspektif.png"></li>
			<li style="width: 20%;"><img src="/img/logo/medpar/radioppid.png"></li>
			<li style="width: 20%;"><img src="/img/logo/medpar/radioppia.png"></li>
			<li style="width: 20%;"><img src="/img/logo/medpar/aktivis.png"></li>
			<li style="width: 20%;"><img src="/img/logo/medpar/cicak2.png"></li>
			<li style="width: 20%;"><img src="/img/logo/medpar/republika.png"></li>
			<li style="width: 20%;"><img src="/img/logo/medpar/aiya.png"></li>
		</ul>
	</div>
</div>

<script>
	// 2. This code loads the IFrame Player API code asynchronously.
	var tag = document.createElement('script');

	tag.src = "https://www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	// 3. This function creates an <iframe> (and YouTube player)
	//    after the API code downloads.
	var player;
	function onYouTubeIframeAPIReady() {
		player = new YT.Player('player', {
			height: '500',
			width: '800',
			videoId: 'SMsBIFS3AOY',
			events: {
				//'onReady': onPlayerReady,
				'onStateChange': onPlayerStateChange
			}
		});
	}

	// 4. The API will call this function when the video player is ready.
	/*function onPlayerReady(event) {
		event.target.playVideo();
	}*/

	// 5. The API calls this function when the player's state changes.
	//    The function indicates that when playing a video (state=1),
	//    the player should play for six seconds and then stop.
	var playing = false;
	function onPlayerStateChange(event) {
		if (event.data == YT.PlayerState.PLAYING && !playing) {
			$('#featured').carousel('pause');
			playing = true;
		} else if ( (event.data == YT.PlayerState.ENDED || event.data == YT.PlayerState.PAUSED) && playing) {
			$('.carousel').carousel({
				pause: false,
				interval: false
			});
			playing = false;
		}
	}
	function stopVideo() {
		player.stopVideo();
	}
</script>



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
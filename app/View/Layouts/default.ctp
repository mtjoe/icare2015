<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $this->fetch('title')." - Indonesian Career Expo"; ?></title>

		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Syncopate' rel='stylesheet' type='text/css'>		
		
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css">

		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

		<?php 
			echo $this->Html->script("base");
			echo $this->fetch('script');
			echo $this->fetch('css');
			echo $this->Html->meta('description', 'Indonesian Career Expo (ICarE) is an event held by Melbourne University Indonesian Student Association (MUISA) which aims to bridge the gap between Indonesian companies and Indonesian students studying in Melbourne. Following the grand success of the first Indonesian Career Expo, MUISA will hold its second Indonesian Career Expo in 2015.'); 
			echo $this->Html->meta(
			    'favicon.ico',
			    '/favicon.ico',
			    array('type' => 'icon')
			);
			echo $this->Html->meta(
			    'keywords',
			    'Indonesian Career Expo, Indonesian Career Expo 2015, ICarE, Melbourne, State Library, Events, 2015'
			);

		?>

	</head>
	<body>
		<!-- NAVIGATION BAR -->
		<?php if ($this->fetch('name') === ''): ?>
			<section class="uncomp" align="center">
				<a href="/index"><img class="uncomp" id="logo" src="/img/logo/icare.png"></a>
				<a onclick="addCompressed()"><span class="nextPage ionicons ion-ios-arrow-down"></span></a>
				<ul class="navibar uncomp normal-width">
					<li id="navi-home" class="uncomp"><a href="/">HOME</a></li>
					<li id="navi-about" class="uncomp"><a href="">ABOUT ▾</a></li>
					<li id="navi-events" class="uncomp"><a href="">EVENTS ▾</a></li>
					<li id="navi-exhibitors" class="uncomp"><a href="">EXHIBITORS</a></li>
					<li id="navi-media" class="uncomp"><a href="/media">MEDIA RELEASE</a></li>
					<li id="navi-contact" class="uncomp"><a href="/contact">CONTACT US</a></li>
					<!-- <li class="uncomp round"><a href="/contact"><span class="ionicons ion-ios-telephone"></span></a></li>
					<li class="uncomp round"><a href=""><span class="ionicons ion-help-circled"></span></a></li> -->
				</ul>
			</section>
		<?php else: ?>
			<section align="center" class="navibar-wrapper">
				<a href="/index"><img id="logo" src="/img/logo/icare.png"></a>
				<ul class="navibar normal-width">
					<li id="navi-home"><a href="/">HOME</a></li>
					<li id="navi-about"><a>ABOUT ▾</a></li>
					<li id="navi-events"><a>EVENTS ▾</a></li>
					<li id="navi-exhibitors"><a href="/exhibitors/list">EXHIBITORS</a></li>
					<li id="navi-media"><a href="/media">MEDIA RELEASE</a></li>
					<li id="navi-contact"><a href="/contact">CONTACT US</a></li>
					<!-- <li class="round"><a href="/contact"><span class="ionicons ion-ios-telephone"></span></a></li>
					<li class="round"><a href=""><span class="ionicons ion-help-circled"></span></a></li> -->
				</ul>
			</section>
		<?php endif; ?>

		<!-- SUB-NAVIGATION BAR -->
		<div class="subnavbar" <?php if ($this->fetch('name') === ''): echo "hidden"; endif; ?>>
			<div id="sub-about" class="subnavbar-entry" hidden>
				<div class="opaque"></div>
				<div class="opaque-text normal-width" align="center">
					<a href="/about/index">
						<div class="submenu">
							<img src="/img/logo/icare-small.png" style="height: auto; width: 70%; bottom: 15px; left: 15px;">
						</div>
						<h5>ICarE 2015</h5>
					</a>
					<a href="/about/icare2014">
						<div class="submenu">
							<img src="/img/logo/icare2014.png" style="height: auto; width: 80%; bottom: 40px; left: 15px;">
						</div>
						<h5>ICarE 2014</h5>
					</a>

					<a href="/about/ppia">
						<div class="submenu">
							<img src="/img/logo/ppia.png" style="height: auto; width: 80%; bottom: 15px; left: 15px;">
						</div>
						<h5>PPIA Unimelb</h5>
					</a>
				</div>
			</div>
			<div id="sub-events" class="subnavbar-entry" hidden>
				<div class="opaque"></div>
				<div class="opaque-text normal-width" align="center">
					<a href="/events/schedule">
						<div class="submenu" style="background: url(/img/subnavbar/schedule.jpg); background-size: cover;"></div>
						<h5>Schedule</h5>
					</a>
					<a href="/events/start-smart">
						<div class="submenu" style="background: url(/img/recap/2.jpg); background-size: cover; background-position: center;"></div>
						<h5>Start Smart</h5>
					</a>
					<a href="/events/premiere">
						<div class="submenu" style="background: url(/img/recap/1.jpg); background-size: cover; background-position: center;"></div>
						<h5>The Premiere</h5>
					</a>
					
					<a href="/events/expo">
						<div class="submenu" style="background: url(/img/recap/7.jpg); background-size: cover; background-position: center;"></div>
						<h5>The Expo</h5>
					</a>
					<a href="/events/insight-dinner">
						<div class="submenu" style="background: url(/img/recap/3.jpg); background-size: cover; background-position: center;"></div>
						<h5>Insight Dinner</h5>
					</a>
				</div>
				
			</div>
		</div>


		<?php echo $this->fetch('content'); ?>

		<!-- FOOTER -->
		<div class="footer">
			<div class="normal-width">
				<div class="one_half">
					<h3>Stay in the loop</h3>
					<div class="social">
						<a id="fb-icon" href="https://www.facebook.com/pages/Indonesian-Career-Expo-ICarE/1475242792754108?notif_t=fbpage_fan_invite" rel="publisher" target="_blank"><span class="ion-social-facebook"></span></a>
						<a id="instagram-icon" href="http://instagram.com/indonesiancareerexpo" rel="publisher" target="_blank"><span class="ion-social-instagram"></span></a>
						<a id="youtube-icon" href="https://www.youtube.com/channel/UCYnS5ws4P3pH_G2cejdMzJg" rel="publisher" target="_blank"><span class="ion-social-youtube"></span></a>
						<div class="clear"></div>
					</div>
				</div>
				<div class="one_half column-last">
					<!-- Begin MailChimp Signup Form -->
					<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
					<style type="text/css">
						#mc_embed_signup{ font:14px Helvetica,Arial,sans-serif; }
						/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
						   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
					</style>
					<div id="mc_embed_signup">
					<form action="//indonesiancareerexpo.us9.list-manage.com/subscribe/post?u=94b9329339267616c25c24300&amp;id=2fc071f8fd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate align="right">
					    <div id="mc_embed_signup_scroll">
						<h3 for="mce-EMAIL">Subscribe to our mailing list</h3>
						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email" required><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style="background:#98D0AB;">
					    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;"><input type="text" name="b_94b9329339267616c25c24300_2fc071f8fd" tabindex="-1" value=""></div>
					    <div class="clear"></div>
					    </div>
					</form>
					</div>
					<!--End mc_embed_signup-->
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</body>
</html>

<script type="text/javascript">
	/**** One-Page Scrolling ****/
	$(window).bind('mousewheel DOMMouseScroll', function(event) {
		if ( $("section").hasClass("uncomp") ) {
			var delta = event.originalEvent.wheelDelta || -event.originalEvent.detail;
			if (delta < 0) {
				event.preventDefault();
				addCompressed();
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
</script>
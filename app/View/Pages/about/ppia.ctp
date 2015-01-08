<?php 
	$this->assign('title', 'About MUISA - ICarE');
	$this->assign('name', 'muisa');
	echo $this->Html->css("empty");
?>

<style type="text/css">

	.social-ppia .one_fifth {
		text-align: center !important;
		padding-left: 40px;
	}
	.social-ppia #web-icon {
		border: 2px solid grey;
		color: grey;
	}
	.social-ppia #fb-icon {
		border: 2px solid #425E9C;
		color: #425E9C;
	}
	.social-ppia #instagram-icon {
		border: 2px solid #2D6991;
		color: #2D6991;
	}

	.social-ppia #twitter-icon {
		border: 2px solid #55ACEE;
		color: #55ACEE;
	}

	.social-ppia #youtube-icon {
		border: 2px solid #CC181E;
		color: #CC181E;
	}
</style>

<div class="content-container normal-width" align="center">
	<img src="/img/logo/ppia.png">
	<img src="/img/aboutus.png" style="width: 100%;">

	<div class="smallest-width social-ppia" align="center">
		<div class="one_fifth">
			<a id="web-icon" href="http://www.ppia-unimelb.org" rel="publisher" target="_blank"><span class="ion-ios-world"></span></a>
		</div>
		<div class="one_fifth">
			<a id="fb-icon" href="https://www.facebook.com/ppia.unimelb" rel="publisher" target="_blank"><span class="ion-social-facebook"></span></a>
		</div>
		<div class="one_fifth">
			<a id="instagram-icon" href="http://instagram.com/ppiaunimelb" rel="publisher" target="_blank"><span class="ion-social-instagram"></span></a>
		</div>
		<div class="one_fifth">
			<a id="twitter-icon" href="https://twitter.com/ppiaunimelb" rel="publisher" target="_blank"><span class="ion-social-twitter"></span></a>
		</div>
		<div class="one_fifth column-last">
			<a id="youtube-icon" href="https://www.youtube.com/user/ppiamelu" rel="publisher" target="_blank"><span class="ion-social-youtube"></span></a>
		</div>
		<div class="clear"></div>
	</div>
</div>
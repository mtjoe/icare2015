<?php 
	$this->assign('title', 'The Expo');
	$this->assign('name', 'expo');
	$this->Html->css(array("style", "events"), array('inline' => false));
	$this->Html->script(array("modernizr", "main", "expo", "events"), array('inline' => false));
?>

<style type="text/css">
	.goto-seminar h1 { color: #A94E64 }
	/*.goto-seminar h1:hover { color: #813B4E !important; }*/


	.btn-register.disabled { background: #A5A5A5; cursor: default; }
	.btn-register.disabled:hover { background: #A5A5A5; }

	.sem {
		background: #E33A70;
		padding: 30px;
		min-height: 350px;
	}
	.sem h1, .sem h4, .sem p {
		color: white;
		margin: 0px;
	}

	.sem p {
		font-size: 15px;
	}


	.btn-sem {
		position: absolute;
		bottom: 20px;
		right: 20px;
		padding: 10px 40px;
		color: white;
		background: #E393AB;
		font-size: 15px;
		transition: all 0.3s ease 0s;
	}

	.btn-sem:hover {
		color: white;
		text-decoration: none;
		background: #769DC4;
	}
</style>

<div class="content-container">
	<div class="normal-width">
		<div align="center" style="padding: 0px 0px 200px 0px;">
			<a href="/events/expo" style="float: left" class="bold ">< Back to Expo</a>
			<p style="float: right" class="bold">Seminar 1</p>
			<div class="clear"></div>
			<h1 style="font-size: 60px; color: #E33A70; border-top: 5px solid #E33A70; border-bottom: 5px solid #E33A70; margin-top: 0px;">We Connect You to Your World of Opportunity</h1>
			<p style="vertical-align: middle;"><b>By</b> <img src="/img/logo/ANZ.png" style="width: 200px;"></p>
			<br>
		</div>
	</div>

	<!-- TIME & DATE -->
	<div class="setting" style="background: #E1E0EA; padding: 20px 0px; width: 100%;">
		<div class="normal-width">
			<!-- DATE -->
			<div class="date" style="width: 30%; float: left; padding-right: 20px;" align="right">
				<p>16 MAY</p>
				<p>2015</p>
			</div>

			<!-- LOCATION -->
			<div class="loc" style="width: 45%; float: left; padding-left: 20px; border-left: 1px solid #D1CEDB;">
				<p class="bold">12.30 PM - 1.30 PM</p>
				<p>Note: This event is a part of <a href="/events/expo">Expo</a></p><br>
 				<p>Seminar Room 1, <a href="https://www.google.com.au/maps/place/State+Library+of+Victoria/@-37.809809,144.96519,17z/data=!3m1!4b1!4m2!3m1!1s0x6ad642cb954b1ce9:0xf187674ba9830e78" target="blank">State Library of Victoria</a></p>
				<p>328 Swanston Street</p>
			</div>
			<div style="width: 25%; float: left;">
				<a href="http://www.eventbrite.com/e/seminar-by-anz-we-connect-you-to-your-world-of-opportunity-indonesian-career-expo-2015-tickets-16613773243" target="blank" class="btn-register btn-top" style="padding: 35px 10px !important;">
					<p style="line-height: 25px;">REGISTER</p>
				</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	
	

	<div class="normal-width synopsis" style="padding: 50px 0px;">
		<div class="three_fifth">
			<p>ANZ has a close and longstanding relationship with Indonesia. Starting from 1973 when we first came to Indonesia up until now, we have shown commitment to invest and grow here. We realize that our most important asset is our employee, hence we provide opportunities for them to grow and develop to be the best version of themselves. One of the programs we provided is the EVP campaign. </p>
		</div>
		<div class="two_fifth column-last">
			<div class="obj-entry">
				<p>ANZ history in Indonesia</p>
			</div>
			<div class="obj-entry">
				<p>Vision, Mission, Goal</p>
			</div>
			<div class="obj-entry">
				<p>What is EVP Campaign?</p>
			</div>
			<div class="obj-entry">
				<p>Opportunities at ANZ Indonesia</p>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<div class="normal-width" style="margin-bottom: 100px;">
		<div class="speakers">
			<h2 style="font-size: 40px; margin-bottom: 20px;">Introducing the Speakers</h2>
			<div class="speaker-wrapper" style="border-bottom: 5px solid #91B876;">
				
				<a class="one_third" data-toggle="modal" data-target="#desc-iputra">
					<img class="prem-speaker" src="/img/speakers/iputra.jpg">
					<div class="opaque"></div>
					<div class="prem-speaker-name">
						<p>Irwan Indra Putra<br><span style="font: 9px Montserrat;">Head of Recruitment Team, ANZ Bank</span></p>
						<p>Read More</p>
					</div>
				</a>

				<a class="one_third" data-toggle="modal" data-target="#desc-iharjo">
					<img class="prem-speaker" src="/img/speakers/iharjo.jpg">
					<div class="opaque"></div>
					<div class="prem-speaker-name">
						<p>Ilona Harjo<br><span style="font: 9px Montserrat;">Recruitment for Operations &amp; Tech, ANZ Bank</span></p>
						<p>Read More</p>
					</div>
				</a>

				<a class="one_third column-last" data-toggle="modal" data-target="#desc-ssugiana">
					<img class="prem-speaker" src="/img/speakers/ssugiana.jpg" style="height: 100%;">
					<div class="opaque"></div>
					<div class="prem-speaker-name">
						<p>Samy Sugiana<br><span style="font: 9px Montserrat;">HR Project Manager, ANZ Bank</span></p>
						<p>Read More</p>
					</div>
				</a>
				<div class="clear"></div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="desc-iputra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h2 style="font-size: 30px;">Irwan Indra Putra</h2><br>
					<p>Graduated from Universitas Indonesia and The University of Queensland for Double Degree in Psychology, Irwan brings 8 years of extensive experience in recruitment. Starting from junior position in ANZ Indonesia, Irwan is currently heading the Recruitment Team and specializing in Institutional &amp; Enablement area. </p>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="desc-iharjo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h2 style="font-size: 30px;">Ilona Harjo</h2><br>
					<p>Graduated from Universitas Indonesia in Clinical Psychology, Ilona joins ANZ Indonesia in Service Department handling Training &amp; Mass Recruitment. She then had an opportunity to join HR Department and been handling Recruitment for Operations &amp; Technology area ever since. </p>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="desc-ssugiana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h2 style="font-size: 30px;">Samy Sugiana</h2><br>
					<p>Graduated from University of Melbourne in Master of Business &amp; Information Technology, Samy started his career in 2011 as a Technology graduate program in ANZ Melbourne. Throughout his journey at ANZ, he has done roles in delivery, support, engagement and strategy and enterprise architecture. Currently he is working as HR Project Manager in ANZ Indonesia as part of International Mobility Program.</p>
				</div>
			</div>
		</div>
	</div>
</div>

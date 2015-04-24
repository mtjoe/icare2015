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
	}
	.sem h1, .sem h4, .sem p {
		color: white;
		margin: 0px;
	}
</style>

<div class="content-container">
	<div class="normal-width">
		<div align="center" style="padding: 0px 0px 170px 0px;">
			<h1 style="font: 140px Syncopate; padding: 20px 10px 0px 10px; line-height: 120px; display:inline-block; border: 10px solid #273486;" align="left">THE EXPO</h1>
			<!-- <div class="one_half sem" align="left">
				<p style="position: absolute; right: 5px; top: 5px;">Seminar 1</p>
				<h1>What's Next?</h1>
				<h4><i>By Permata Bank</i></h4>
			</div>
			<div class="one_half column-last sem" align="left">
				<p style="position: absolute; right: 5px; top: 5px;">Seminar 1</p>
				<h1>What's Next?</h1>
				<h4><i>By Permata Bank</i></h4>
			</div> -->

			<div class="goto-seminar"><h1  class="goto-seminar" style="margin-bottom: 50px; display: inline-block;">+ SEMINARS</h1></div>
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
			<div class="loc" style="width: 35%; float: left; padding-left: 20px; border-left: 1px solid #D1CEDB;">
				<p class="bold">10.00 AM - 2.00 PM</p><br>
 				<p>Courtyard, <a href="https://www.google.com.au/maps/place/State+Library+of+Victoria/@-37.809809,144.96519,17z/data=!3m1!4b1!4m2!3m1!1s0x6ad642cb954b1ce9:0xf187674ba9830e78" target="blank">State Library of Victoria</a></p>
				<p>328 Swanston Street</p>
			</div>
			<div style="width: 35%; float: left;">
				<div style="width: 98%; background: #3C403F; padding: 5px 10px; margin-bottom: 10px;" align="center"><p style="line-height: 25px; font-size: 20px; color: white; margin: 0px;">REGISTRATION</p></div>
				<a href="https://www.eventbrite.com/e/the-expo-indonesian-career-expo-2015-tickets-16183652741" target="blank" class="btn-register btn-top one_third-no-margin" style="padding: 15px 10px !important; width: 32% !important; margin-right: 1%;">
					<p style="font-size: 15px;">EXPO</p>
				</a>
				<a target="blank" class="btn-register btn-top one_third-no-margin disabled" style="padding: 15px 10px !important; width: 32% !important; margin-right: 1%;">
					<p style="font-size: 15px;">Seminar 1</p>
				</a>
				<a target="blank" class="btn-register btn-top one_third-no-margin disabled" style="padding: 15px 10px !important; width: 32% !important; margin-right: 1%;">
					<p style="font-size: 15px;">Seminar 2</p>
				</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	
	

	<div class="normal-width synopsis" style="padding: 50px 0px;">
		<div class="three_fourth">
			<p class="bold">Our second Indonesian Career Expo is back in Melbourne!</p><br>
			<p>With positive feedbacks and abundant improvements, Indonesian Career Expo 2015 will be held to accommodate companies and students onto one space, allowing for new interactions, career channelling advices and job applications. With Indonesia’s growing population and surging levels of GDP growth, the need for human resources is increasing in Indonesia. Being able to help Indonesia with the education learnt overseas would escalate the quality of work and talent pool of people for Indonesia’s long run wellbeing.</p><br>
			<h2>SEMINARS</h2>

			<p>As part of the Indonesian Career Expo, seminars will run throughout the expo, bringing participants first-hand information and detail of the working culture and other various topics on specific companies. It is important that participants are able to learn what goes internally as well as externally in the company that they wish to participate at what better way to do so through experiencing the seminar series in ICarE 2015!</p>

			<p class="bold">More info on seminars coming soon! Subscribe to our mailing list to get updates.</p>
		</div>
		<div class="one_fourth column-last">
			<div class="obj-entry">
				<p>Meet first-hand with company representatives from various industries</p>
			</div>
			<div class="obj-entry">
				<p>Satisfying the needs of companies for recruiting talented candidates</p>
			</div>
			<div class="obj-entry">
				<p>Satisfying the needs of students for career development</p>
			</div>
			<div class="obj-entry">
				<p>Company business culture ad activities</p>
			</div>
			<div class="obj-entry">
				<p>Work and internship opportunities</p>
			</div>
			<div class="obj-entry">
				<p>What companies looks for</p>
			</div>
		</div>
		<div class="clear"></div>
	</div>


	<!-- TIMELINE -->
	<div style="background: #E9F0F5;"> 
		<div style="width: 100%; background: #F6C8CD; padding: 30px 0px;" align="center">
			<h2>Expo Registration Opens <span style="color: #676767;">10.00 AM</span></h2>
		</div>
		<div class="normal-width">

			<section id="cd-timeline">
				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Welcoming Note</h2>
						<span class="cd-date">10.15 AM</span>
					</div>
				</div>
				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Expo Officially Opens</h2>
						<span class="cd-date">10.30 AM</span>
					</div>
				</div>
				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Seminar 1 by ANZ Bank - TBA</h2>
						<span class="cd-date">12.30 PM - 1.30 PM</span>
					</div>
				</div>
				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Panel</h2>
						<span class="cd-date">2.00 PM - 2.30 PM</span>
					</div>
				</div>
				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Seminar 2 by Permata Bank - <br>"What's Next?"</h2>
						<span class="cd-date">2.30 PM - 3.30 PM</span>
					</div>
				</div>
				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Performances</h2>
						<span class="cd-date">3.30 PM - 4.30 PM</span>
					</div>
				</div>
				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Registration Closes</h2>
						<span class="cd-date">4.30 PM</span>
					</div>
				</div>
				<div class="clear"></div>
			</section>
		</div>
		<div style="width: 100%; background: #F6C8CD; padding: 30px 0px;" align="center">
			<h2>Expo Officially Closes <span style="color: #676767;">5.00 PM</span></h2>
		</div>
	</div>
</div>
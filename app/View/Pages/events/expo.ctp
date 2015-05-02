<?php 
	$this->assign('title', 'The Expo');
	$this->assign('name', 'expo');
	$this->Html->css(array("style", "events"), array('inline' => false));
	$this->Html->script(array("modernizr", "main", "expo"), array('inline' => false));
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

	.setting.fixed {
		position: fixed;
		top: 0px;
	}

	.setting:not(.fixed) {
		position: absolute;
		top: 900px;
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
		<div align="center" style="padding: 0px 0px 550px 0px;">
			<h1 style="font: 140px Syncopate; padding: 20px 10px 0px 10px; line-height: 120px; display:inline-block; border: 10px solid #273486; margin-bottom: 40px;" align="left">THE EXPO</h1>
			<div style="width: 904px;">
				<div class="one_fifth">
					<h1 style="font-size: 150px;">+</h1>
				</div>
				<div class="two_fifth sem" align="left">
					<p style="position: absolute; right: 5px; top: 5px;">Seminar 1</p>
					<h1 style="font-size: 30px;">We Connect You to Your World of Opportunity</h1>
					<h4><i>By ANZ Bank</i></h4><br>
					<p>Seminar Room 1, State Library of Victoria</p>
					<p class="bold">12.30 PM - 1.30 PM</p>
					<a href="/events/anz-seminar" class="btn-sem">READ MORE</a>
				</div>
				<div class="two_fifth column-last sem" align="left">
					<p style="position: absolute; right: 5px; top: 5px;">Seminar 2</p>
					<h1 style="font-size: 30px;">What's Next?</h1>
					<h4><i>By Permata Bank</i></h4><br>
					<p>Seminar Room 1, State Library of Victoria</p>
					<p class="bold">2.30 PM - 3.30 PM</p>
					<a href="/events/permata-seminar" class="btn-sem">READ MORE</a>
				</div>
			</div>

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
				<p class="bold">10.30 AM - 5.00 PM</p><br>
 				<p>Courtyard, <a href="https://www.google.com.au/maps/place/State+Library+of+Victoria/@-37.809809,144.96519,17z/data=!3m1!4b1!4m2!3m1!1s0x6ad642cb954b1ce9:0xf187674ba9830e78" target="blank">State Library of Victoria</a></p>
				<p>328 Swanston Street</p>
			</div>
			<div style="width: 35%; float: left;">
				<div style="width: 98%; background: #3C403F; padding: 5px 10px; margin-bottom: 10px;" align="center"><p style="line-height: 25px; font-size: 20px; color: white; margin: 0px;">REGISTRATION</p></div>
				<a href="https://www.eventbrite.com/e/the-expo-indonesian-career-expo-2015-tickets-16183652741" target="blank" class="btn-register btn-top one_third-no-margin" style="padding: 15px 10px !important; width: 32% !important; margin-right: 1%;">
					<p style="font-size: 15px;">EXPO</p>
				</a>
				<a href="http://www.eventbrite.com/e/seminar-by-anz-we-connect-you-to-your-world-of-opportunity-indonesian-career-expo-2015-tickets-16613773243" target="blank" class="btn-register btn-top one_third-no-margin" style="padding: 15px 10px !important; width: 32% !important; margin-right: 1%;">
					<p style="font-size: 15px;">Seminar 1</p>
				</a>
				<a href="https://www.eventbrite.com/e/seminar-by-permata-bank-whats-next-indonesian-career-expo-2015-tickets-16614064113" target="blank" class="btn-register btn-top one_third-no-margin" style="padding: 15px 10px !important; width: 32% !important; margin-right: 1%;">
					<p style="font-size: 15px;">Seminar 2</p>
				</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	
	

	<div class="normal-width synopsis" style="padding: 50px 0px;">
		<div class="three_fourth">
			<br><p class="bold">Our second Indonesian Career Expo is back in Melbourne!</p><br>
			<p>With positive feedbacks and abundant improvements, Indonesian Career Expo 2015 will be held to accommodate companies and students onto one space, allowing for new interactions, career channelling advices and job applications. With Indonesia’s growing population and surging levels of GDP growth, the need for human resources is increasing in Indonesia. Being able to help Indonesia with the education learnt overseas would escalate the quality of work and talent pool of people for Indonesia’s long run wellbeing.</p><br><br>
			<h2>SEMINARS</h2><br>

			<p>As part of the Indonesian Career Expo, seminars will run throughout the expo, bringing participants first-hand information and detail of the working culture and other various topics on specific companies. It is important that participants are able to learn what goes internally as well as externally in the company that they wish to participate at what better way to do so through experiencing the seminar series in ICarE 2015!</p>
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
						<h2>Seminar 1 by ANZ Bank - <br>"We Connect You to Your World of Opportunity"</h2>
						<br><a href="/events/anz-seminar">Read More ></a>
						<span class="cd-date">12.30 PM - 1.30 PM</span>
					</div>
				</div>
				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Panel</h2>
						<p>Ask questions to all our representatives. They will be on stage to answer all your questions and discuss what differences would you expect to get from different companies.</p>
						<span class="cd-date">2.00 PM - 2.30 PM</span>
					</div>
				</div>
				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Seminar 2 by Permata Bank - <br>"What's Next?"</h2>
						<br><a href="/events/permata-seminar">Read More ></a>
						<span class="cd-date">2.30 PM - 3.30 PM</span>
					</div>
				</div>
				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Performances by Felicia Kok and Friends.</h2>
						<p></p>
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

<script type="text/javascript">
	
prevFixed = false;

function goto(id) {
	$("html, body").animate({ 'scrollTop': $("#" + id).offset().top }, 500);
	updatePosition(false);
}


function updatePosition(initial) {
	if ( window.pageYOffset > 900 )		{ fixed = true; }
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

</script>
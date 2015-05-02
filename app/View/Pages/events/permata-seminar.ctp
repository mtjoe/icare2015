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
			<p style="float: right" class="bold">Seminar 2</p>
			<div class="clear"></div>
			<h1 style="font-size: 100px; color: #E33A70; border-top: 5px solid #E33A70; border-bottom: 5px solid #E33A70; margin-top: 0px;">What's Next?</h1>
			<p style="vertical-align: middle;"><b>By</b> <img src="/img/logo/permata.png" style="width: 200px;"></p>
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
				<p class="bold">2.30 PM - 3.30 PM</p>
				<p style="font-size: 13px; margin-bottom: 10px;">Note: This event is a part of <a href="/events/expo">The Expo</a></p>
 				<p>Seminar Room 1, <a href="https://www.google.com.au/maps/place/State+Library+of+Victoria/@-37.809809,144.96519,17z/data=!3m1!4b1!4m2!3m1!1s0x6ad642cb954b1ce9:0xf187674ba9830e78" target="blank">State Library of Victoria</a></p>
				<p>328 Swanston Street</p>
			</div>
			<div style="width: 25%; float: left;">
				<a href="https://www.eventbrite.com/e/seminar-by-permata-bank-whats-next-indonesian-career-expo-2015-tickets-16614064113" target="blank" class="btn-register btn-top" style="padding: 35px 10px !important;">
					<p style="line-height: 25px;">REGISTER</p>
				</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	
	

	<div class="normal-width synopsis" style="padding: 50px 0px;">
		<div class="three_fourth">
			<p class="bold">PermataBank, menjadikan hidup lebih bernilai</p>
			<p>Sooner or later you will graduate, one of the special moment in your life that worth to celebrate. You will make your parents proud and you get excited with the new chapter in your life. At the same time you might feel insecure, questioning many things and ended up with one question, What’s Next? A simple question that lead to deep thoughts about your life. </p>
			<p>What we are going to share will challenge your paradigm to see a life after college and a different perspective on how should we view a company. Your life after graduates will commonly focus on proving yourself and others that you have skills and knowledge that would enable you to be financially independent. But, is that enough to give you energy and excitement to live your life? Is that the reason that makes life after college become special?  </p>
			<p>Moreover, it has never been easy to make a decision in life, but it doesn’t mean that we can’t help our self to decide what’s best for our life. It starts from your understanding about yourself and eagerness to improve continuously, it requires an open eye that able to see opportunities around you, and it needs a valuable friends and network who are willing to support you.</p>  
			<p>You are free to ignore the “What’s Next” question and take it lightly, but you can’t run from consequences of your decision. On the other hand, if you choose to spend your time and energy to answer the “What’s Next” question earlier, come and meet us at ICare seminar on Saturday, May 16, 2015 at 2.30 pm. </p>
		</div>
		<div class="one_fourth column-last">
			<div class="obj-entry">
				<p>Life Design Concept</p>
			</div>
			<div class="obj-entry">
				<p>Frame decision making process when choosing your next journey after graduated</p>
			</div>
			<div class="obj-entry">
				<p>Identify your Values, Life Purpose, Interest and Strength</p>
			</div>
			<div class="obj-entry">
				<p>Opportunities at Permata Bank</p>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<div class="normal-width" style="margin-bottom: 100px;">
		<div class="speakers">
			<h2 style="font-size: 40px; margin-bottom: 20px;">Introducing the Speakers</h2>
			<div class="speaker-wrapper" style="border-bottom: 5px solid #91B876;">
				
				<a class="one_half" data-toggle="modal" data-target="#desc-samarta">
					<img class="prem-speaker" src="/img/speakers/samarta.jpg">
					<div class="opaque"></div>
					<div class="prem-speaker-name">
						<p>Samuel Pandu Amarta<br><span style="font: 13px Montserrat;">Employer Branding Strategist, Permata Bank</span></p>
						<p>Read More</p>
					</div>
				</a>

				<a class="one_half column-last" data-toggle="modal" data-target="#desc-ikoes">
					<img class="prem-speaker" src="/img/speakers/ikoes.jpg">
					<div class="opaque"></div>
					<div class="prem-speaker-name">
						<p>Indri K. Hidayat<br><span style="font: 13px Montserrat;">Director of Human Resource, Permata Bank</span></p>
						<p>Read More</p>
					</div>
				</a>
				<div class="clear"></div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="desc-samarta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h2 style="font-size: 30px;">Samuel Pandu Amarta</h2><br>
					<p>Graduated from faculty of Economics, University of Indonesia. Started his career in AIESEC Indonesia, a youth-global organization, as Vice President of External Relation. To fulfill his passion on people and organization development, in 2010 he took the opportunity to work in PermataBank. As the result, he had recruited more than 400 fresh graduates, awarded as top 10 best individual performers, and currently responsible for PermataBank’s employer branding strategy and its implementation all across Indonesia.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="desc-ikoes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h2 style="font-size: 30px;">Indri K. Hidayat</h2><br>
					<p>Indri K. Hidayat has been in a Director of Human Resource for 19 years. Her professional career started when she joined IBM Indonesia on 1982. She had several different Human Resource positions at PT Freeport Indonesia. Her 19-years experience of being a Director of Human Resource started on 1995 at PT Keramika Indonesia Asosiasi Tbk. She continued and maintained the position of Human Resource Director at CitiBank N.A and Dexa Medica Group. This year is the 6th year Indri K. Hidayat has been the Director of Human Resource at PermataBank. Many innovative development programs have been invented and implemented during her leadership in PermataBank such as Emerging Leader Acceleration Program (ELAP), which combines Performing Arts and Cinematic with a Leadership Module for first-line managers. Other programs that invented include Graduates Management Acceleration Program (GMAP), Middle Manager Acceleration Program (MMAP) and Executive Development Program (EDP).</p>
				</div>
			</div>
		</div>
	</div>

</div>

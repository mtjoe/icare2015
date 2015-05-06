<?php 
	$this->assign('title', 'The Premiere');
	$this->assign('name', 'premiere');
	$this->Html->css(array("style", "events"), array('inline' => false));
	$this->Html->script(array("modernizr", "main", "events"), array('inline' => false));
?>


<div class="content-container">
	<div class="normal-width">
		<div align="center" style="padding: 50px 0px 150px 0px;">
			<h1 style="color: black; font: 100px Montserrat; margin-bottom: 20px; border-top: 5px solid #A19E9E; border-bottom: 5px solid #A19E9E; font-weight: 400;margin-bottom: 50px;">The Premiere</h1>
			<p class="bold">A Little Inspiration, Towards a Better Nation</p><br><br>
		</div>
	</div>

	<!-- TIME & DATE -->
	<div class="setting" style="background: #E1E0EA; padding: 20px 0px; width: 100%;">
		<div class="normal-width">
			<!-- DATE -->
			<div class="date" style="width: 30%; float: left; padding-right: 20px;" align="right">
				<p>15 MAY</p>
				<p>2015</p>
			</div>

			<!-- LOCATION -->
			<div class="loc" style="width: 50%; float: left; padding-left: 20px; border-left: 1px solid #D1CEDB;">
					<p class="bold">5.15 PM - 9.00 PM</p><br>
	 				<p>Copland Theatre, <a href="https://www.google.com.au/maps/place/The+Spot/@-37.801582,144.958703,17z/data=!3m1!4b1!4m2!3m1!1s0x6ad65d2d7e8c6a1f:0x12b0e41da2757bbd" target="blank">The Spot</a></p>
					<p>The University of Melbourne</p>
			</div>
			<div style="width: 20%; float: left;">
				<a href="https://www.eventbrite.com/e/the-premiere-indonesian-career-expo-2015-tickets-16533323616" target="blank" class="btn-register btn-top" style="padding: 40px 10px !important;">
					<p style="line-height: 25px;">REGISTER</p>
				</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>


	<div class="synopsis" style="padding: 100px 0px;">
		<div class="normal-width synopsis">
			<div class="three_fifth">
				<p>Indonesia is prominently exceeding expectations in its ability to multiply growth in various aspects. It is currently the largest ASEAN economy with outstanding track record for the past 10 years, both in the political and economic sector (Australian Trade Commission, 2014). It is the economy to be involved in, be it in the consumer goods sector, up until the development and infrastructure sector. With expectation of Indonesia to grow even further in 2015, it is well predicted that the need for quality human resources will keep on rising for the next few years.</p><br>
				<p><span class="bold">The Premiere will mark the opening of the 2015 Indonesian Career Expo, bringing in valued speakers whom have dedicated their life to improving Indonesia through having studied internationally, and coming back home.</span> Why do we as Indonesians have the duty to come back home and improve our nation? How are we going to make a difference in a place where we belong? The Premiere will be the source of answers to bring you back home!</p><br>
			</div>
			<div class="two_fifth column-last">
				<div class="obj-entry">
					<p>Why Indonesia is in need of more human resources</p>
				</div>
				<div class="obj-entry">
					<p>Introduce students to speakers who are experts in their field</p>
				</div>
				<div class="obj-entry">
					<p>Speakers - dedication to provide for Indonesia in one way or another</p>
				</div>
				<div class="obj-entry">
					<p>Ask questions and question viewpoints</p>
				</div>
				<div class="obj-entry">
					<p>Socialize and communicate with fellow students and company representatives post-event</p>
				</div>
				
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div class="normal-width" style="margin-bottom: 100px;">
		<div class="speakers">
			<h2 style="font-size: 40px; margin-bottom: 20px;">Introducing the Speakers</h2>
			<div class="speaker-wrapper" style="border-bottom: 5px solid #91B876;">
				
				<a class="one_third" data-toggle="modal" data-target="#desc-lsuroso">
					<img class="prem-speaker" src="/img/speakers/lsuroso.jpg">
					<div class="opaque"></div>
					<div class="prem-speaker-name">
						<p>Lisa Suroso<br><span style="font: 9px Montserrat;">Co-Founder, doctorSHARE</span></p>
						<p>Read More</p>
					</div>
				</a>

				<a class="one_third" data-toggle="modal" data-target="#desc-satar">
					<img class="prem-speaker" src="/img/speakers/esatar.jpg">
					<div class="opaque"></div>
					<div class="prem-speaker-name">
						<p>Emirsyah Satar<br><span style="font: 9px Montserrat;">Former CEO, Garuda Indonesia</span></p>
						<p>Read More</p>
					</div>
				</a>

				<a class="one_third column-last" data-toggle="modal" data-target="#desc-mhasan">
					<img class="prem-speaker" src="/img/speakers/mhasan.jpg">
					<div class="opaque"></div>
					<div class="prem-speaker-name">
						<p>Maya Hasan &amp; Helen Oglivie</p>
						<p>Read More</p>
					</div>
				</a>
				<div class="two_third" style="width: 65%; margin-top: 25px; margin-bottom: 0px; padding-top: 100px; height: 300px">
					<h1 align="center">Moderated by</h1>
				</div>
				<a class="one_third column-last" data-toggle="modal" data-target="#desc-sdean"  style="margin-top: 25px; margin-bottom: 0px;">
					<img class="prem-speaker" src="/img/speakers/sdean.jpg">
					<div class="opaque"></div>
					<div class="prem-speaker-name">
						<p>Sri Dean<br><span style="font: 9px Montserrat;">Broadcaster-Journalist, SBS Radio</span></p>
						<p>Read More</p>
					</div>
				</a>
				<div class="clear"></div>
			</div>
			
		</div>
	</div>

	<div class="modal fade" id="desc-lsuroso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h2 style="font-size: 30px;">Lisa Suroso</h2><br><br>
					<p>Lisa Suroso is a co-founder of doctorSHARE with dr. Lie Dharmawan and an avid activist in providing Indonesian communities with no access to medical facilities. Along with other non-profit organizations, doctorSHARE is active in contributing with humanitarian aid since the tsunami, earthquakes and various other natural disasters that battered Indonesia between 2003 and 2010. doctorSHARE is established in 2009 with a focus in providing medical access and nutritional support to communities with limited medical access. This mission is carried out through various programs such as Rumah Sakit Apung (Floating Hospital), Flying Doctors and many more. Lisa’s work focuses on the pilot project of the ‘Floating Hospital’ in Kei Island in the province of Southeast Maluku, Indonesia and ‘Local Sources Empowerment’ for areas in eastern Indonesia. Lisa has always been active in seeking social equality since her days in university and is previously a contributor to an Indonesian publication.</p>
					<p>Graduated from Tarumanagara University (1999), Lisa also pursued multiple degrees such as narrative journalism at George Washington University, USA (2008), volunteer management at Humber College, Canada (2011), social media at Ontario College of Art &amp; Design University, Canada (2013) and certificate in international development at University of British Columbia, Canada (2015). Lisa trusts that all of her educational degrees will aid her in her pursuit of social equality.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="desc-satar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h2 style="font-size: 30px;">Emirsyah Satar</h2><br><br>
					<p>Emirsyah Satar was born in Jakarta, Indonesia on June 28th, 1956. Satar graduated with a Commerce degree from Universitas Indonesia (Univeristy of Indonesia). Satar’s most prominent role was during his time as CEO of Indonesia’s national airline, Garuda Indonesia.</p>
					<p>Satar’s career started when he was still attending university, working as an accountant for PriceWaterhouseCoopers. Following his graduation, he worked as an Assistant of Vice President of Citibank’s Corporate Banking. Satar’s other employment includes Vice CEO at PT Bank Danamon Indonesia and President Director at PT Niaga Factoring Corporation. </p>
					<p>In 2003, Satar left the banking world to join with Garuda Indonesia as their Chief Financial Officer. Then in 2005 he was trusted for the job as CEO, becoming the youngest to have taken up the position. From an airline in crisis when Satar started as the CEO, he was able to turn its fortunes around and establish Garuda Indonesia as a profit-making premium airline. He dramatically improved the airline’s accounts, safety and reputation. </p>
					<p>In an interview, Satar is quoted in saying, “And if Indonesians don't help this country, who will?... Garuda is an Indonesian icon… And I am a proud Indonesian.” His drive to tackle new challenges and help improve Indonesia to be a better country makes him an icon in the corporate world and role-model to many aspiring Indonesians. He was awarded with the 2013 CNBC 2013 Travel Business Leader Award Asia Pacific.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="desc-mhasan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h2 style="font-size: 30px;">Maya Hasan &amp; Helen Oglivie</h2><br><br>
					<p>Maya Hasan established herself as an excellent harp musician and a performer. Hasan attended Willamette University in Oregon, USA taking the degree of Harp Performance. She was involved in The Salem Chambers Orchestra during her time in Oregon. After completing her studies with multiple awards under her belt, she moved to Indonesia. She performed with various classical orchestra groups such as Nusantara Chamber Orchestra, Malaysia Philharmonic Orchestra, and Erwin Gutawa Orchestra, to name a few. In 2000, Hasan released her album, Seabreeze, composed with her musical group she formed called Celtic. Her talent extends to her role as an actress in the big screen production, Koper, released in 2006.</p>
					<p>Helen Dewi Kirana is a veteran in the Indonesian fashion industry with her original and innovative twist to an Indonesian trademark, batik. Her creations are portrayed through her labels, NES and Bi Batik. NES has recently received an award at Inacraft 2015, acknowledging its contribution to the arts and craft community in Indonesia. NES is also exhibited in countries such as Thailand and France, testament of its excellence. Established in 2005, Bi Batik is well-known amongst high-profile individuals. These include David Foster and Friends, various artists and even in beauty pageant competitions such as Miss Indonesia and Miss Universe. Her works is not just fashion to be sold but more of an original creation that influences the Indonesian cloth industry.</p>
					<p>Hasan and Kirana has been best friends since they were in their youths and have collaborated a number of times. Together, they are inspiring many Indonesians and others from around the world within the performing arts and craft industries. Their creations are proof that the Indonesian arts industry plays an important role to showcase the creative and alluring nature of Indonesia.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="desc-sdean" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h2 style="font-size: 30px;">Sri Dean</h2><br><br>
					<p>Sri Dean’s first work experiences were in Indonesia but currently she is the broadcaster-journalist on the SBS Radio Indonesian Program from Melbourne.</p>
					<p>Sri first joined SBS late in 1993, initially as a contributor.  At the same time she was teaching Indonesian at her alma mater, the Australian Defence Force School of Languages.  She then moved to teach at a private secondary school in Melbourne.</p>
					<p>Sri has completed tertiary education at Indonesian and Australian universities, including Melbourne University in fields as diverse as Physical Education, Education (language teaching and literature),  Asian Studies and Journalism.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- TIMELINE -->
	<div style="background: #E9F0F5;"> 
		<div class="normal-width">
			<section id="cd-timeline">
				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Registration Opens</h2>
						<span class="cd-date">5.15 PM</span>
					</div> <!-- cd-timeline-content -->
				</div> <!-- cd-timeline-block -->
			 
				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Opening Speech</h2>
						<span class="cd-date">6.15 PM</span>
					</div> <!-- cd-timeline-content -->
				</div>

				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Speaker 1: Lisa Suroso</h2>
						<span class="cd-date">6.40 PM</span>
					</div> <!-- cd-timeline-content -->
				</div>

				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Speaker 2: Emirsyah Satar</h2>
						<p>Interactive presentation by Indonesia’s national airlines ex-CEO, Emirsyah Satar, as he will share his knowledge and experience working in Indonesia, as he says “And if Indonesians don’t help this country, who will?”.</p>
						<span class="cd-date">6.50 PM</span>
					</div> <!-- cd-timeline-content -->
				</div>
				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Performance by Felicia Lase</h2>
						<p>The dreamy voice of PPIA Got Talent winner, Felicia Lase</p>
						<span class="cd-date">7.00 PM</span>
					</div> <!-- cd-timeline-content -->
				</div>

				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Speaker 3: Maya Hasan &amp; Helen Oglivie</h2>
						<p>Experience first-hand with Indonesia’s number one Harpist, Maya Hasan, and Batik designer, Helen Oglivie, as they share their works of art.</p>
						<span class="cd-date">7.10 PM</span>
					</div> <!-- cd-timeline-content -->
				</div>

				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Speech by AIC</h2>
						<span class="cd-date">7.30 PM</span>
					</div> <!-- cd-timeline-content -->
				</div>

				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Talk Show &amp; Q&amp;A </h2>
						<p>Lead by Sri Dean, SBS Radio Indonesian Program broadcaster-journalist, this session will entice everyone on various values and opinions on our speakers and the audience.</p>
						<span class="cd-date">7.40 PM</span>
					</div> <!-- cd-timeline-content -->
				</div>

				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Closing Speech</h2>
						<span class="cd-date">8.45 PM</span>
					</div> <!-- cd-timeline-content -->
				</div>

				<div class="cd-timeline-block">
					<div class="cd-timeline-img"><span class="ionicons ion-ios-circle-filled"></span></div>
					<div class="cd-timeline-content">
						<h2>Networking Session</h2>
						<p>Refreshments will be prepared for you to get to know more people of various industries and show yourself to the working community.</p>
						<span class="cd-date">9.00 PM</span>
					</div> <!-- cd-timeline-content -->
				</div>
				<div class="clear"></div>
			</section>
		</div>
	</div>
</div>


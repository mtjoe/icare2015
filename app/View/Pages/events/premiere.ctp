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
					<p>When appointed as the President and CEO of Garuda Indonesia in March 2005, Emirsyah Satar became one of the youngest Chief Executive Officers of an airline in the Asia Pacific region.</p>
					<p>He brought into the company a wealth of knowledge in banking and financing. Mr. Satar began his career in the financial industry as an auditor at Price Waterhouse Cooper. He quickly assumed key positions in several multinational companies in Citibank N.A, Jan Darmadi Group, Niaga Finance, Hong Kong and Bank Danamon Tbk.</p>
					<p>In 1998, Emirsyah Satar returned to Indonesia to become EVP Finance (CFO) for Garuda Indonesia. During that time, he played a major role in the airline’s financial restructuring process carried out in 2001, which amounted to US$ 1.8 billion. Thanks to his invaluable banking and finance experience, he was instrumental in helping Garuda Indonesia avoid bankruptcy. In recognition of this achievement he received “Financial Restructuring of the Year” from the New York “Travel Finance” magazine.</p>
					<p>Mr. Satar left the company in early 2003 and was appointed as Deputy CEO of Bank Danamon Tbk (5th largest Indonesian bank at that time). In 2005, he was reappointed by the Indonesian government as the President &amp; CEO of the Garuda Indonesia (flag carrier of Indonesia). Under Emirsyah Satar’s leadership, the airline has been recognized by SkyTrax, a prominent airline rating institution, as ‘the World’s Most Improved Airline 2010’, ‘the World Best Economy Class 2013’, ‘the World’s Best Cabin Crew 2014’, and ranked #7 of ‘the World’s Best Airlines’. Just before he resigned as the CEO in December 2014, Garuda was awarded as one of only 7 airlines in the world whose quality of service is qualified as the five-star airlines.</p>
					<p>Mr. Satar has recently completed his tenure as the Chairman of INACA (IndonesianNational Air Carrier Associations), a member of the Board of Governors of IATA (International Air Transport Association) and the Chairman of the Executive Committee of the AAPA (Association of Asia Pacific Airlines). He is currently a member of the board of commissioners of Bank Muamalat (since 2009), the Senior Advisor of INACA, and the Vice Chairman of Indonesia’s Chamber of Commerce. Mr. Satar is the Orient Aviation Person of the Year 2010 (by Orient Aviation Magazine), Man of the Year 2012 (by Globe Asia Magazine) and Winner of CNBC Travel Business Leader Award 2013 (by CNBC) and recently the Asia Pacific Airline Executive of the Year 2014 (by Center for Asia Pacific Airlines/CAPA). On the environmental front, he is the member of the Board of Trustee of The Nature Conservancy (TNC), an organization which strives to balance the needs of a growing population with those of nature. Mr. Satar is also the ambassador for the ‘Save Our Sharks’ campaign, aimed to educate people about shark conservation.</p>
					<p>Emirsyah Satar received his degree in Accounting from the University of Indonesia andcompleted academic programs at the Sorbonne University in Paris. Mr. Satar is a keen cyclist and is easily spotted riding on his bike in downtown Jakarta and surrounding areas, when he finds spare times on the weekend. He speaks English, French, Spanish in addition to his mother tongue, Bahasa Indonesia.</p>
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


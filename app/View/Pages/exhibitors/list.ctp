<?php 
	$this->assign('title', 'Exhibitors');
	$this->assign('name', 'exhibitors list');
	$this->Html->css("empty", array('inline' => false));
?>

<style type="text/css">
	.content-container h1, 
	.content-container h2 { font-family: "Open Sans"; text-transform: uppercase; font-weight: 700; }
	.comp-bar li {
		display: inline-block;
		margin-top: 10px;
		padding: 5px 25px;
		border-right: 2px solid #000000;
		vertical-align: text-top;
	}

	#comp-bar-wrapper.fixed { position: fixed; top: 0px; }
	#comp-bar-wrapper:not(.fixed) { position: absolute; top: 200px; }
	#comp-bar-wrapper { z-index: 100; }
	.content-container img { z-index: 0; }

	.comp-bar li:last-child { border-right: none; }
	.comp-bar li a { color: white; font-family: "Open Sans"; }
	.comp-bar li a:hover {
		text-decoration: none;
		color: #F0477D;	
	}
	.comp-bar li a.disabled { color: #DDDDDD; cursor: default;}
	.comp-bar li a.disabled:hover { color: #DDDDDD; }

	table { display: table; }
	table td:nth-child(1) { width: 20%; }
	table td:nth-child(2) { width: 78%; }
	table td { 
		padding: 15px;
		background: #F0EDEB;
		margin: 5px;
		border: 4px solid white;
	}
	table td p { line-height: 1.5; }

	.position-title {
		background: #CEEBFF;
		font-size: 20px;
	}
	.video { 
		border-top: 1px solid #FFFFFF;
		border-bottom: 1px solid #FFFFFF;
		padding: 0px 20px 20px 20px;
	}
	.video .one_third-margin-20 {
		padding: 20px;
		background: rgba(255, 255, 255, 0.5);
	}

	.video .ion-play {
		font-size: 40px;
		padding: 10px 8px 10px 12px;
		width: 60px;
		height: 60px;
		border-radius: 30px;
		text-align: center;
		background: rgba(0,0,0, 0.1);
	}

	.video .ion-play:hover {
		background: rgba(0,0,0, 0.4);
	}

	.video .one_third-margin-20 h3 {
		font: 30px Roboto-Lt;
	}
	.video .one_third-margin-20 a { color: black; }

	table td p:last-child { margin-bottom: 0px; }
</style>

<div class="content-container" align="center" style="padding: 0px;">
	<div id="comp-bar-wrapper" style="background: #68CA79; height: 60px; width: 100%;">
		<ul class="normal-width comp-bar">
			<li><a onclick="goto('comp-anz')">ANZ Bank</a></li>
			<li><a onclick="goto('comp-permata')">Permata Bank</a></li>
			<li><a onclick="goto('comp-cl')">Commonwealth Life</a></li>
			<li><a onclick="goto('comp-axa')">AXA</a></li>
			<li><a onclick="goto('comp-sctv')" class="disabled">SCTV</a></li>
		</ul>
	</div>

	<h1 style="padding: 100px 0px 50px 0px;">Our Exhibitors</h1>

	<div id="comp-anz" style="background: #DBD5D9; padding: 50px 0px;" align="left">
		<div class="normal-width">
			<div class="one_half">
				<img src="/img/logo/ANZ.png" style="width: 100%; float: left;">
				<a href="http://www.anz.co.id/Careers" target="blank"><span class="ionicons ion-link" style="font-size: 50px;"></span></a>
			</div>
			<div class="clear"></div>
			<div class=" column-last">
				<table>
					<tbody>
						<tr>
							<td>Preferred Majors</td>
							<td><p>Refer to job listing</p></td>
						</tr>
						<tr>
							<td>Jobs Available</td>
							<td>
								<p>We provide candidates with the opportunity to work in various positions within the banking industry, both in the business and business support areas. We have dynamic and flexible environment that is perfect for those who love challenges and have the willingness to learn. You will have endless opportunities to develop yourself both professionally and personally.</p>

								<p>Due to Indonesia's current legislative requirements, this role is only open to Indonesian nationals.</p>
							</td>
						</tr>

						<tr>
							<td>Location</td>
							<td><p>ANZ Tower – Sudirman, Jakarta, Indonesia</p></td>
						</tr>
						<tr>
							<td>Brief description of company</td>
							<td>
								<p>In 1973, the Australia and New Zealand Banking Group Limited (ANZ Group) first established its presence in Indonesia as the ANZ Grindlays representative office.</p>

								<p>Then, in 1993, ANZ Group took over 85% of Westpac Bank’s shares at the PT Westpac Panin Bank and changed the name into PT ANZ Panin Bank. In 2011, the ownership composition change to 99% owned by the ANZ Group and 1% owned by Panin Bank and changed its name in January 2012 to PT Bank ANZ Indonesia (ANZ). This demonstrated ANZ’s commitment to Indonesia and its customers’ growth. It also reaffirmed the position of ANZ Group as the largest Australian investor in Indonesia’s financial services sector.</p>

								<p>Currently, ANZ has 28 branches spread throughout 11 major cities across Indonesia. ANZ offers a range of products and services for its corporate clients through our Corporate and Commercial Banking, Treasury, Trade Finance and Cash Management services. For individuals, ANZ offers Retail Banking and Wealth Management, Mortgages as well as Consumer Finance services through our Credit Card and Personal Loan products.</p>

								<p>As of October 2013, ANZ is rated AAA (idn) credit rating from Fitch Ratings. ANZ has received many awards, such as the number one joint venture bank in Indonesia from Infobank Magazine and Best Bank in 2013 from Investor Magazine.</p>
							</td>
						</tr>
						<tr>
							<td>Why Join Us?</td>
							<td>
								<p>ANZ has come so far, achieved so much, and is growing rapidly at a time when other banks are holding back or even downsizing their work force.</p>

								<p>We realize that our greatest asset in this is our people. That’s why we believe in and encourage Personal &amp; Professional Development, Collaborative Working Environment, Contribution to the Community and Involvement in Staff Clubs for each and every one of our staff. This way, our people will enjoy plenty of opportunities to grow and develop themselves, both professionally and personally.</p>
							</td>
						</tr>
						<tr>
							<td>What we look for in applicants:</td>
							<td>
								<p>We’re looking for someone who is resilient, willing to learn, can adapt easily to new environment and flexible in doing projects, have good interpersonal skills and communication skills. We are looking for people willing to grow and develop with us. </p>
							</td>
						</tr>
						<tr>
							<td>How to apply? </td>
							<td align="center">
								<p>Candidates can send their CV to recruitment.indonesia@anz.com with subject “IcarE”</p>
								<p class="bold" style="font-size: 25px;">OR</p>
								<p>Visit our booth at Indonesian Career Expo on May 16, 2015.</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div id="comp-permata" style="background: white; padding: 50px 0px;" align="left">
		<div class="normal-width">
			<div class="one_half">
				<img src="/img/logo/permata.png" style="width: 100%; float: left;">
				<a href="www.permatabank.com" target="blank"><span class="ionicons ion-link" style="font-size: 50px;"></span></a>
			</div>
			<div class="clear"></div>
			<div class=" column-last">
				<table>
					<tbody>
						<tr>
							<td>Preferred Majors</td>
							<td><p>Business, Economics, Management, Finance, Accounting, Engineering, Science, and Mathematics</p></td>
						</tr>
						<tr>
							<td rowspan="4">Jobs Available</td>
							<td class="position-title">GMAP - Graduate Management Acceleration Program</td>
						</tr>
						<tr><td>
							<p><i>(Location &amp; Selection period: Jakarta &amp; June - Sep 2015)</i></p>
							<p>GMAP is intended to equip you with knowledge of fundamental financial markets and all round banking products, as well as to give you exposure to PermataBank’s lines of business and function. Through structured On – the – job training series, you will be able to experience working in different functions during the program. </p>
						</td></tr>

						<tr><td class="position-title">Wholesale Banking Associate Program (BAP-WB)</td></tr>
						<tr><td>
							<p><i>(Location &amp; Selection period: Jakarta, Medan, Surabaya, Balikpapan, Makasar, Semarang &amp; August - October 2015)</i></p>
							<p>BAP-WB aims to develop fresh graduates to be experts and leaders in corporate banking by equipping you with essential knowledge and skills, so you may have a comprehensive understanding about doing business with other corporates.</p>						
						</td></tr>

						<tr>
							<td>Office Location</td>
							<td><p>Jakarta, Medan, Surabaya, Balikpapan, Makasar, Semarang</p></td>
						</tr>
						<tr>
							<td>Why Join Us?</td>
							<td>
								<p>At PermataBank, we embrace and nurture young talents. On top of our comprehensive and structured training programs, your skills and horizon will be enriched and broadened through day-to-day interactions with our experienced bankers. As a PermataBanker, you will have the same opportunity to make a difference and be recognized. We will learn from you as much as you will learn from us.</p>
							</td>
						</tr>
						<tr>
							<td>What we look for in applicants:</td>
							<td>
								<ul>
									<li>Bachelor and Master degree are welcomed.</li>
									<li>Graduates with GPA 3,0 and above are prioritized</li>
									<li>Fresh graduate with no working experience or less than 2 years of experience</li>
									<li>Strong passion to learn, grow, and make a difference!</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>How to apply? </td>
							<td align="center">
								<p>Send your cv to <a href="mailto:samarta@permatabank.co.id">samarta@permatabank.co.id</a> with max file size 1MB or visit <a href="https://www.permatabank.com/TentangKami/Karir/">our careers website</a> and fill in the application form before June 30th, 2015. Interview will be held on May 17th and 18th, 2015 in Melbourne.</p>
							</td>
						</tr>
						<tr></tr>
					</tbody>
				</table>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div id="comp-cl" style="background: #DBD5D9; padding: 50px 0px;" align="left">
		<div class="normal-width">
			<div class="one_half">
				<img src="/img/logo/commonwealth.png" style="width: 100%; float: left;">
				<a href="http://www.commlife.co.id/career/employee" target="blank"><span class="ionicons ion-link" style="font-size: 50px;"></span></a>
			</div>
			<div class="clear"></div>
			<div class="video">
				<h2>Employee Value Proposition [VIDEOS]</h2><br>
				<div class="one_third-margin-20" align="center">
					<h3>My First Days in Commlife</h3><br>
					<a target="blank" href="https://www.youtube.com/watch?v=-5G2jngovPo"><span class="ionicons ion-play"></span></a>
				</div>
				<div class="one_third-margin-20" align="center">
					<h3>People are our investment</h3><br>
					<a target="blank" href="https://www.youtube.com/watch?v=89MRJtv-_jQ"><span class="ionicons ion-play"></span></a>
				</div>
				<div class="one_third-margin-20 column-last" align="center">
					<h3>Commlife In One Word</h3><br>
					<a target="blank" href="https://www.youtube.com/watch?v=sRJdQuITcGA"><span class="ionicons ion-play"></span></a>
				</div>
				<div class="clear"></div>
			</div><br><br>
			<div class=" column-last">
				<table>
					<tbody>
						<tr>
							<td>Preferred Majors</td>
							<td><p>Any majors</p></td>
						</tr>
						<tr>
							<td rowspan="10">Jobs Available</td>
							<td class="position-title">Project Manager</td>
						</tr>
						<tr><td>
							<p><b>Position Summary</b></p>
							<p>This position exist to drive, deliver and monitor a localized process-excellence/productivity & Project Management Office program, whereby the program is being derived from Commonwealth Bank Australia (CBA) original program.</p>

							<p><b>Requirements</b></p>
							<ul>
								<li>Minimum Bachelor Degree with major in engineering (all majors), science or IT will be preferred</li>
								<li>Six sigma certification (Greenbelt, Blackbelt, MBB) will be appreciated</li>
								<li>Minimum 5 years working experience with minimum 3 years experience in project (process improvement/excellence, productivity, six sigma, lean, business process reengineering, IT or general project management)</li>
								<li>Experience in multinational company / inter-cultural environment will be preferred</li>
								<li>Experience in finance industry will be appreciated</li>
							</ul>
						</td></tr>

						<tr><td class="position-title">Product Pricing Analyst</td></tr>
						<tr><td>
							<p><b>Position Summary</b></p>
							<p>This position exist to perform end-to-end product pricing activities which Include product pricing and premium formulation &amp; calculation to ensure product profitability, product approval to regulator, reserve calculation,  Prophet system modification, and sales illustration development.</p>

							<p><b>Requirements</b></p>
							<ul>
								<li>Minimum Bachelor Degree with major in Actuarial / Mathematics</li>
								<li>Qualified Actuary (Associate/Fellow) from PAI/overseas will be preferred</li>
								<li>Minimum 3 years working experience in Actuarial area of life insurance company with minimum 2 years working experience in Product Pricing or Prophet Management</li>
							</ul>
							
						</td></tr>

						<tr><td class="position-title">Business Planning Specialist</td></tr>
						<tr><td>
							<p><b>Position Summary</b></p>
							<p>This position exist to support business planning process in Actuarial area, work closely with Finance &amp; Accounting and Valuation team in fulfilling the planning report requirements and approvals. </p>

							<p><b>Requirements</b></p>
							<ul>
								<li>Minimum Bachelor Degree with major in Actuarial / Mathematics</li>
								<li>Qualified Actuary (Associate/Fellow) from PAI/overseas will be preferred</li>
								<li>Minimum 4 years in life insurance industry</li>
								<li>Experience of 2 years in Actuarial areas will be preferred</li>
							</ul>
						</td></tr>

						<tr><td class="position-title">Valuation Specialist</td></tr>
						<tr><td>
							<p><b>Position Summary</b></p>
							<p>This position exist to validate actuarial model set in Prophet system, perform Prophet system calculation for monthly reserve calculation, and initiate and lead all projects in Valuation area.</p>

							<p><b>Requirements</b></p>
							<ul>
								<li>Minimum Bachelor Degree with major in Actuarial / Mathematics</li>
								<li>Qualified Actuary (Associate/Fellow) from PAI/overseas will be preferred</li>
								<li>Minimum 4 years working experience in Actuarial area of life </li>
							</ul>
						</td></tr>

						<tr><td class="position-title">IT Auditor</td></tr>
						<tr><td>
							<p><b>Position Summary</b></p>
							<p>This position exists in order to take full responsibility for assessing internal control and risks within PTCL’s information technology systems and network. The incumbent will also be responsible for the initiating the utilization of data analytic tools as well as developing and maintaining continuous audit.</p>

							<p><b>Requirements</b></p>
							<ul>
								<li>Minimum Bachelor Degree with major in information technology / information system / computer engineering or related field</li>
								<li>Minimum 4 years working experience in IT</li>
								<li>Experience in IT Audit will be preferred</li>

							</ul>
						</td></tr>

						<tr>
							<td>Internship Availability</td>
							<td><p>Yes in various functions based on business direction, send your further inquiry to <a href="mailto:hrd@commlife.co.id">hrd@commlife.co.id</a></p></td>
						</tr>
						<tr>
							<td>Indonesian Only</td>
							<td><p>Yes</p></td>
						</tr>
						<tr>
							<td>Office Location</td>
							<td><p>Jakarta, Indonesia</p></td>
						</tr>
						<tr>
							<td>Why Join Us?</td>
							<td>
								<p>At PT. Commonwealth Life we value the differences in people’s background, beliefs and opinion and what it’s offers us. In a diverse working atmosphere, we are ensuring that equal opportunities are given to our stakeholders. While we offer our future stakeholders a chance to serve Indonesia with better life and financial protection, we value integrity, diversity and open communication with a belief that our unique culture is our core strength in a dynamic, solid and aggressive financial organization as we live and breathe for continuous improvement for a better service in the future.</p>

								<p>You will find that our people are determined to provide excellent service to Indonesia's people, businesses and communities.  The only reason we empower our people so well in putting our customer at the center of our decisions with our leaders is playing part as the catalyst in driving our growth.</p>
								 
								<p>PT. Commonwealth Life highly regards Indonesia’s finest talent therefore Integrity, Collaboration, Excellence, Accountability and Service is our core values which we live and breathe every day, we consider them to be the pillar in key strategic business priorities. PT. Commonwealth Life is encouraging individual development and expressions, as the result we are fully enjoy and celebrate our achievement. We are committed to foresting a culture where our people are engaged, passionate and valued as success with our people will lead to success with our people, businesses, and our communities over the long term.</p>
							</td>
						</tr>
						<tr>
							<td>What we look for in applicants:</td>
							<td>
								<ul>
									<li>Fresh Graduate or with 2 (two) years of professional work experience</li>
									<li>University degree in these following majors: Actuarial, Mathematics or Statistical</li>
									<li>Involved in organizational activities</li>
									<li>Self-motivated with good interpersonal and communication skills</li>

								</ul>
							</td>
						</tr>
						<tr>
							<td>How to apply? </td>
							<td align="center">
								<p>You can send us your most recent professional resume to: <a href="mailto:hrd@commlife.co.id">hrd@commlife.co.id</a> with subject: PPIA – Actuarial</p>
								<p class="bold" style="font-size: 25px;">OR</p>
								<p>Visit our booth at Indonesian Career Expo on May 16, 2015.</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div id="comp-axa" style="background: white; padding: 50px 0px;" align="left">
		<div class="normal-width">
			<div class="one_half">
				<img src="/img/logo/axa.png" style="width: 100%; float: left;">
				<a href="http://www.axa.co.id" target="blank"><span class="ionicons ion-link" style="font-size: 50px;"></span></a>
			</div>
			<div class="clear"></div>
			<div class=" column-last">
				<table>
					<tbody>
						<tr>
							<td>Preferred Majors</td>
							<td><p>Actuaries</p></td>
						</tr>
						<tr>
							<td>Jobs Available</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Internship Availability</td>
							<td><p>Yes in some areas esp. actuaries.</p></td>
						</tr>
						<tr>
							<td>Indonesian Only</td>
							<td><p>Yes</p></td>
						</tr>
						<tr>
							<td>Office Location</td>
							<td><p>Jakarta, Indonesia</p></td>
						</tr>
						<tr>
							<td>Why Join Us?</td>
							<td>
								<p>The AXA Group is one of the largest insurance groups in the world. AXA operates in more than 57 countries throughout Europe, North America, Asia Pacific, Africa and Middle East serving over 96 million customers and managing funds over Euro 1 trillion. Supported by over 216,000 dedicated staff and financial advisers, AXA leads the industry in terms of professionalism, trustworthiness, innovation and reputation. AXA has a multi-distribution model in Indonesia, and due to our rapid growth we are inviting professionals to fill the positions.</p>

								<p>Be part of AXA Indonesia! AXA as preferred company with conducive work environment and ensure each employee in variety of facilities to escalade their competencies in supporting AXA’s employee engagement which bring AXA to get BEST EMPLOYEE AWARD in Indonesia 2011 from AON Hewitt Consulting Asia Pacific.</p>
								 
								<p>As Indonesia as part of AXA Global which a world leader, our ambition is to become the company of choice in our sector for our partners, clients and shareholders, and for the society in which we are evolving. But also for our employees. How? By creating a work environment that is conducive to innovation, to a better quality of service and that is open and respectful of our employees, and by offering exciting roles in a stimulating and empowering setting.</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="clear"></div>
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
		if ( window.pageYOffset > 200 )		{ fixed = true; }
		else								{ fixed = false; }

		// Calculate whether cart bar should be fixed
		if ( fixed && ( initial || !prevFixed ) ) {
			$('#comp-bar-wrapper').addClass("fixed");
			prevFixed = true;
		} else if ( !fixed && prevFixed ) {
			$('#comp-bar-wrapper').removeClass("fixed");
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
<?php 
	$this->assign('title', 'About');
	echo $this->Html->meta('description', 'Indonesian Career Expo (ICarE) is an event held by Melbourne University Indonesian Student Association (MUISA) which aims to bridge the gap between Indonesian companies and Indonesian students studying in Melbourne. Following the grand success of the first Indonesian Career Expo, MUISA will hold its second Indonesian Career Expo in 2015.');
	$this->assign('name', 'about');
	$this->Html->css(array("about", "committee"), array('inline' => false));
	echo $this->Html->script("about");
?>

<div class="small-width" style="margin-top: 50px;">
	<h1>About ICarE 2015</h1><br>
	<div>
		<div class="two_fifth">
			<h3>Enriching young professionals</h3>
			<p>Our vision is to facilitate Indonesian students who are undertaking their studies in Australia to contribute through establishing their career in Indonesia.</p>
		</div>
		<div class="three_fifth column-last">
			<p>Indonesian Career Expo (ICarE) is an event held by Melbourne University Indonesian Student Association (MUISA) which aims to bridge the gap between Indonesian companies and Indonesian students studying in Melbourne. Following the grand success of the first Indonesian Career Expo, MUISA will hold its second Indonesian Career Expo in 2015.</p>
		</div>
	</div>
</div>

<div class="clear"></div>

<div class="mission normal-width" >
	<div align="center">
		<img src="/img/logo/icare-small.png" style="width: 20%; margin-bottom: 30px;">
	</div>
	<div class="small-width" style="background: white; padding: 0px;">
		<h2 style="text-align: center;">Our Missions</h2>
		<ol>
			<li>To create awareness for Indonesian students of the importance of their role in the development of Indonesia.</li>
			<li>Bridging the needs of Indonesian students in establishing their career and needs for companies by enhancing the quality of workforce as value creation for the company.</li>
			<li>To inform different pathways and opportunities for Indonesian students in their respective fields.</li>
			<li>To make available useful life skills that would help the students to face the working world.</li>
		</ol>
	</div>
</div>

<div style="background: #eeeeee; padding: 30px 0px;">
	<div class="normal-width" align="center">

		<p>The theme of the second Indonesian Career Expo is <strong>“ABLE”</strong>, an abbreviation for <strong>Aware</strong>, <strong>Build</strong>, <strong>Live</strong> and <strong>Emerge</strong>. Each word represents individual key objectives in creating this year’s event.</p>


		<div class="able">
			<img src="/img/logo/aware.png">
			<img src="/img/logo/build.png">
			<img src="/img/logo/live.png">
			<img src="/img/logo/emerge.png">
		</div>

		<div class="able-desc">
			<p class="flicker">Hover on each flag to know their meaning</p>
			<p hidden>Aware: Raising Indonesian students’ awareness of the importance of developing Indonesia.</p>
			<p hidden>Build: Building Indonesian students’ competence in basic skills before facing the working world.</p>
			<p hidden>Live: Implementing what the Indonesian students have learnt by bridging them and Indonesian companies in the expo.</p>
			<p hidden>Emerge: Reaching for sustainability, as Indonesian students will contribute in a development of their country by pursuing a career in Indonesia.</p>
		</div>
	</div>
</div>

<div class="normal-width team" style="padding: 30px 0px;" align="center">
	<div class="committee-content normal-width" align="center">
		<h1>MEET THE TEAM</h1><br>
		
		<ul class="div-selector">
			<li><a onclick='goToDivision("executive")' class="executive active">EXECUTIVE</a></li>
			<li><a onclick='goToDivision("sa")' class="sa">SUPERVISOR &amp; ADVISER</a></li>
			<li><a onclick='goToDivision("program")' class="program">PROGRAM</a></li>
			<li><a onclick='goToDivision("sponsorship")' class="sponsorship">SPONSORSHIP</a></li>
			<li><a onclick='goToDivision("logistic")' class="logistic">LOGISTIC</a></li>
			<li><a onclick='goToDivision("marketing")' class="marketing">MEDIA &amp; MARKETING</a></li>
			<li><a onclick='goToDivision("lo")' class="lo">LIAISON OFFICER</a></li>
			<li><a onclick='goToDivision("creative")' class="creative">CREATIVE</a></li>
		</ul>
		<div class="team-container">
			<div class="team-division executive active">
				<?php echo $this->element('executive'); ?>
			</div>
			<div class="team-division sa">
				<?php echo $this->element('supervisor-adviser'); ?>
			</div>
			<div class="team-division program">
				<?php echo $this->element('program'); ?>
			</div>
			<div class="team-division sponsorship">
				<?php echo $this->element('sponsorship'); ?>
			</div>
			<div class="team-division logistic">
				<?php echo $this->element('logistic'); ?>
			</div>
			<div class="team-division marketing">
				<?php echo $this->element('marketing'); ?>
			</div>
			<div class="team-division lo">
				<?php echo $this->element('lo'); ?>
			</div>
			<div class="team-division creative">
				<?php echo $this->element('creative'); ?>
			</div>

		</div>
		<div class="clear"></div>
	</div>
	
</div>

<script type="text/javascript">
$(document).ready(function() {
	if (location.hash === '#team') {
		$("html").scrollTop($(".team").offset().top);
		$("body").scrollTop($(".team").offset().top);
	}
});
</script>

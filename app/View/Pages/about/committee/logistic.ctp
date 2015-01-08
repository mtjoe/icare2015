<?php 
	$this->assign('title', 'Program Committee - ICarE');
	$this->assign('name', 'committee');
	echo $this->Html->css("committee");
?>

<div class="committee-content normal-width" align="center">
	<h1>MEET THE TEAM</h1><br>
	

	<ul class="div-selector">
		<li><a href="/about/committee/executive">EXECUTIVE</a></li>
		<li><a href="/about/committee/program">PROGRAM</a></li>
		<li><a href="/about/committee/sponsorship">SPONSORSHIP</a></li>
		<li><a href="/about/committee/logistic" class="active">LOGISTIC</a></li>
		<li><a href="/about/committee/marketing">MEDIA &amp; MARKETING</a></li>
		<li><a href="/about/committee/lo">LIASON</a></li>
		<li><a href="/about/committee/creative">CREATIVE</a></li>
	</ul>
	<div class="team-container">
		<div class="one_fifth-margin-20 flip-container" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front">
					<img src="/img/team/logistic/Yoseph.jpg">
				</div>
				<div class="back">
					<h4>Yoseph Christian</h4>
					<p>Coordinator</p>
					<p>Bachelor of Arts</p>
				</div>
			</div>
		</div>
		<div class="one_fifth-margin-20 flip-container" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front">
					<img src="/img/team/logistic/Jessica.jpg">
				</div>
				<div class="back">
					<h4>Jessica Margareta Budimartono</h4>
					<p>Vice Coordinator</p>
					<p>Bachelor of Science</p>
				</div>
			</div>
		</div>
		<div class="one_fifth-margin-20 flip-container" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front">
					<img src="/img/team/logistic/Filbert.jpg">
				</div>
				<div class="back">
					<h4>Filbert Angelo</h4>
					<p>Staff</p>
					<p>Bachelor of Commerce</p>
				</div>
			</div>
		</div>
		<div class="one_fifth-margin-20 flip-container" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front">
					<img src="/img/team/logistic/Henry.jpg">
				</div>
				<div class="back">
					<h4>Henry Gunawan Tjahjadi</h4>
					<p>Staff</p>
					<p>Bachelor of Commerce</p>
				</div>
			</div>
		</div>
		<div class="one_fifth-margin-20 column-last flip-container" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front">
					<img src="/img/team/logistic/Reissa.jpg">
				</div>
				<div class="back">
					<h4>Reissa Cheryl</h4>
					<p>Staff</p>
					<p>Bachelor of Science</p>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>
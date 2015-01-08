<?php 
	$this->assign('title', 'Creative Committee - ICarE');
	$this->assign('name', 'committee');
	echo $this->Html->css("committee");
?>

<div class="committee-content normal-width" align="center">
	<h1>MEET THE TEAM</h1><br>
	

	<ul class="div-selector">
		<li><a href="/about/committee/executive">EXECUTIVE</a></li>
		<li><a href="/about/committee/program">PROGRAM</a></li>
		<li><a href="/about/committee/sponsorship">SPONSORSHIP</a></li>
		<li><a href="/about/committee/logistic">LOGISTIC</a></li>
		<li><a href="/about/committee/marketing">MEDIA &amp; MARKETING</a></li>
		<li><a href="/about/committee/lo">LIASON</a></li>
		<li><a href="/about/committee/creative" class="active">CREATIVE</a></li>
	</ul>
	<div class="team-container">
		<!-- DEA -->
		<div class="one_fifth-margin-20 flip-container" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front">
					<img src="/img/team/creative/Dea.jpg">
				</div>
				<div class="back">
					<h4>Carissa Dea Chandra Putri</h4>
					<p>Coordinator</p>
					<p>Bachelor of Fine Arts</p>
				</div>
			</div>
		</div>
		<!-- ICHA -->
		<div class="one_fifth-margin-20 flip-container" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front">
					<img src="/img/team/creative/Icha.jpg">
				</div>
				<div class="back">
					<h4>Venansia Frisca Natasya</h4>
					<p>Staff</p>
					<p>Bachelor of Architecture</p>
				</div>
			</div>
		</div>
		<!-- CINDY -->
		<div class="one_fifth-margin-20 flip-container" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front">
					<img src="/img/team/creative/Cindy.jpg">
				</div>
				<div class="back">
					<h4>Cindy Edelene Arief</h4>
					<p>Staff</p>
					<p>Bachelor of Architecture</p>
				</div>
			</div>
		</div>
		<!-- PASHA -->
		<div class="one_fifth-margin-20 flip-container" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front">
					<img src="/img/team/creative/Pasha.jpg">
				</div>
				<div class="back">
					<h4>Ahmad Pasha Natanegara</h4>
					<p>Staff</p>
					<p>Bachelor of Biomedicine</p>
				</div>
			</div>
		</div>
		<!-- SALLY -->
		<div class="one_fifth-margin-20 column-last flip-container" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front">
					<img src="/img/team/creative/Sally.jpg">
				</div>
				<div class="back">
					<h4>Sally Yuniar</h4>
					<p>Staff</p>
					<p>Bachelor of Commerce</p>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>
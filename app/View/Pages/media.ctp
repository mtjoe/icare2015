<?php 
	$this->assign('title', 'Media Release');
	$this->assign('name', 'media release');
	$this->Html->css("empty", array('inline' => false));
?>

<style type="text/css">
	.content-container h1, 
	.content-container h2 { font-family: "Open Sans"; text-transform: uppercase; font-weight: 700; }
	.media-entry {
		position: relative;
		padding: 20px 20px 20px 20px;
	}
	.media-entry h2 {
		color: white;
	} 
	.mag {
		position: absolute;
		font-family: 'Open Sans';
		background: rgba(255, 255, 255, 0.2);
		padding: 5px;
		text-transform: uppercase;
		right: 10px;
		top: 10px;
		color: white;
		opacity: 0.7;
		margin: 0px;
	}

	.btn-read-more {
		opacity: 0.5;
		background: white;
		padding: 10px 20px;
		display: block;
		width: 150px;
		text-align: center;
		margin-left: calc(50% - 75px);
		font-family: 'Open Sans';
		font-weight: 600;
		color: gray;
	}

	.btn-read-more:hover {
		text-decoration: none;
	}
</style>

<div class="content-container normal-width">
	<h1 align="center">Media Release</h1><br><br>

	<div class="one_third">
		<div class="media-entry" style="background: #13C7A6">
			<h4 class="mag">Kopitoebruk</h4>
			<br><h2>Indonesian Career Expo hadir di tahun keduanya</h2><br><br>
			<a class="btn-read-more" href="http://www.kopitoebruk.com/index.php/event/231-indonesian-career-expo-hadir-di-tahun-keduanya">READ MORE</a><br>
		</div>

	</div>
	<div class="one_third">
		<div class="media-entry" style="background: #C7366D">
			<h4 class="mag">Cicak2</h4>
			<br><h2>Indonesian Career Expo hadir di tahun keduanya (Melbourne)</h2><br><br>
			<a class="btn-read-more" href="http://www.cicak2.com.au/index.php?r=article/view&id=1782">READ MORE</a><br>
		</div>

	</div>
	<div class="one_third column-last">
		<div class="media-entry" style="background: #6C5BC7">
			<h4 class="mag">Majalah aktivis</h4>
			<br><h2>ICarE is Back for its Second Year</h2>
			<p>Page 142</p><br><br>
			<a class="btn-read-more" href="http://issuu.com/aktivis/docs/aktivis_2">READ MORE</a><br>
		</div>

	</div>
	<div class="clear"></div>

</div>
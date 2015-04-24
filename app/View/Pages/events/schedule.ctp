<?php 
	$this->assign('title', 'Schedule');
	$this->assign('name', 'schedule');
	$this->Html->css("empty", array('inline' => false));
?>

<style type="text/css">
	.one_third-no-margin {
		border-right: 1px solid #E0E2E6;
		padding: 0px 5px;
		min-height: 410px;
	}

	.one_third-no-margin:first-of-type {
		border-left: 1px solid #E0E2E6;
	}

	.one_third-no-margin h5 {
		background: #B5C5CD;
		width: 100%;
		padding: 10px 0px;
		font-size: 40px;
	}

	.entry {
		padding: 30px 10px;
		display: block;
		color: black;
		margin-bottom: 10px;
	}

	.entry:hover {
		text-decoration: none;
		color: black;
		background: #EDFFFF;
	}

	.entry h6 { font-size: 30px; }

	.entry.premiere { background: #FFDBCB; }
	.entry.ss 		{ background: #D1FFDA; }
	.entry.expo 	{ background: #C9D2FF; }
	.entry.id 		{ background: #FFE1FB; }

	.entry.premiere:hover 	{ background: #FFC0A5; }
	.entry.ss:hover 		{ background: #C2ECAC; }
	.entry.expo:hover 		{ background: #B3BDE7; }
	.entry.id:hover 		{ background: #EBD0ED; }
</style>

<div class="content-container normal-width" align="center">
	<h1 style="font-size: 70px;">Schedule</h1>
	<p>We have a series of events specially lined-up for you.</p><br>
	<div class="one_third-no-margin">
		<h5>MAY 9</h5>

		<a href="/events/start-smart" class="entry ss">
			<h6>Start Smart</h6>
			<p>11.30 AM - 4.00 AM</p>
		</a>
	</div>
	<div class="one_third-no-margin">
		<h5>MAY 15</h5>

		<a href="/events/premiere" class="entry premiere">
			<h6>The Premiere</h6>
			<p>6.00 PM - 8.30 PM</p>
		</a>
	</div>
	<div class="one_third-no-margin">

		<h5>MAY 16</h5>
		<a href="/events/premiere" class="entry expo">
			<h6>Expo &amp; Seminars</h6>
			<p>10.30 AM - 5.00 PM</p>
		</a>

		<a href="/events/insight-dinner" class="entry id">
			<h6>Insight Dinner</h6>
			<p>6.00 PM - 9.00 PM</p>
		</a>
	</div>
	<div class="clear"></div>
</div>
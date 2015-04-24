<?php 
	$this->assign('title', 'Schedule');
	$this->assign('name', 'schedule');
	$this->Html->css("empty", array('inline' => false));
?>

<style type="text/css">
	.one_fourth-no-margin {
		border-right: 1px solid #E0E2E6;
		padding: 0px 5px;
		min-height: 410px;
	}

	.one_fourth-no-margin:first-of-type {
		border-left: 1px solid #E0E2E6;
	}

	.one_fourth-no-margin h5 {
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

	.entry.premiere { background: #F3F3F3; }
	.entry.ss 		{ background: #F3F3F3; }
	.entry.expo 	{ background: #F3F3F3; }
	.entry.id 		{ background: #F3F3F3; }
	.entry.recr		{ background: #F3F3F3; }

	.entry.premiere:hover 	{ background: #E3E3E3; }
	.entry.ss:hover 		{ background: #E3E3E3; }
	.entry.expo:hover 		{ background: #E3E3E3; }
	.entry.id:hover 		{ background: #E3E3E3; }
	.entry.recr:hover 		{ background: #E3E3E3; }
</style>

<div class="content-container normal-width" align="center">
	<h1 style="font-size: 70px;">Schedule</h1>
	<p>We have a series of events specially lined-up for you.</p><br>
	<div class="one_fourth-no-margin">
		<h5>MAY 9</h5>

		<a href="/events/start-smart" class="entry ss">
			<h6>Start Smart</h6>
			<p>11.30 AM - 2.00 AM</p>
		</a>
	</div>
	<div class="one_fourth-no-margin">
		<h5>MAY 15</h5>

		<a href="/events/premiere" class="entry premiere">
			<h6>The Premiere</h6>
			<p>6.00 PM - 8.30 PM</p>
		</a>
	</div>
	<div class="one_fourth-no-margin">

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
	<div class="one_fourth-no-margin">

		<h5>MAY 17</h5>
		<a href="/events/premiere" class="entry recr">
			<h6>Recruitment</h6>
			<p>10.00 AM – 4.00 PM</p>
		</a>
	</div>
	<div class="clear"></div>
</div>
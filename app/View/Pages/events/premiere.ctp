<?php 
	$this->assign('title', 'The Premiere');
	$this->assign('name', 'premiere');
	$this->Html->css("empty", array('inline' => false));
?>

<style type="text/css">
	p, li { line-height: 1.5; }
	.date p { 
		font: 50px 'Open Sans';
		font-weight: 800;
		margin: 0;
		line-height: 50px;
	}
	.loc p {
		margin: 0;
	}

	.btn-register {
		padding: 20px 50px;
		background: #8DC99B;
		color: white;
		font-size: 25px;
		border-radius: 5px;
		font-family: "Ostrich-black";
	}

	.btn-register:hover {
		color: white;
		background: #76AA85;
		text-decoration: none;
	}

	.one_third-margin-20  {
		min-height: 180px;
	}
</style>


<div class="content-container">
	<div class="normal-width">
		<div align="center" style="padding: 50px 0px 80px 0px;">
			<h1 style="font-size: 140px; margin-bottom: 30px;">The Premiere</h1>
			<a href="/PreEvents/register" class="btn-register">Register on Eventbrite</a>
		</div>
	</div>
	<div style="background: #E1E0EA; padding: 100px 0px;">
		<div class="normal-width">
			<div class="date" style="width: 30%; float: left; padding-right: 20px; border-right: 1px solid #D1CEDB; " align="right">
				<p>15</p>
				<p>MAY</p>
				<p>2015</p>
			</div>
			<div class="loc" style="width: 50%; float: left; padding-left: 20px;">
				<p>TBA</p>
				<p>Melbourne, VIC</p>
				<p>Australia</p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	

	<div class="small-width" style="padding-top: 100px;">
		<p>Indonesia is prominently exceeding expectations in its ability to multiply growth in various aspects. It is currently the largest ASEAN economy with outstanding track record for the past 10 years, both in the political and economic sector (Australian Trade Commission, 2014). It is the economy to be involved in, be it in the consumer goods sector, up until the development and infrastructure sector. With expectation of Indonesia to grow even further in 2015, it is well predicted that the need for quality human resources will keep on rising for the next few years.</p><br>
		<p>The Premiere will mark the opening of the 2015 Indonesian Career Expo, bringing in valued speakers whom have dedicated their life to improving Indonesia through having studied internationally, and coming back home. Why do we as Indonesians have the duty to come back home and improve our nation? How are we going to make a difference in a place where we belong? The Premiere will be the source of answers to bring you back home!</p><br>

		<h2 style="color: #273487;">Speakers TBA. Subscribe to our mailing list to get updates!</h2>
	</div>
	<div align="center" style="margin: 70px 0px;">
		<a href="/PreEvents/register" class="btn-register">Register on Eventbrite</a>
	</div>
</div>
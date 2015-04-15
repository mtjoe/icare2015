<?php 
	$this->assign('title', 'Networking Dinner');
	$this->assign('name', 'networking-dinner');
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

	.imp {
		padding: 3px; background: #B7BCFF; border-radius: 5px; width: auto;
	}
</style>


<div class="content-container">
	<div class="normal-width">
		<div align="center" style="padding: 50px 0px 80px 0px;">
			<h1 style="font-size: 140px; margin-bottom: 30px;">Insight Dinner</h1>
			<a href="/PreEvents/register" class="btn-register">Register on Eventbrite</a>
		</div>
	</div>

	<div style="background: #E1E0EA; padding: 100px 0px;">
		<div class="normal-width">
			<div class="date" style="width: 30%; float: left; padding-right: 20px;" align="right">
				<p>17</p>
				<p>MAY</p>
				<p>2015</p>
			</div>
			<div class="loc" style="width: 50%; float: left; padding-left: 20px; border-left: 1px solid #D1CEDB;">
				<p><span class="imp">11:30</span>  to  <span class="imp">17:00</span></p>
				<p style="margin-top: 5px;">Ticket Price: <span class="imp">$15/person</span></p><br>
				<p>Lemongrass Restaurant</p>
				<p>174-178 Lygon St</p>
				<p>Carlton VIC 3053</p>
				<p>Melbourne, Australia</p><br>

				<iframe width="100%" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Lemongrass%20Restaurant%2C%20Carlton%2C%20Victoria%2C%20Australia&key=AIzaSyBnuNrreKPnAfi0_pykIJAeG6GJ4pALaCU"></iframe>
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
<?php 
	$this->assign('title', 'Contact Us - ICarE');
	$this->assign('name', 'contact');
	echo $this->Html->css("empty");
?>

<!-- CONTACT CONTENT -->
<div class="content-container">
	<div class="normal-width" align="center">
		<h1>CONTACT US</h1>	
		<p>Any suggestions? Wanna let us know what you think? Drop us a message below!</p><br>
		<form style="width: 100%;">
			<input type="text" name="name" placeholder="Name" class="one_half-margin-20">
			<input type="text" name="email" placeholder="Email" class="one_half-margin-20 column-last">
			<textarea rows="10" style="width: 100%;" placeholder="Message"></textarea>

			<input type="submit">
		</form>
	</div>
</div>
<!-- END: CONTACT CONTENT -->
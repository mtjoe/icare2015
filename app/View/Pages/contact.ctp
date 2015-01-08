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
		
		<form action="/contact" controller="pages" method="post" id="contactForm" accept-charset="utf-8">
			<div style="display:none;"><input type="hidden" name="_method" value="POST"/></div><div class="input text"><input name="data[name]" class="one_half-margin-20" placeholder="Name" type="text" id="name"/></div><div class="input email"><input name="data[email]" class="one_half-margin-20 column-last" placeholder="Email" type="email" id="email"/></div><div class="input textarea"><textarea name="data[message]" class="full-width" rows="10" placeholder="" cols="30" id="message"></textarea></div><div class="submit"><input  class="btn-orange-box" type="submit" value="Send"/></div>
		</form>
	</div>
</div>
<!-- END: CONTACT CONTENT -->
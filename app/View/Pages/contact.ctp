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
		<?php
			echo $this->Form->create(null, array('controller' => 'pages', 'action' => 'contact', 'method' => 'post'));
			echo $this->Form->input('name', array(
				'label' => false,
				'class' => "one_half-margin-20",
				'placeholder' => 'Name'
			));
			echo $this->Form->input('email', array(
				'label' => false,
				'class' => "one_half-margin-20 column-last",
				'placeholder' => 'Email'
			));
			echo $this->Form->input('message', array(
				'type' => 'textarea', 
				'label' => false, 
				'class' => 'full-width',
				'rows' => '10',
				'placeholder' => ''
			));
			echo $this->Form->Submit('Send', array('class' => 'btn-orange-box'));

		?>
	</div>
</div>
<!-- END: CONTACT CONTENT -->
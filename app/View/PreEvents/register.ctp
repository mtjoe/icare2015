<?php 
	$this->assign('name', 'reg-preevent');
	$this->assign('title', 'Pre-Event Registration');
	$this->Html->css("preevent", array('inline' => false));
?>

<?php 
	$universities = array(
		'University of Melbourne',
		'Monash University',
		'Victoria University',
		'RMIT',
		'Others',
	);
?>

<div class="content-container small-width" align="center">
	<h1>Pre-Event Registration</h1>

	<p>Please fill in your details for registration.</p><br>

	<?php 
	if (isset($error)) echo $error;
	?>

	<?php echo $this->Form->create('UnconPreEvent', array('enctype'=>'multipart/form-data')); ?>
	<?php echo $this->Form->input('first_name', array('label' => false, 'placeholder' => 'First Name'), ''); ?>
	<?php echo $this->Form->input('last_name', array('label' => false, 'placeholder' => 'Last Name')); ?>
	<?php echo $this->Form->input('email', array('label' => false, 'placeholder' => 'Email')); ?>
	<?php echo $this->Form->input('university', array('label' => false, 'options' => $universities, 'empty' => 'Choose your University'));  ?>
	<div class="clear"></div>
	<div align="left" style="margin-top: 50px;">
		<h2>Take your resume to the next level</h2>
		<h4>Sponsored by SuperStar Education</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div align="center">
			<?php echo $this->Form->input('resume', array('label' => false, 'type'=>'file')); ?>
		</div>
	</div>
	<?php echo $this->Form->end('Register'); ?>
	
</div>
<?php 
	$this->assign('name', 'reg-preevent');
	$this->assign('title', 'Pre-Event Registration');
	$this->Html->css("preevent", array('inline' => false));
?>

<?php 
	$universities = array(
		'University of Melbourne',
		'Monash University',
		'RMIT',
		'Victoria University',
		'Swinburne University',
		'Deakin University',
		'La Trobe University',
		'Others',
	);
?>

<div class="content-container small-width" align="center">
	<h1>Start Smart Registration</h1>

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
		<p>To be able to gain as much help and resources as possible in Start Smart, we recommend participants to attach their latest Curriculum Vitae (CV) or Resume with their application. We will be inviting experienced consultants to the event to guide participants in creating a well-structured CV or Resume by reviewing participants’ CV or Resume submissions. We recommend PDF files no more than 5MB.</p>
		<div align="center">
			<?php echo $this->Form->input('resume', array('label' => false, 'type'=>'file', 'options' => array('accept' => 'application/pdf', 'data-max-size' => '5120'))); ?>
		</div>
	</div>
	<?php echo $this->Form->end('Register'); ?>
	
</div>
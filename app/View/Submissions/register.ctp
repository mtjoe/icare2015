<?php 
	$this->assign('name', 'reg-submission');
	$this->assign('title', 'CV Submit');
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

<style type="text/css">
	#fileinput {
		padding: 0px;
		margin: 0px;
	}

	.one_half-margin-20 { margin-bottom: 0px; }

	.form-entry {
		padding: 30px;
		border: 5px solid #E6E6E6;
		border-radius: 10px;
	}
	.form-entry h3 {
		font-family: 'Open Sans';
		font-weight: 600;
		margin: 0px 0px 20px 0px;
	}

	.error { color: red; }
</style>

<div class="content-container normal-width" align="left">
	<h1 style="font: 50px 'Open Sans'; font-weight: 600; border-bottom: 5px solid #222F77;">CV SUBMIT</h1>
	<p style="font: 25px 'Open Sans';">Submit your CV directly to your companies of choice!</p><br>

	<!-- Errors -->
	<p class="error"><?php if (isset($error)) echo $error; ?></p><br>

	<!-- Start of Form -->
	<?php echo $this->Form->create('UnconSubmission', array('enctype'=>'multipart/form-data')); ?>

	<!-- Form - Details -->
	<div class="form-entry" style="margin-bottom: 30px;">
		<h3>Your Details</h3>
		<div class="one_half-margin-20">
			<div class="one_half-margin-20"><?php echo $this->Form->input('first_name', array('label' => false, 'placeholder' => 'First Name'), ''); ?></div>
			<div class="one_half-margin-20 column-last"><?php echo $this->Form->input('last_name', array('label' => false, 'placeholder' => 'Last Name')); ?></div>
			<div class="clear"></div>
		</div>
		<div class="one_half-margin-20 column-last"><?php echo $this->Form->input('email', array('label' => false, 'placeholder' => 'Email')); ?></div>
		<div class="clear"></div>
		<?php echo $this->Form->input('university', array('label' => false, 'options' => $universities, 'empty' => 'Choose your University'));  ?>
	</div>

	<!-- Form - Resume -->
	<div class="one_half form-entry">
		<h3>Resume</h3>
		<p>Please upload your CV in PDF format, and ensure that it is under 5MB in size.</p>
		<?php echo $this->Form->input('resume', array('id' => 'fileinput', 'label' => false, 'type'=>'file', 'accept' => 'application/pdf')); ?>
	</div>
		
	<!-- Form - Companies -->
	<div class="one_half column-last form-entry" align="left">
		<h3>Companies</h3>
		<div class="one_half-margin-20">
			<input type="checkbox" name="data[UnconSubmission][comp_1]" value="1" style="width: auto;"> ANZ Bank<br>
			<input type="checkbox" name="data[UnconSubmission][comp_2]" value="1" style="width: auto;"> Permata Bank<br>
			<input type="checkbox" name="data[UnconSubmission][comp_3]" value="1" style="width: auto;"> Commonwealth Life<br>
		</div>
		<div class="one_half-margin-20 column-last">
			<input type="checkbox" name="data[UnconSubmission][comp_4]" value="1" style="width: auto;"> AXA Insurance<br>
			<input type="checkbox" name="data[UnconSubmission][comp_5]" value="1" style="width: auto;"> SCTV<br>
		</div>
	</div>
	<div class="clear"></div><br><br>

	<div class="g-recaptcha" data-sitekey="6Lf5OAYTAAAAAOBGLFMVjZzxO7b9EnX8ggTz5Njk"></div><br><br>
	<p>NOTE: By submitting this registration form, you are acknowledging that you will be automatically subscribed to our newsletter as well as saved in our database.</p>	
	<?php echo $this->Form->end(array('label' => 'Next - Confirmation', 'div' => FALSE)); ?>
	
</div>

<script type='text/javascript'>
	function showFileSize() {
	    var input, file;

	    if (!window.FileReader) {
	        alert("The file API isn't supported on this browser yet.");
	        return;
	    }

	    input = document.getElementById('fileinput');
	    if (!input) {
	        alert("Um, couldn't find the fileinput element.");
	    }
	    else if (!input.files) {
	        alert("This browser doesn't seem to support the `files` property of file inputs.");
	    }
	    else if (!input.files[0]) {
	        alert("Please select a file before clicking 'Load'");
	    }
	    else {
	        file = input.files[0];
	        if ((file.size/1000000) > 5) {
	        	alert("Please upload CVs in PDF format, no more 5MB in size.");	
	        	input.value= null;
	        }
	        
	    }
	}

	$(window).load(function() {
		$("#fileinput").on("change", function() {
			showFileSize();
		});
	});
</script>
<?php 
	$this->assign('name', 'reg-preevent');
	$this->assign('title', 'Start Smart Registration');
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
</style>

<div class="content-container smallest-width" align="center">
	<h1>Start Smart Registration</h1>
	<p>Please fill in your details for registration.</p><br>
	<?php 
	if (isset($error)) echo $error;
	?>

	<?php echo $this->Form->create('UnconPreEvent', array('enctype'=>'multipart/form-data')); ?>
	<?php echo $this->Form->input('first_name', array('label' => false, 'placeholder' => 'First Name'), ''); ?>
	<?php echo $this->Form->input('last_name', array('label' => false, 'placeholder' => 'Last Name')); ?>
	<?php echo $this->Form->input('email', array('label' => false, 'placeholder' => 'Email')); ?>
	<?php echo $this->Form->input('university', array('label' => false, 'options' => $universities, 'empty' => 'Choose your University'));  ?><br><br>
	<div align="left">
		<h3 style="margin: 0px;">Areas of Interest</h3>
		<input type="checkbox" name="data[UnconPreEvent][int_1]" value="1" style="width: auto;"> Banking and Financial Services<br>
		<input type="checkbox" name="data[UnconPreEvent][int_2]" value="1" style="width: auto;"> Design and Architecture<br>
		<input type="checkbox" name="data[UnconPreEvent][int_3]" value="1" style="width: auto;"> Real Estate and Property<br>
		<input type="checkbox" name="data[UnconPreEvent][int_4]" value="1" style="width: auto;"> Engineering<br>
		<input type="checkbox" name="data[UnconPreEvent][int_5]" value="1" style="width: auto;"> Information and Communication Technology<br>
		<input type="checkbox" name="data[UnconPreEvent][int_6]" value="1" style="width: auto;"> Healthcare and Medical<br>
		<input type="checkbox" name="data[UnconPreEvent][int_7]" value="1" style="width: auto;"> Legal<br>
		<input type="checkbox" name="data[UnconPreEvent][int_8]" value="1" style="width: auto;"> Science and Technology<br>
	</div>

	<br><br>
	<div align="left">
		<h3 style="margin: 0px;">Resume (optional)</h3>
		<p>Please upload your CV in PDF format, and ensure that it is under 5MB in size.</p>
		<?php echo $this->Form->input('resume', array('id' => 'fileinput', 'label' => false, 'type'=>'file', 'accept' => 'application/pdf')); ?>
	</div><br><br><br>

	<p>By submitting this registration form, you are acknowledging that you will be automatically subscribed to our newsletter as well as saved in our database.</p>
	<?php echo $this->Form->end(array('label' => 'submit', 'div' => FALSE)); ?>
	
</div>

<script type='text/javascript'>
	function showFileSize() {
	    var input, file;

	    // (Can't use `typeof FileReader === "function"` because apparently
	    // it comes back as "object" on some browsers. So just see if it's there
	    // at all.)
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
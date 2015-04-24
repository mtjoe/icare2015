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
			<?php echo $this->Form->input('resume', array('id' => 'fileinput', 'label' => false, 'type'=>'file', 'accept' => 'application/pdf')); ?>
		</div>
	</div>
	<?php echo $this->Form->end(array('label' => 'submit', 'div' => FALSE, 'onclick'=>'showFileSize()')); ?>
	
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
	        alert("File " + file.name + " is " + file.size + " MB in size");
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
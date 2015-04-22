<?php 
	$this->assign('name', 'index');
	$this->assign('title', 'Home');
	$this->Html->css(array("index"), array('inline' => false));
?>

<style type="text/css">
	.input { margin: 30px;}
	input#UserUsername,input#UserPassword {
		float: right;
		width: 400px;
	}

	.smallest-width input[type="submit"] {
		float: right;
	}
</style>

<div class="smallest-width" align="left" style="padding: 100px 0;">
	<div class="users form">
		<?php echo $this->Session->flash('auth'); ?>
		<h1></h1>
		<?php echo $this->Form->create('User'); ?>
		    <fieldset>
		        <legend>
		            <?php echo 'Please enter your username and password'; ?>
		        </legend>
		        <?php echo $this->Form->input('username');
		        echo $this->Form->input('password');
		    ?>
		    </fieldset>
		<?php echo $this->Form->end(__('Login')); ?>
	</div>
	<div class="clear"></div>
</div>
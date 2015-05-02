<?php 
	$this->assign('name', 'reg-preevent');
	$this->assign('title', 'Pre-Event Registration');
	$this->Html->css("preevent", array('inline' => false));
?>

<style type="text/css">
	th, td {
		padding: 10px 20px;
	}
</style>

<div class="content-container normal-width">
	<!-- <p><b>You are logged in as <?php echo $this->Session->read('Auth.User.username'); ?>.</b></p> -->
	<a href="/Users/logout">Logout now ></a>

	<h1 align="center">Attendees of Start Smart</h1>
	<?php if (count($data) === 0): ?>
		<p align="center">No attendees yet.</p>
	<?php else: ?>
		<table border="1" style="width: 100%;">
			<tr>
				<th>No.</th>
				<th>Name</th>
				<th>Email</th>
				<th>University</th>
				<th>Interests</th>
				<th>Resume</th>
			</tr>
			<?php $n = 1 ?>
			<?php foreach ($data as $att): ?>
				<tr>
					<td><?php echo $n; ?></td>
					<td><?php echo $att['PreEvent']['first_name'] . " " . $att['PreEvent']['last_name']; ?></td>
					<td><?php echo $att['PreEvent']['email']; ?></td>
					<td><?php switch ($att['PreEvent']['university']) {
						case 0: echo "University of Melbourne"; break;
						case 1: echo "Monash University"; break;
						case 2: echo "RMIT"; break;
						case 3: echo "Victoria University"; break;
						case 4: echo "Swinburne University"; break;
						case 5: echo "Deakin University"; break;
						case 6: echo "La Trobe University"; break;
						case 7: echo "Others"; break;
					} ?></td>
					<td><ul><?php
						if ($att['PreEvent']['int_1'] == 1): echo "<li>Banking and Financial Services</li>"; endif;
						if ($att['PreEvent']['int_2'] == 1): echo "<li>Design and Architecture</li>"; endif;
						if ($att['PreEvent']['int_3'] == 1): echo "<li>Real Estate and Property</li>"; endif;
						if ($att['PreEvent']['int_4'] == 1): echo "<li>Engineering</li>"; endif;
						if ($att['PreEvent']['int_5'] == 1): echo "<li>Information and Communication Technology</li>"; endif;
						if ($att['PreEvent']['int_6'] == 1): echo "<li>Healthcare and Medical</li>"; endif;
						if ($att['PreEvent']['int_7'] == 1): echo "<li>Legal</li>"; endif;
						if ($att['PreEvent']['int_8'] == 1): echo "<li>Science and Technology</li>"; endif;
					?><ul></td>
					<?php if ($att['PreEvent']['resume'] === null): ?>
						<td></td>
					<?php else: ?>
						<td align="center"><a target="_blank" href="/PreEvents/resumes/<?php echo $att['PreEvent']['hash']; ?>">Link</a></td>
					<?php endif; ?>
				</tr>
				<?php $n++; ?>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>
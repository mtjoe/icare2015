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
	<h1 align="center">Attendees of Pre-Event</h1>
	<?php if (count($data) === 0): ?>
		<p align="center">No attendees yet.</p>
	<?php else: ?>
		<table border="1" style="width: 100%;">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>University</th>
				<th>Resume</th>
			</tr>
			<?php foreach ($data as $att): ?>
				<tr>
					<td><?php echo $att['PreEvent']['first_name']; ?></td>
					<td><?php echo $att['PreEvent']['last_name']; ?></td>
					<td><?php echo $att['PreEvent']['email']; ?></td>
					<td><?php echo $att['PreEvent']['university']; ?></td>
					<?php if ($att['PreEvent']['resume'] === null): ?>
						<td></td>
					<?php else: ?>
						<td align="center"><a target="_blank" href="/PreEvents/resumes/<?php echo $att['PreEvent']['hash']; ?>">Link</a></td>
					<?php endif; ?>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>
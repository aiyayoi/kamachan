<h1>DBtest Page</h1>
<p>MySampleData Index View</p>

<?php
	echo $this->Form->create('MySampleData');
	echo $this->Form->input('name');
	echo $this->Form->input('mail');
	echo $this->Form->end('submit');
?>

<?php if(isset($data)): ?>
	<pre><?php print_r($data); ?></pre>
<?php endif; ?>

<table>
<?php if(isset($data)): ?>
	<tr>
		<td><?php echo $data['MySampleData']['name']; ?></td>
		<td><?php echo $data['MySampleData']['mail']; ?></td>
		<td><?php echo $data['MySampleData']['tel']; ?></td>
	</tr>
<?php endif ; ?>
</table>

<h1>DBtest Page</h1>
<p>MySampleData Index View</p>
<pre><?php print_r($datas); ?></pre>
<table>
	<?php foreach($datas as $data): ?>
		<tr>
			<td><?php echo $data['MySampleData']['name']; ?></td>
			<td><?php echo $data['MySampleData']['mail']; ?></td>
			<td><?php echo $data['MySampleData']['tel']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>

<table>
<?php foreach($lists as $list):	?>
	<tr>
		<td><?php echo $list; ?></td>
	</tr>
<?php endforeach; ?>
</table>
<form type="post" action="mysampledatas/find">
<input type="text" name="id">
<input type="submit" value="検索">
</form>


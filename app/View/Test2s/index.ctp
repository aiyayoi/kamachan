<h1>test2</h1>
<p>MySampleData Index View</p>

<?php foreach($tes as $t): ?>
<li><?php print $t['Test2']['name']; ?></li>
<?php endforeach; ?>

<?php print($this->Html->link('test', 'write')); ?>

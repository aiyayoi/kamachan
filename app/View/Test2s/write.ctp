<h1>かく</h1>
<p>MySampleData Index View</p>

<?php
	echo $user['id'];
	echo $this->Form->create('Test2');
	echo $this->Form->label('name',"かく");
	echo $this->Form->text('name');
	echo $this->Form->end('登録');
?>

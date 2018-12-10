<h1>Add test</h1>
<p>sample data add form</p>
<?php
	echo $this->Form->create('MySampleData');
	echo $this->Form->input('name');
	echo $this->Form->error('name');
	echo $this->Form->input('mail');
	echo $this->Form->error('Email');
	echo $this->Form->input('tel');
	echo $this->Form->error('TEL');
	echo $this->Form->end('submit');
?>
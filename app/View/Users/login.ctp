<h1>ログイン</h1>
<p>MySampleData Index View</p>

<?php
	echo $this->Form->create('User');
	echo $this->Form->label('username',"ログインID");
	echo $this->Form->text('username');
	echo $this->Form->label('password',"パスワード");
	echo $this->Form->text('password');
	echo $this->Form->end('ログイン');
	
?>
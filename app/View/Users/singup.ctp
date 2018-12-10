<h1>新規登録</h1>
<p>MySampleData Index View</p>

<?php
	echo $this->Form->create('User');
	echo $this->Form->label('username',"ログインID");
	echo $this->Form->text('username');
	echo $this->Form->label('password',"パスワード");
	echo $this->Form->text('password');
	echo $this->Form->label('name',"表示名");
	echo $this->Form->text('name');
	echo $this->Form->label('live',"活動地域");
	echo $this->Form->select('live',
		array("1"=>'北海道',"2"=>'青森県',"3"=>'岩手県',"4"=>'京都府'));
	echo $this->Form->end('登録');
	
?>
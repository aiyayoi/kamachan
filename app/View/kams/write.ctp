<h1>かく</h1>
<p>MySampleData Index View</p>

<?php
	echo $user['id'];
	echo $this->Form->create('Kamatta');
	echo $this->Form->hidden('users_id',array('value'=>$user['id']));
	echo $this->Form->label('body',"かく");
	echo $this->Form->text('body');
	echo $this->Form->label('type',"かまってタイプ");
	echo $this->Form->select('type',
		array("1"=>'ネッ友欲しい',"2"=>'リア友欲しい',"3"=>'一緒に飲も☆',"4"=>'彼氏♂募集',"5"=>'♂♂♂♂♂♂♂♂♂'));
	echo $this->Form->end('登録');
	
?>
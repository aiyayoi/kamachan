<div class = "container-fluid">
	<div class ="row">
		<div class="col-12">
	<h1>おかまファミリー登録</h1>
	<p>おかまファミリーに登録すれば、制限ナシでかまーとできるどん☆</p>

		<?php
			echo $this->Form->create('User');
			echo "<div class='form-group'>";
			echo $this->Form->label('username',"ログインID");
			echo $this->Form->text('username',array('class' => 'form-control'));
			echo "</br>";
			echo $this->Form->label('password',"パスワード");
			echo $this->Form->text('password',array('class' => 'form-control'));
			echo "</br>";
			echo $this->Form->label('name',"表示名");
			echo $this->Form->text('name',array('class' => 'form-control'));
			echo "</br>";
//			echo $this->Form->end('登録',array('class' => 'btn btn-default','type' => 'button'));
		?>
		<button type="submit" class="btn btn-success btn-block"><b>　と　う　ろ　く　ぅ　</b></button>
	</div>
</div>

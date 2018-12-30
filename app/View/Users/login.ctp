
<div class = "container-fluid">
	<div class ="row">
		<div class="col-12">
	<h1>ろぐイン♂♂♂</h1>
	<p>おかまファミリーに挿入するどん☆</p>

		<?php
			echo $this->Form->create('User');
			echo "<div class='form-group'>";
			echo $this->Form->label('username',"ログインID");
			echo $this->Form->text('username',array('class' => 'form-control'));
			echo "</br>";
			echo $this->Form->label('password',"パスワード");
			echo $this->Form->text('password',array('class' => 'form-control'));
			echo "</br>";
		?>
		<button type="submit" class="btn btn-primary btn-block"><b> ろ　ぐ　い　ん　♂ ♂ </b></button>
	</div>
</div>

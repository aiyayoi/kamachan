<h1>かまったー</h1>
<p>MySampleData Index View</p>

ログイン済み：<?php print(h($user['username'])); ?>さん<br />
<?php print($this->Html->link('ログアウト', 'logout')); ?>
<br>
<?php foreach($kams as $kam): ?>
<?php
	echo $kam['User']['name'];
	echo $kam['Kamatta']['body'];
	echo $kam['Kamatta']['type'];
	echo $kam['Kamatta']['created'];
;?><br>
<a href="#">a</a>
<?php	endforeach;
?>

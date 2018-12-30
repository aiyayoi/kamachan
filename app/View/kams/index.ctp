
<h1>index Page</h1>
<p>this is test View</p>
<p>message:<?php echo $msg; ?></p>
<p></p>
<p>Data.</p>
<div>
	<ul>
		<?php foreach($datas as $data): ?>
		<li><?php echo $data; ?></li>
		<?php endforeach; ?>
	</ul>
</div>
<div>
<p>ノーマルフォーム
	<form method="post" action="sample/form" name="form1">
		<div><input type="text" name="text1" id="text1"></div>
		<div><input type="checkbox" name="check1" id="check1">
			<label for="check1">check1</label></div>
		<div><input type="radio" value="radio_A" name="radio1" id="radio_a">
			<label for="radio_a">Radio A</label>
			<input type="radio" value="radio_B" name="radio1" id="radio_b">
			<label for="radio_b">Radio B</label>
		</div>
		<div><input type="submit" value="送る">
	</form>
</p>
</div>
<div>
	<h1>Form Helper</h1>
	<p><?php echo $result; ?></p>
	<p><?php
		echo $this->Form->create(false,array('type'=>'post','url'=>'index'));
		echo $this->Form->label('text1',"message");
		echo $this->Form->text('text1');
		echo $this->Form->checkbox('check1');
		echo $this->Form->label('check1',"checkbox1");
		echo $this->Form->radio('radio1',
			array('male'=>'男性',
				'female'=>'女性'));
		echo $this->Form->select('select1',
			array("Mac"=>'マック',
				"Windows"=>'ウィンドウズ',
				"Linux"=>'リナックス'));
		echo $this->Form->end("送信");
	?></p>
</div>


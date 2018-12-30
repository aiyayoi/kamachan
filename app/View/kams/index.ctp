<div class="col-12" style="margin:10px;">
	<h1>かまった</h1></br>
	<p>MySampleData Index View</p></br>

	<ul class="nav nav-tabs fixed-top nav-justified" style="background:grey;">
   <li class="nav-item">
 <a href="/okamanZ/" class="nav-link active">ぜん</a>
   </li>
   <li class="nav-item">
 <a href="/okamanZ/kamattas" class="nav-link">かま友</a>
   </li>
   <li class="nav-item">
 <a href="" class="nav-link">こみゅ１</a>
   </li>
   <li class="nav-item">
 <a href="/okamanZ/Users" class="nav-link">こみゅ1２</a>
   </li>
 </ul>

	<?php foreach($kams as $kam): ?>
		<?php
		echo "<div class='row'  id='kadomaruW'>";
			echo "<div class='col-3'>";
				echo $this->Html->image('testicon.jpg', array('id' => 'user_icon'));
				echo "</br><p id='timestamp'>XX時間前</p>";
			echo "</div>";
			echo "<div class='col-8' style='margin:10px 0 0 0;'>";
				echo "<strong>";
				echo $kam['User']['name'];
				echo "</strong></br>";
				echo $kam['Kamatta']['body'];
				echo "</br>";
				echo "<div class='row'>";
					echo "<button type='button' class='btn col-5' id='button_don'>どんだけ</button>";
					echo "<button type='button' class='btn col-5' id='button_don'>コメント</button>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
		;?>
	<?php	endforeach;?>
</div>

<body style="padding-bottom:4.5rem;">
  <nav class="navbar navbar-light fixed-bottom" style="background-color:rgba(0,0,0,0.6);" >
		<?php
			echo $this->Form->create('Kamatta');
			echo $this->Form->hidden('users_id',array('value'=>$user['id']));
			echo $this->Form->text('body',array('class' => 'form-control-sm col-9'));
		 ?>
		 <button type="submit" class="btn btn-primary col-2"><b> ♂ </b></button>
  </nav>

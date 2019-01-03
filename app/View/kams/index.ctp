<div class="col-12">
	<h1>かまった</h1></br>
	<!-- モーダルの設定 -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">アイコンの変更</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php
            echo $this->form->create('Icon',array('type' => 'file'));
            echo $this->form->input('image',array('type' => 'file', 'label' => 'アイコン'));
            ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
          <button type="submit" class="btn btn-primary">変更を保存</button>
        </div><!-- /.modal-footer -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
	<?php foreach($kams as $kam): ?>
		<?php
		echo "<div class='row no-gutters'  id='kadomaruW'>";
			echo "<div class='col-3' style='padding:10px;'>";
				echo $this->Html->image('/users/showimage/' .$kam['User']['id'], array('id' => 'user_icon'));
				echo "</br><p id='timestamp'>XX時間前</p>";
			echo "</div>";
			echo "<div class='col-9' style='margin-top:10px;padding-right:5px; padding-left:10px;'>";
				echo "<strong>";
				echo $kam['User']['name'];
				echo "</strong></br><p>";
				echo $kam['Kam']['body'];
				echo "</p></br>";
				echo "<div class='row' style='margin-top:-30px; padding-bottom:10px;'>";
					echo "<button type='button' class='btn col-5 btn-sm' id='button_don'>どんだけ</button>";
					echo "<button type='button' class='btn col-5 btn-sm' id='button_don'>コメント</button>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
		;?>
	<?php	endforeach;?>
</div>

<body style="padding-bottom:4.5rem;">
  <nav class="navbar navbar-light fixed-bottom" style="background-color:rgba(0,0,0,0.6);" >
		<?php
			echo $this->Form->create('Kam');
			echo $this->Form->hidden('users_id',array('value'=>$user['id']));
			echo $this->Form->text('body',array('class' => 'form-control-sm col-9'));
		 ?>
		 <button type="submit" class="btn btn-primary col-2"><b> ♂ </b></button>
  </nav>

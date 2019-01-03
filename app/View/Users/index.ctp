<div class="col-12">

  <div class="col-12 clearfix">
    <div class="float-right">
      <button type='button' class='btn col-12 btn-sm'
       style="background: #defcfc; margin-bottom:-10px;">編集</button>
    </div>
  </div>
  <div class="row no-gutters" id="kadomaruB"  style="padding:10px;">
    <button type="button" class="btn col-4" data-toggle="modal" data-target="#myModal">
      <?php echo $this->Html->image('/users/showimage/' .$user['id'], array('id' => 'user_icon')); ?>
    </button>
    <div class="col-8" style="padding-left:10px; margin-bottom:10px;">
    <strong><?php echo $user['name'] ;?></strong>
    </br>
    紹介文紹介文紹介うぶんしょうかいぶんしょう
    </div>
    <button type='button' class='btn col-5 btn-sm' id='button_don'>増どんだけ1000</button>
    <div class="col-1"></div>
    <button type='button' class='btn col-5 btn-sm' id='button_don'>✍こめんと5000</button>
  </div>

  <div class="row no-gutters" id="kadomaruW"  style="padding:10px;">
    かまての未読コメント
  </div>

  <div class="row no-gutters" id="kadomaruW"  style="padding:10px;">
    コメントして返信未読
  </div>


<body style="padding-bottom:4.5rem;">
  <nav class="navbar navbar-light fixed-bottom" style="background-color:rgba(0,0,0,0.6);" >
    <?php echo $this->Html->link(
        'ろぐいん',
        array('controller' => 'users', 'action' => 'login'),
        array('class' => 'btn btn-primary col-5', 'role' => 'button')
    ); ?>

    <?php echo $this->Html->link(
        'おかま登録',
        array('controller' => 'users', 'action' => 'singup'),
        array('class' => 'btn btn-success col-5', 'role' => 'button')
    ); ?>
  </nav>
</body>
</div>
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
          echo $this->Form->create('Icon',array('type' => 'file'));
          echo $this->Form->input('image',array('type' => 'file', 'label' => 'アイコン'));
          ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-primary">変更を保存</button>
      </div><!-- /.modal-footer -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

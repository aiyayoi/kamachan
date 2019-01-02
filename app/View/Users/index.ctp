<div class="col-12">
  <h1>まいぺ～じ</h1></br>

  ログイン済み：<?php print(h($user['username'])); ?>さん<br />
  <?php print($this->Html->link('ログアウト', 'logout')); ?>

  <div class="row" id="kadomaruB">
    <div

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

</div>

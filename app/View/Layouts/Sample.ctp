<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>

  <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('Sample');
    echo $this->Html->css('clingify');
    echo $this->Html->script('jquery.clingify.js');
    echo $this->Html->script('ofi.min.js');
		echo $scripts_for_layout;
	?>
  <script>
    objectFitImages();
  </script>
</head>
<body style="padding-top:2.5rem;">

			<?php echo $this->element('header'); ?>

<button type="button" class="btn rounded-circle p-0" id="maruboutton" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">＋</button>
<div class="collapse" id="collapseExample" style="position:fixed; top:40%;right: 20%;bottom: 0;left:0 %; z-index:10000">
<div class="card bg-light">
<div class="card-header">めにゅ～</div>
  <div class="card-body">
    <?php echo $this->html->link('ほ～む','/');?>
  </div>
  <div class="card-body">
    <?php echo $this->html->link('かまった','/kams');?>
  </div>
  <div class="card-body">
    <?php echo $this->html->link('こみゅ','/');?>
  </div>
  <div class="card-body">
    <?php echo $this->html->link('まいぺ～じ',
                                  array(
                                    'controller' => '/users',
                                    'action' => 'index',
                                    ));?>
  </div>
</div>
</div>



  <div class="container-fluid">
    <div class="row no-gutters">
      <?php echo $this->Session->flash(); ?>
      <?php echo $content_for_layout; ?>
    </div>
    <div class="row">
      <div class="col-2" style="background-color:red;">Red</div>
      <div class="col-8" style="background-color:blue;">Blue</div>
      <div class="col-2" style="background-color:yellow;">Yellow</div>
    </div>
    <div class="row">
      <button type="button" class="btn btn-default">Default</button>
      <button type="button" class="btn btn-primary">Primary</button>
      <button type="button" class="btn btn-success">Success</button>
      <button type="button" class="btn btn-info">Info</button>
      <button type="button" class="btn btn-warning">Warning</button>
      <button type="button" class="btn btn-danger">Danger</button>
      <button type="button" class="btn btn-link">Link</button>
    </div>
  </div>
</body>
</html>

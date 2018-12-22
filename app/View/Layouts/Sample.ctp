<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('Sample');
    echo $this->Html->css('clingify');
    echo $this->Html->script('jquery.clingify.js');
		echo $scripts_for_layout;
	?>
  <script type="text/javascript">
  jQuery(function() {
  jQuery('nav').clingify();
});
</script>
</head>
<body>
  <nav><!-- ←jQueryで指定した通りnavタグで作成 -->
		<ul>
			<li><a href="#">HOME<span>ホーム</span></a></li>
			<li><a href="#">SERVICE<span>サービス</span></a></li>
			<li><a href="#">ABOUT US<span>企業概要</span></a></li>
			<li><a href="#">SHOP LIST<span>取扱店舗一覧</span></a></li>
			<li><a href="#">CONTACT US<span>お問い合わせ</span></a></li>
		</ul>
	</nav>
			<?php echo $this->element('header'); ?>

			<?php echo $this->Session->flash(); ?>

				<?php echo $content_for_layout; ?>

  <div class="container-fluid">
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
</body>
</html>

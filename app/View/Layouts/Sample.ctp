<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('Sample');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<?php echo $this->element('header'); ?>
		</div>
		<div id="content">
			<div id="leftmenu">
				<?php echo $this->element('leftmenu'); ?>
			</div>
			<?php echo $this->Session->flash(); ?>
			<div id="main">
				<?php echo $content_for_layout; ?>
			</div>
		</div>

		</div>
	</div>
</body>
</html>



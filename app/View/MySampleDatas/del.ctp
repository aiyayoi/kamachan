<h1>Delete test</h1>
	<?php
		echo $this->Form->create('MySampleData');
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->end('submit');
	?>
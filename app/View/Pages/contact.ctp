<div class="contact-form">
	<h1>Contact me</h1>
	<?php
	echo $this->Form->create('Contact', array('novalidate' => 'novalidate'));
	echo $this->Form->input('email');
	echo $this->Form->input('subject');
	echo $this->Form->input('message', array('rows' => '3'));
	echo $this->Form->end('Save Post');
	?>
</div>
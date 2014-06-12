<div class="mainTopics form">
<?php echo $this->Form->create('MainTopic'); ?>
	<fieldset>
		<legend><?php echo __('Add Main Topic'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('body');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Main Topics'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sub Topics'), array('controller' => 'sub_topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Topic'), array('controller' => 'sub_topics', 'action' => 'add')); ?> </li>
	</ul>
</div>

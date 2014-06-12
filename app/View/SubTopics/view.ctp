<div class="subTopics view">
<h2><?php echo __('Sub Topic'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subTopic['SubTopic']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Main Topic'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subTopic['MainTopic']['title'], array('controller' => 'main_topics', 'action' => 'view', $subTopic['MainTopic']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($subTopic['SubTopic']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($subTopic['SubTopic']['body']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sub Topic'), array('action' => 'edit', $subTopic['SubTopic']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sub Topic'), array('action' => 'delete', $subTopic['SubTopic']['id']), null, __('Are you sure you want to delete # %s?', $subTopic['SubTopic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Topics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Topic'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Main Topics'), array('controller' => 'main_topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Main Topic'), array('controller' => 'main_topics', 'action' => 'add')); ?> </li>
	</ul>
</div>

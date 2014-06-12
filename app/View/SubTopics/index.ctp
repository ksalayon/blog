<div class="subTopics index">
	<h2><?php echo __('Sub Topics'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('main_topic_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subTopics as $subTopic): ?>
	<tr>
		<td><?php echo h($subTopic['SubTopic']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subTopic['MainTopic']['title'], array('controller' => 'main_topics', 'action' => 'view', $subTopic['MainTopic']['id'])); ?>
		</td>
		<td><?php echo h($subTopic['SubTopic']['title']); ?>&nbsp;</td>
		<td><?php echo h($subTopic['SubTopic']['body']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subTopic['SubTopic']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subTopic['SubTopic']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subTopic['SubTopic']['id']), null, __('Are you sure you want to delete # %s?', $subTopic['SubTopic']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Sub Topic'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Main Topics'), array('controller' => 'main_topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Main Topic'), array('controller' => 'main_topics', 'action' => 'add')); ?> </li>
	</ul>
</div>

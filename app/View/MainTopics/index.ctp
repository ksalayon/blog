<div class="mainTopics index">
	<h2><?php echo __('Main Topics'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mainTopics as $mainTopic): ?>
	<tr>
		<td><?php echo h($mainTopic['MainTopic']['id']); ?>&nbsp;</td>
		<td><?php echo h($mainTopic['MainTopic']['title']); ?>&nbsp;</td>
		<td><?php echo h($mainTopic['MainTopic']['body']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mainTopic['MainTopic']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mainTopic['MainTopic']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mainTopic['MainTopic']['id']), null, __('Are you sure you want to delete # %s?', $mainTopic['MainTopic']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Main Topic'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sub Topics'), array('controller' => 'sub_topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Topic'), array('controller' => 'sub_topics', 'action' => 'add')); ?> </li>
	</ul>
</div>

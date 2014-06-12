<div class="mainTopics view">
<h2><?php echo __('Main Topic'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mainTopic['MainTopic']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($mainTopic['MainTopic']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($mainTopic['MainTopic']['body']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Main Topic'), array('action' => 'edit', $mainTopic['MainTopic']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Main Topic'), array('action' => 'delete', $mainTopic['MainTopic']['id']), null, __('Are you sure you want to delete # %s?', $mainTopic['MainTopic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Main Topics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Main Topic'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Topics'), array('controller' => 'sub_topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Topic'), array('controller' => 'sub_topics', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sub Topics'); ?></h3>
	<?php if (!empty($mainTopic['SubTopic'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Main Topic Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mainTopic['SubTopic'] as $subTopic): ?>
		<tr>
			<td><?php echo $subTopic['id']; ?></td>
			<td><?php echo $subTopic['main_topic_id']; ?></td>
			<td><?php echo $subTopic['title']; ?></td>
			<td><?php echo $subTopic['body']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sub_topics', 'action' => 'view', $subTopic['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sub_topics', 'action' => 'edit', $subTopic['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sub_topics', 'action' => 'delete', $subTopic['id']), null, __('Are you sure you want to delete # %s?', $subTopic['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sub Topic'), array('controller' => 'sub_topics', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>


<div class="tags view">

<div class="related">
	<div class="related-posts"><?php echo __('Related Posts'); ?></div>
	<?php if (!empty($posts)): ?>
		<?php foreach ($posts as $post): ?>
			<div class= "tag-posts grid-parent grid-100">
				
				<div class= "tag-post-title grid-100">
					<h1><?php echo $post['Post']['title']; ?></h1>
				</div>	
				<div class= "tag-post-id grid-100">
					ID:
					<?php echo $post['Post']['id']; ?>
				</div>
				<div class= "tag-post-category-id grid-100">
					Category ID:
					<?php echo $post['Post']['category_id']; ?>
				</div>	
				<div class= "tag-post-body grid-100">
					<?php echo $post['Post']['body']; ?>
					</div>
				<div class="tag-post-actions grid-100">
					<div>
						<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $post['Post']['id'])); ?>
					</div>
					
				</div>
			</div>
		<?php endforeach; ?>
		</div>
		
	<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>	
	</p>
	<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
	</div>
	
	<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

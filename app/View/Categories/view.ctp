<div class="category-title grid-40">
<?php echo h($category['Category']['title']); ?>
</div>
<p><?php echo h($category['Category']['description']); ?></p>


<?php foreach($posts as $pKey => $pVal): ?>
	
	
		<div class="grid-parent grid-100">
			<div class="blog-info grid-100">
				<div class="blog-title">
					<div class="grid-100"><?php echo $pVal['Post']['title']; ?></div>
				</div>
				<div class="blog-date">
				<p><?php 
					echo date('l jS \of F Y h:i:s A', strtotime($pVal['Post']['created']));
				?></p>
				</div>
		
					<p> <?php echo truncate($pVal['Post']['body'], 500); ?> </p>
					
					<?php 
						echo $this->Html->link(
						    'Read more...',
						    '/posts/view/' . $pVal['Post']['id'],
						    array('class' => 'read-more')
						);
					?>
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
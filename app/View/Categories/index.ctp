<h1>Categories</h1>

<p><?php echo $this->Html->link('Add Category', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Title</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->
	
    <?php foreach ($categories as $categories): ?>
    <tr>
        <td><?php echo $categories['Category']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($categories['Category']['title'], array('action' => 'view', $categories['Category']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $categories['Category']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $categories['Category']['id'])); ?>
        </td>
        <td>
            <?php echo $categories['Category']['created']; ?>
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
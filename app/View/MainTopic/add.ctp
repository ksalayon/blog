<div class="mainTopic form">
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
	<h3><?php echo __('Actionz'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Main Topic'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sub Topics'), array('controller' => 'sub_topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Topic'), array('controller' => 'sub_topics', 'action' => 'add')); ?> </li>
	</ul>
</div>

<script>
   $(document).ready(function(){
       
       CKEDITOR.replace( 'MainTopicBody', {
            // Load the simplebox plugin.
            extraPlugins: 'simplebox',
        
        
            // The following options are set to make the sample more clear for demonstration purposes.
        
            // Set height to make more content visible.
            height: 500,
            // Rearrange toolbar groups and remove unnecessary plugins.
            toolbarGroups: [
                { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
                { name: 'links' },
                { name: 'insert' },
                { name: 'document',    groups: [ 'mode' ] },
                '/',
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                { name: 'paragraph',   groups: [ 'list', 'indent' ] },
                { name: 'styles' },
                { name: 'about' }
            ]
        } );
   });
   
</script>
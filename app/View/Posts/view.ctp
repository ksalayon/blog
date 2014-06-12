<?php
$cats = $this->requestAction('/categories/get_categories_and_latest_post');
//pr($cats);
?>
	
<div class="grid-100 post-section">


<div class="grid-100">
	<div class="post-title grid-100">
		<h1><?php echo h($post['Post']['title']); ?></h1>
	</div>
	<div class="post-image grid-100">
			<div class="post-body">
				<div class="tilt-pic">
					<?php echo $this->Blog->thumbnail($post['Post']['featured_image'], 300, 300); ?>
				</div>
				<?php echo $post['Post']['body']; ?>
				
			</div>
		</div>
	</div>
</div>


<!-- Comments go here3 -->
<div class="comments grid-parent grid-100">
	<h1>Comments Section</h1>
	<?php foreach($post['Comment'] as $cKey => $cVal): ?>
		<div class="grid-100 comment-row">
			<div class="comment-username grid-100"><?php echo $cVal['name'] . ' ' ; ?></div>
			<div class="comment-created grid-100"><?php echo $cVal['created']; ?></div>
			<div class="comment-body grid-90"><?php echo $cVal['comment']; ?></div>
			
		</div>
	<?php endforeach; ?>
</div>

<!-- Comment Form -->
<div class="comments-form grid-100">
<?php

	echo $this->Form->create('Post');
	?>
		<legend><label> Add a comment here </label></legend>
	<?php
	echo $this->Form->input('Comment.post_id', array('type' => 'hidden', 'value' => $post['Post']['id']));
	echo $this->Form->input('Comment.name');
	echo $this->Form->input('Comment.emailAddress');
	echo $this->Form->input('Comment.comment', array('type' => 'textarea'));
	echo $this->Form->end('Submit the comment', array('class' => 'Submit-comment', 'onsubmit'=> 'return confirm("are you sure?");'));
	

//$post['Comment']
?>
</div>



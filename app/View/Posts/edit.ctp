<h1>Edit Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('Post.category_id', array('type' => 'select', 'options' => $categories));
echo $this->Form->input('Tag', array('type' => 'select', 'multiple' => true, 'options' => $tags));
echo $this->Form->input('Post.featured_image', array('type' => 'file'));
echo $this->Form->end('Save Post');
?>
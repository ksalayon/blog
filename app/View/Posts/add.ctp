<h1>Add Post</h1>
<?php
echo $this->Form->create('Post', array('type' => 'file'));
echo $this->Form->input('title');
echo $this->Form->input('Post.featured_image', array('type' => 'file'));
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('Post.category_id', array('type' => 'select', 'options' => $categories));
echo $this->Form->input('Tag', array('type' => 'select', 'multiple' => true, 'options' => $tags));
echo $this->Form->end('Save Post');
?>

<script>
$(document).ready(function() {
	var availableTags = [];
	
	var request = $.ajax({
	  url: "http://localhost/tags/get_list/.json",
	  type: "GET",
	  dataType: "json"
	});
	
	request.done(function( response ) {
		//availableTags = response.result;
		$.each(response.result, function(index, obj){
			availableTags.push(obj);
		});
		
		function split( val ) {
	      return val.split( /,\s*/ );
	    }
	    
	    function extractLast( term ) {
	      return split( term ).pop();
	    }
 
	    $( "#PostTags" )
	      // don't navigate away from the field on tab when selecting an item
		  .bind( "keydown", function( event ) {
		    if ( event.keyCode === $.ui.keyCode.TAB &&
		        $( this ).data( "ui-autocomplete" ).menu.active ) {
		      event.preventDefault();
		    }
		  })
		  .autocomplete({
		    minLength: 0,
		    source: function( request, response ) {
		      // delegate back to autocomplete, but extract the last term
		      response( $.ui.autocomplete.filter(
		        availableTags, extractLast( request.term ) ) );
		    },
		    focus: function() {
		      // prevent value inserted on focus
		      return false;
		    },
		    select: function( event, ui ) {
		      var terms = split( this.value );
		      // remove the current input
		      terms.pop();
		      // add the selected item
		      terms.push( ui.item.value );
		      // add placeholder to get the comma-and-space at the end
		      terms.push( "" );
		      this.value = terms.join( ", " );
		      return false;
		    }
		  });
	  
	});
});

</script>

	
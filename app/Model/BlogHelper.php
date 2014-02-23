<?php
//To access this helper globally, use this helper on your AppController.php
// like this: public $helpers = array('Blog', 'Html', 'Form', 'Session');

App::uses('AppHelper', 'View/Helper');

class BlogHelper extends AppHelper
{
    var $helpers = array('Html', 'Form');

    /* 
    * Use this helper method in your view like this
    *    $img = 'test.png';
    *    $width = 100;
    *    $height = 100;
    *
    *    echo $this->Blog->thumbnail($img, $width, $height);
    * $this->Form->input
    */
    function thumbnail($pic, $width = 100, $height = 100, $dir = null, $style = array(), $cropRatio = '1:1')
    {
        if($dir == null)
        {
            return $this->output($this->Html->image("/files/featured_images/image.php/" . $pic . "?cropratio=".$cropRatio."&width=".$width."&height=".$height."&image=/app/webroot/files/featured_images/" . $pic . ""
        , $style ));
        }
        else
        {
            return $this->output($this->Html->image("/files/featured_images/image.php/".$dir."/" . $pic . "?cropratio=".$cropRatio."&width=".$width."&height=".$height."&image=/app/webroot/files/featured_images/".$dir."/" . $pic . ""
        , $style ));
        }
        
    }


}
?>
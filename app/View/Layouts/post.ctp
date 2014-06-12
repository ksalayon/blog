<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Loved+by+the+King');
		//dependencies for unsemantic responsive layout system
		echo '<!--[if lt IE 9]>'. $this->Html->script(array('unsemantic/html5')) . '<![endif]-->';
		
		echo '<!--[if (gt IE 8) | (IEMobile)]><!-->'. $this->Html->css(array('unsemantic/unsemantic-grid-responsive-tablet')) . '<!--<![endif]-->';
		
		echo '<!--[if (lt IE 9) & (!IEMobile)]>'. $this->Html->css(array('unsemantic/ie')) . '<![endif]-->';

		echo '<!--[if IE 6]>'.$this->Html->css('ie6').'<![endif]-->';
		echo '<!--[if IE 7]>'.$this->Html->css('ie').'<![endif]-->';
		

		
		echo $this->Html->css('blog');
		echo $this->Html->css('post');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container" class="grid-container">
		
		</div>
		<div id="content" class="grid-100 grid-parent">
			

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		
		
		<div id="footer" class="grid-50	push-25 grid-parent">
			<div class="grid-100">
					<ui>
					<li><a href="/home/contact">Email Jack</a></li>
					<li><a href ="/home/portfolio">Portfolio</a></li>
					<li><a href="/home/index">Home</a></li>
					</ui>
				</div>
			</div>
	</div>
	
	
	<?php
		echo $this->Html->script(array('jquery-2.0.3.min'));
		//echo $this->Html->script(array('tinymce/tinymce.min.js'));
	?>
	
	
	
	<?php echo $this->element('sql_dump'); ?>

</body>
</html>

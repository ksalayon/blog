<?php
$cats = $this->requestAction('/categories/get_categories_and_latest_post');
?>
	<div class = "grid-100 contact-me">
				<li><a href="/home/contact">Contact me, Man.</a></li>
		</div>
		
	<div id="blog" class="grid-100 ">
	<div class= "blog-top grid-100 push-30">Blog after blog</div>
	
	

	
	
	<div class="grid-70 grid-parent">
		<?php foreach($cats as $cKey => $cVal): ?>
			
			
			<div class="grid-parent grid-100">
				<div class="blog-content grid-100">
					<div class="cat-title">
						<h3 class="grid-100"><?php echo $cVal['Category']['title']; ?></h3>
					</div>
					<div class='blog-info'>
						<h5 class="post-title grid-100"><?php echo $cVal['Post'][0]['title']; ?></h5>
						<?php 
							
							echo $this->Html->image(
								'/files/featured_images/' . $cVal['Post'][0]['featured_image'],
								 array('alt' => 'CakePHP')
							);
						?>
						<p> 
							<?php echo truncate($cVal['Post'][0]['body'], 750); ?> 
						</p>
						
						
							
						<?php 
							echo $this->Html->link(
							    'Read more...',
							    '/posts/view/' . $cVal['Post'][0]['id'],
							    array('class' => 'read-more')
							);
						?>
							
						<div class="blog-date">
							<p><?php 
								echo date('l jS \of F Y h:i:s A', strtotime($cVal['Post'][0]['created']));
							?></p>
						</div>
						
						<div class="grid-100 grid-parent">
							<?php foreach($cVal['Post'][0]['Tag'] as $tKey => $tVal): ?>
								<a href="/tags/view/<?php echo $tVal['id']; ?>"  class="blog-tags">
									<?php echo $tVal['title']  . '' . " | "; ?>
								</a>
							<?php endforeach; ?>
						</div>
						
					</div>
				
					
						
				</div>
					
			</div>
		
		<?php endforeach; ?> 
	</div>
	<div class="grid-30 grid-parent">
		
			<div class="cat-nav" align="center">
				<ul>
					<li>
						<a href= "/categories/view/1">World</a>
					</li>
					<li>
						<a href= "/categories/view/2">Politics</a>
					</li>
					<li>
						<a href= "/categories/view/3">Sport</a>
					</li>
					<li>
						<a href= "/categories/view/4">Living</a>
					</li>
					<li>
						<a href= "/categories/view/5">Entertainment</a>
					</li>
					<li>
						<a href= "/categories/view/6">Technology</a>
					</li>
					<li>
						<a href= "/categories/view/7">National</a>
					</li>
					<li>
						<a href= "/categories/view/8">Global</a>
					</li>
				</ul>
			</div>
	</div>
</div>
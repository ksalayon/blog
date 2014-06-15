<div>
	<top>This is the step-by-step guide to using IMMagineNZ's CRM!</top>
</div>

<div class ="grid-parent grid-100">
	<div class="manual-index grid-100">
		<h1>This is the table of contents</h1>
		<div class = "list-of-contents grid-100">
			<ul>
			    <div>
                    <li>
                        <a href="#manual-intro" rel="nofollow">- Introduction to CRM</a>
                    </li>
                </div>
                <div>
                    <li>
                        <a href="#manual-module" rel="nofollow">- A step-by-step guide to each module:</a>
                    </li>
                </div>
                
                <?php
                    foreach($mainTopics as $mtKey => $mtVal)
                    {
                        ?>
                        <div>
                            <li>
                                <a href="#<?php echo strtolower($mtVal['MainTopic']['title']); ?>" rel="nofollow"><?php echo $mtVal['MainTopic']['title']; ?></a>
                            </li>
                        </div>
                        
                        <?php
                        if(!empty($mtVal['SubTopic']))
                        {
                            ?>
                                <div class="nav">
                            <?php
                            foreach($mtVal['SubTopic'] as $stKey => $stVal)
                            {
                                ?>
                                    <div>
                                        <li>
                                            <a href="#<?php echo strtolower($stVal['title']); ?>" rel="nofollow">- <?php echo $stVal['title']; ?></a>
                                        </li>
                                    </div>
                                <?php
                            }
                            
                            ?>
                                </div>
                            <?php
                        }
                        
                    }
                ?>
				

	<div class= "manual-intro grid-100">
		<h1>This is the intro and overview section</h1>
		<a name= "manual-intro"></a>
			<h3>About IMMagine NZ:</h3>
				<p>With a residence success rate higher than 99% and more than twenty years of experience guiding migrants through the immigration process, you are in the right place if you're looking for a new life in New Zealand.</p>
				<p>Unlike many of our competitors, we focus purely on immigration to New Zealand, which makes us uniquely placed to advise and guide you through the relocation process. All of our advisers are government licensed by the Immigration Advisers Authority.</p>
				<p>Having assisted thousands of families to make the move, we believe that there is no better testimonial to the quality of our service than from the people who have used it before. Click here to read what our clients have to say.</p>
			<h3>What is a CRM?</h3>
				<p>Customer relationship management (CRM) is a system for managing a company’s interactions with current and future customers. It involves using technology to organize, automate and synchronize sales, marketing, customer service, and technical support.</p>
			<h3>How our CRM offers a competitive advantage:</h3>
				<p></p>
			<h3>Price packages and subscription fees:</h3>
				<p>------- THIS IS THE TABLES OF PRICE PACKAGES --------</p>
				
	</div>
	
	
<div class="manual-modules">
	<a name= "manual-module"></a>
	<H1>THIS IS THE MODULES SECTION</H1>
    <div class="main-topics">
	<?php
	   foreach($mainTopics as $mtKey => $mtVal)
       {
           ?>
           <div class="main-topic">
               <h3><?php echo $mtVal['MainTopic']['title']; ?></h2>
               <a name="<?php echo strtolower($mtVal['MainTopic']['title']); ?>"></a>
               <div class="body">
                   <?php echo $mtVal['MainTopic']['body']; ?>
               </div>
           </div>
           <ul class="sub-topics">
           <?php
           foreach($mtVal['SubTopic'] as $stKey => $stVal)
           {
               ?>
               <li>
                    <div>
                        <h2><?php echo $stVal['title']?>:</h3>
                        <div class="body">
                            <?php echo $stVal['body']?>
                        </div>
                    </div>
               </li>
               <?php
               
           }
           
           ?>
           </ul>
           <?php
       }
	?>
    </div>
</div>



<div class="manual-customisation grid-100">
	
	<h1>THIS IS THE CUSTOMISATION SECTION</h1>
	<a name= "manual-customisation"></a>
		<h3>How do I customise my CRM?</h3>
			<p></p>
		<h3>Why would I customise my CRM?</h3>
			<p>To add personality and convenience to your everyday life at work</p>
		<h3>Do I need to pay to customise?</h3>
			<p>ABSOLUTELY NOT - "It's free to be free"</p>
</div>

<div class="manual-troubleshoot grid-100">
	<a name= "manual-troubleshoot"></a>
	<h1>THIS IS TROUBLESHOOTING SECTION</h1>
</div>
<div class="manual-glossary grid-100">
	<a name= "manual-glossary"></a>
	<h1>THIS IS THE GLOSSARY SECTION</h1>
</div>
</div>

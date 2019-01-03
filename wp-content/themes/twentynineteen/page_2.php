<?php
/**
 *Template Name: page_2
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<style>
.content{
	    width: 75%;
        margin: 0 auto;
}
.partners{
	background-color: #000;
    color: #fff;
    padding: 2% 1% 4% 4%;
    margin-bottom: 1%;
    font-family: sans-serif;
    font-family: -webkit-body;
    font-size: large;
}
.feature{
    font-size: medium;
    font-family: -webkit-pictograph;
   /*  text-align: center; */
}
.hightlights{
	font-size: initial;
    font-family: -webkit-pictograph;
}
.feedback{
	
	font-size: large;
    font-family: auto;
}
.feedback .col-md-9{
	    font-size: initial;
        font-family: serif;
}
.feedback .row{
	margin-top: 1%;
    margin-bottom: 1%;
}
#features .row .col-md-6{
	text-align: -webkit-center;
    padding: 1% 1% 1% 1%;
}
.download{
	background-color: black;
    padding: 1% 1% 1% 1%;
    color: #ffff;
}
.download button{
	margin-left: 20%;
    margin-right: 20%;
	color: #fff;
    background-color: #79b923;
}
@media screen and (max-width: 910px) {
  .download button{
    font-size: small;
    font-family: -webkit-pictograph;
    padding: 2% 2% 2% 2% !important;
  }
}


.download .buynow{
	background: #eec710;
    color: #333;
    border-color: #746108;
}
.benifits .col-md-9{
	font-size:medium;
}
.benifits ul li {
	list-style-image:url("<?php echo bloginfo('template_url'); ?>/images/plus.png");
	text-align: -webkit-left !important;
	
}
.features1 ul li{
	list-style-image:url("<?php echo bloginfo('template_url'); ?>/images/right.png");
	text-align: -webkit-left !important;
} 
.requires{
	font-size: large !important;
}
.requires hr{
	height:1px !important;
}
.init{
	font-size: large;
    font-family: serif;
}
</style>
			<div class="container-fluid">
				<div class="container">
				  <div class="content">
					  <div class="row init">
					   <h4>Slow PC? Optimize your slow computer for a better performance and extend the life of your PC</h4>
						  <div class="col-md-12">
						  <p>Has your PC slowed down lately? Have you ever felt irritated and annoyed while sitting in front of your slow Computer, impatiently staring at the screen? If you recognize any of this, don't panic! There are numerous reasons for slow PCs and any PC might get slower with time. It just means that your PC needs professional help!</p>
						  </div>
					  </div>
	                  <div class="row">
						  <div class="col-md-6">
							 <button class="btn-success">Start Download For Windows</button>
						  </div>
						  <div class="col-md-6">
						  <img src="<?php bloginfo('template_url');?>/images/microsoft.png" class="image">
						  </div>
					  </div>			  
                      <div class="cls"></div>
					  <div class="row partners">
					   <P>42,033,216 PC users have tried a free BBS scan. 193 users tried a scan in the last 24 hours.</P>
					      <div class="col-md-6"></div>
						  <div class="col-md-6 pull-right">
						      <div class="col-md-4"><img src="<?php bloginfo('template_url');?>/images/partner_1.jpg"></div>
							  <div class="col-md-4"><img src="<?php bloginfo('template_url');?>/images/partner_2.jpg"></div>
							  <div class="col-md-4"><img src="<?php bloginfo('template_url');?>/images/partner_3.jpg"></div>
 						  </div>
					  </div>	 			 
				      <div class="row feature">
						  
						  <div class="col-md-8">
						   <h3> Get your PC Scanned now</h3>
								<p>Scan your slow PC using SLOW-PC BBS to fix errors!</p>
						  </div>
						  <div class="col-md-4">
						   <img src="<?php bloginfo('template_url');?>/images/feature_1.png" class="image">
						  </div>
						  
						  <div class="col-md-4">
						   <img src="<?php bloginfo('template_url');?>/images/feature_2.png" class="image">
						  </div>
						   <div class="col-md-8">
						   <h3>Enjoy a faster PC</h3>
								<p>Your slow PC is now faster, boots faster and has no registry errors!</p>
						  </div>
				       </div>
				      <div class="row feature">
							  <div class="col-md-8">
							   <h3> Get your PC Scanned now</h3>
									<p>Scan your slow PC using SLOW-PC BBC to fix errors!</p>
							  </div>
							  <div class="col-md-4">
							   <img src="<?php bloginfo('template_url');?>/images/feature_3.png" class="image">
							  </div>
					  </div>
					  <div class="row hightlights">
					       <h4>Highlights in the new version are:</h4>
						    <div class="col-md-4">
						      <div class="row">
						           <div class="col-md-12"> <img src="<?php bloginfo('template_url');?>/images/feature_5.png" class="image"></div></div>
								   <div class="col-md-12"><p>A new Registry Defrag utility which will defragment and then compact the Windows registry to reduce the space and amount of memory it takes up. 
                                    Removing wasted space will improve the performance of the whole system. 
								   </p></div>
						    </div>
							  
                            <div class="col-md-4">
						      <div class="row">
						           <div class="col-md-12"><img src="<?php bloginfo('template_url');?>/images/feature_4.png" class="image"></div></div>
								   <div class="col-md-12"><p>An updated interface gives a better overview of the process of finding and correcting errors and speeding up a slow PC.
                                   The new interface is also more user-friendly and simply more pleasing to the eye! 
								   </p></div>
						    </div>   
						     <div class="col-md-4">
						      <div class="row">
						           <div class="col-md-12"><img src="<?php bloginfo('template_url');?>/images/feature_3.png" class="image"></div></div>
								   <div class="col-md-12"><p>A better engine for locating errors has been implemented.Our programmers have done a great job of improving the performance of the error search process and the engine will now do an even more thorough analysis of your system.
								   </p></div>
						    </div> 
					  </div>
				  <div class="feedback">
					  <div class="row">
						   <div class='col-md-3'>
						   <img src="<?php echo bloginfo('template_url');?>/images/magzine_1.png" class="image"/>
						   </div>
						   <div class="col-md-9">
						   "I was happy to see that it backed up all found items before actually doing its cleanup job. And it didn't take very long to complete. When finished it reported that my system's health was now "VERY GOOD." Hooray!"
						   </div>
					  </div>
					  <div class="row">
						   <div class='col-md-3'>
						   <img src="<?php echo bloginfo('template_url');?>/images/magazine_3.jpg" class="image"/>
						   </div>
						   <div class="col-md-9">
						   "I was happy to see that it backed up all found items before actually doing its cleanup job. And it didn't take very long to complete. When finished it reported that my system's health was now "VERY GOOD." Hooray!"
						   </div>
					  </div>
				  </div>
				  <div class="features1" >
				      <div class="row">
						  <h5>SLOW-PC BigBite will speed up your PC by solving the following problems:</h5>
						  <hr style="margin:0 auto;">
						  <div class="col-md-6">
						    <ul>
							    <li>Invalid paths</li>
							    <li>Useless file extensions</li>
								<li>Obsolete software entries</li>
								<li>Non-existent shared dlls</li>
								<li>Invalid custom controls</li>
							</ul>
						     </div>
						  <div class="col-md-6">
						       <ul>
							      <li>Invalid add/remove programs</li>
								  <li>Empty uninstall entries</li>
								  <li>Non-existent startup programs</li>
								  <li>Invalid file associationsInvalid file associations</li>
								  <li>Un used help files</li>
						       </ul>
						  </div>
					  </div>
					  <div class="row">
						  <div class="col-md-12">
						  <p>BigBite uses the most advanced technologies available to analyze PC errors and speed up a slow PC. BigBite seeks out and removes all unused entries in your registry from failed software, driver installations and faulty uninstallations and optimizes Windows startup.
						Fixing the errors and trying to speed up your slow computer manually can take a lot of your precious time and can be very risky too! If you somehow delete central files it can cause your system to crash!</p>
						  </div>
					  </div>
				      <div class="row download">
					      <h5 class="text-center">The free version of SLOW-PC BBS will scan and fix your PC!</h5>
					      <div class="col-md-12">
						  <button>Start Download For Windows</button>
						  </div>
						  <div class="col-md-12">
							  <h5 class="text-center">The free version of SLOW-PC  will scan and fix your PC!</h5>
							  <div class="col-md-12">
								<button class="buynow">Start Download For Windows</button>
							  </div>
						  </div>
					  </div>
					  <div class="row benifits">
					     <h5>Help your computer become as good as brand new</h5>
					     <div class="col-md-6">
							  <ul>
							      <li>Invalid paths</li>
								  <li>SLOW-PC  helps to avoid system failure</li>
								  <li>Obsolete software entries</li>
								  <li>Non-existent shared dlls</li>
								  <li>Invalid custom controls</li>
							 </ul>
						  </div>
						 <div class="col-md-6">
						   <ul>
						      <li>Invalid add/remove programs</li>
							  <li>Empty uninstall entries</li>
							  <li>Non-existent startup programs</li>
							  <li>Invalid file associationsInvalid file associations</li>
							  <li>Unused help files</li>
						   </ul>
						 </div> 
					  </div>
					  <div class="row requires">
					       <p class="pull-left">SLOW-PC BBS requires:</p>
						   <div class="col-md-12">
						     <div class="row">
							  <div class="col-md-4">Operating System</div>
							  <div class="col-md-8">Microsoft Windows XP (SP2), Windows Vista, Windows 7, Windows 8/8.1 & Windows 10 (32bit and 64bit)</div>
						     </div>
							 <div class="row">
							  <div class="col-md-4">Disk Space</div>
							  <div class="col-md-8">15 MB</div>
						     </div>
							<div class="row">
							  <div class="col-md-4">Languages</div>
							  <div class="col-md-8">English, German, French, Spanish, Italian, Dutch, Japanese, Czech, Swedish, Greek, Portuguese, Finnish, Norwegian, Polish, Romanian, Croatian, Thai, Bulgarian, Turkish, Simplified Chinese, Traditional Chinese, Russian, Danish, Indonesian and Hungarian
                             </div>
						    </div>
						   </div>
					      </div>
				         </div>
				     <hr>
		          </div>
                </div>
            </div> 
			
<?php
get_footer();

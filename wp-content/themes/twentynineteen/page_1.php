<?php
/**
 *Template Name: page_1
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
body{
	background-color:#ffff !important;
	//background: transparent url(https://www.spamfighter.com/i/v3/backgrounds/pagehero-flexcontent-bg.png) repeat-y top center;
}
.cu_padding{
	padding-left: 9%;
    padding-right: 9%;
	
	font-size: 45px;
    line-height: 50px;
    color: #181818;
    font-family: 'Open Sans', sans-serif;
    font-weight: normal;
}
.para_pc{
	padding-left: 9%;
	font-size: 24px;
    line-height: 30px;
    color: #777;
    text-align: left;
    font-weight: 400;
    font-family: -webkit-body;
}
.download{
	padding-left: 20%;
    padding-right: 20%;
    margin-left: 18%;
    border-radius: 3% 3%;
	 
}
.inner_bbs{
	padding-top: 2% !important;
    background-color: #1b1b1b;
    color: #ffff;
    padding-left: 9%;
    padding-right: 9%;
    font-size: medium;
    padding-bottom: 2% !important;
    border-radius: 1% 1% !important;
}

.inner_bbs1{
	padding-left: 9%;
    padding-right: 9%;
    font-size: medium;
    padding-bottom: 2% !important;
    border-radius: 1% 1% !important;
}
.inner_bbs2{
	background-color: #1b1b1b;
    color: #ffff;
	padding-left: 23%;
    padding-right: 9%;
	padding-top:2%;
    font-size: medium;
    padding-bottom: 2% !important;
    border-radius: 1% 1% !important;
    font-family: none;
	margin-bottom:2%;
}
.bbs_para1{
	color: #999;
    font-family: serif;
    font-size: inherit;
	
}
.features ul li{
	list-style:none;
	color: #2d2d2d;
    font-size: 16px;
    line-height: 26px;
    font-family: serif;
}
.feature{
	padding-top:2%
	margin-bottom:3%;
}
.image1{
	    padding-right: 2%;
}
.requires{
	line-height: initial;
    font-size: inherit;
    font-family: inherit;
    font-weight: 400;
    padding-top: 2%;
    padding-bottom: 2%;
    padding-left: 8%;
}
.sp_re{
	mmargin-bottom: 1% !important;
    font-size: medium;
    font-family: inherit;
}
.{
	font-size:small !important
}
.hr1{
	padding-top:0px !important;
	padding-bottom:0px !important;
}
#buynow{
	background: #eec710;
    color: #333;
    border-radius: 2%;
    border-color: #746108;
}
#readmore{
	background: #00b5f1;
    color: #fff;
    border-radius: 2%;
	margin-bottom:2%;
}
#download{
	min-width: 0px;
    padding: 9px 84px 10px 30px;
    border-color: #48750b;
    color: #fff;
    text-align: center;
    background-color: #65a50f;
    padding-left: 20%;
    border-radius: 1%;
    padding-right: 20%;
	
}
.center{
	padding-left:28%;
}
.inner_bbs1 .col-md-4{
	font-size: initial !important;
    font-family: none !important;
}
.footer{
	font-weight: 500;
    font-family: initial;
    font-size: small;
    padding-left: 23%;
	
}
.logo_img{
    position: relative;
    top: 0px;
    left: 0px;
}
</style>
			<div class="container">
		<div class="row">.<div class="col-md-6"></div><div class="col-md-6">.</div></div>
  <div class="row">
    <div class="col-md-12">
	<h1 class="cu_padding">Free Spam Filter for Outlook, Outlook Express, Thunderbird, Windows Mail and Windows Live Mail</h1>
   </div>
  <div class="col-md-12 text-center">
	<h1 class="para_pc">SPAMfighter has partnered up with Microsoft to build the strongest, safest, and most effective anti spam filter on the market. If you use Outlook, Outlook Express, Windows Mail, Windows Live Mail or Thunderbird and you want to get rid of spam, just install SPAMfighter. And if you use it at home, it's 100% free.</h1>
   </div>
  </div>
  <!--download-->
  <div class="row">
    <div class="col-md-6">
	<button class="btn-success download" id="download">Download</button>
	</div>
    <div class="col-md-6"><img src="<?php  echo bloginfo('template_url');?>/images/microsoft.png" class="image"/></div>
  </div>
  <!---social--->
  <div class="row paddingtop20 right">
  <div class="col-md-6 pull-right">
  social icons
  </div>
  </div>
  <!--advatise-->
 <div class="row">
  <div class="row inner_bbs" >
  <h3>SPAMfighter Standard is 100% free for home users</h3>
  <div class="col-md-12 bbs_para">
  <p>Whenever new mail arrives, it will automatically be tested by SPAMfighter, and if it's spam, it will be moved to your spam folder. If you receive a spam mail that is not detected, click a single button, and the spam mail is removed from the rest of the SPAMfighters in countries/areas in seconds.</p>
  </div>
  <div class="col-md-12 bbs_para1">
  <p><strong>Perfectly integrated with Microsoft Outlook, Outlook Express, Windows Mail, Windows Live Mail (POP3) and Thunderbird</strong></p>
  </div>
  <!--os/antivirusicons-->
  <div class="col-md-6"></div>
  <div class="col-md-6">
  <img src="<?php echo bloginfo('template_url');?>/images/opswat.png" class="image">
  <img src="<?php echo bloginfo('template_url');?>/images/works_win10.png" class="image">
  </div>
  </div>
  </div>
  <!--features-->
  <div class="row feature">
  <div class="col-md-12"><h2 class="text-left">Features</h2></div>
  <div class="col-md-6 features">
  <ul>
     <li><img src="<?php  echo bloginfo('template_url');?>/images/plus.png" class="image image1">Award winning spam blocking technology</li>
    <li> <img src="<?php  echo bloginfo('template_url');?>/images/plus.png" class="image image1">Protects all the email accounts on your   PC  </li>
    <li><img src="<?php  echo bloginfo('template_url');?>/images/plus.png" class="image image1">Protects against phishing, identity theft, and other email fraud</li>
    <li><img src="<?php  echo bloginfo('template_url');?>/images/plus.png" class="image image1">Privacy Guaranteed - we don't see any of your email</li>
    <li><img src="<?php  echo bloginfo('template_url');?>/images/plus.png" class="image image1">Blacklist and block emails and domains</li>
  </ul>
  </div>
  <div class="col-md-6 features">
 <ul>
     <li><img src="<?php  echo bloginfo('template_url');?>/images/plus.png" class="image image1">Spam Abuse Reporting with one click</li>
    <li><img src="<?php  echo bloginfo('template_url');?>/images/plus.png" class="image image1">Unique language filtering tool that empowers you to stop emails written in specific languages</li>
    <li><img src="<?php  echo bloginfo('template_url');?>/images/plus.png" class="image image1">English, German, Spanish, Chinese, French, Italian, Greek, Dutch, Swedish, Norwegian, Suomi, Russian, Bulgarian, Portuguese, Japanese, Thai, Czech, Turkish, Polish, Vietnamese and Danish</li>
  </ul>
  </div>
  </div>
  <!--screenshots-->
   <div class="row">
  <div class="row inner_bbs" >
  <h3>BigBite support Screenshots</h3>
  <div class="col-md-12 bbs_para">
  <p>If you use BigBite support, it will block spam from your inbox, and if you by chance still receive a spam email, be pro-active by reporting it. This helps remove it from all other community members with a single click.</p>
  </div>
  <!--os/antivirusicons-->
  <div class="col-md-6">
   <img src="<?php echo bloginfo('template_url');?>/images/screenshot1.jpg" class="image">
   <div  class="col-md-12 ">View live statistics of the spam that BigBite support has removed.</div>
  </div>
  <div class="col-md-6">
  <img src="<?php echo bloginfo('template_url');?>/images/screenshot2.jpg" class="image">
  <div  class="col-md-12">BigBite support has a very simple user interface.</div>
  </div>
  </div>
  </div>
  <!---spamfighter requires-->
  <div class="container requires">
  <h4>SLOW_PC(BBS) requires:</h4>
  <div class="row sp_re">
  <div class="col-md-4"><strong>Operating System</strong></div>
  <div class="col-md-8 ">Microsoft Windows XP (SP2), Windows Vista, Windows 7, Windows 8/8.1 & Windows 10 (32bit and 64bit)</div>
 </div>
  <div class="row sp_re">
  <div class="col-md-4  "><strong>Email client</strong></div>
  <div class="col-md-8">Outlook 2000, 2002, 2003, 2007, 2010, 2013 and 2016 (Office). Outlook Express 5.5 (and later) (32 Bit). </div>
</div>
  <div class="row sp_re">
  <div class="col-md-4"><strong>Disk Space</strong></div>
  <div class="col-md-8 ">10 MB</div>
</div>
  <div class="row sp_re">
  <div class="col-md-4"><strong>Memory</strong></div>
  <div class="col-md-8 ">128 MB minimum</div>
</div>
</div>
<!--fighter info-->
<hr style="center; margin: 0 auto">

<div class="container requires">
  <h4>BBS info:</h4>
  <div class="row sp_re">
  <div class="col-md-4"><strong>Latest version</strong></div>
  <div class="col-md-8 ">1.2.345</div>
 </div>
  <div class="row sp_re">
  <div class="col-md-4  "><strong>Release date</strong></div>
  <div class="col-md-8">2018-11-19</div>
</div>
  <div class="row sp_re">
  <div class="col-md-4"><strong>File size</strong></div>
  <div class="col-md-8 ">1.23 MB</div>
</div>
 </div>
  
 <!--table check-->
   <!--<div class="table-responsive">          
  <table class="table">
    <thead>
	<tr>
	<th></th>
	<th>SPAMfighter Standard</th>
	<th>SPAMfighter PRO</th>
	</tr>
	</thead>
	<tbody>
	<tr>
	<td>Automatic "real mail" protection - means no lost </td>
	<td><img src="<?php //echo bloginfo('template_url'); ?>/images/wrong.png" class="image"></td>
	<td><img src="<?php //echo bloginfo('template_url'); ?>/images/wrong.png" class="image"></td>
	</tr>
	</tbody>
	</table>
	</div>-->
 <!--download file-->

 <div class="row inner_bbs center">
  <div class="col-md-8 text-center">
   <h3>Download BBS Free!</h3>
  </div>
  <div class="col-md-8 margin-bottom-xl text-center ">
   <button class="btn-success" id="download">Download</button>
  </div>
  <div class="col-md-8 text-center">
   <h3> So easy to use!</h3>
  </div>
  </div>
  <!--compare features-->
  <div class="container inner_bbs1">
  
  <div class="row">  
 
</div>
<hr style="center; margin: 0 auto">
<div class="row"> 
	  <div class="row">
			  <div class="col-md-4"></div>
			  <div class="col-md-4">BigBite Support Standard</div>
			  <div class="col-md-4">BigBite Support PRO</div>
	  </div>
	  <div class="row">
			  <div class="col-md-6">
								<div class="row">
								<div class="col-md-10">Automatic "real mail" protection - means no lost business mails! </div>
								<div class="col-md-2">?</div>
								</div>
			  </div>
			  <div class="col-md-2"><img src="<?php echo bloginfo('template_url'); ?>/images/right.png" class="image"></div>
			  <div class="col-md-4"><img src="<?php echo bloginfo('template_url'); ?>/images/wrong.png" class="image"></div>
		</div>
	  <div class="row">
			  <div class="col-md-6">
								<div class="row">
								<div class="col-md-10">Interface in multiple languages</div>
								<div class="col-md-2">?</div>
								</div>
			  </div>
			  <div class="col-md-2"><img src="<?php echo bloginfo('template_url'); ?>/images/right.png" class="image"></div>
			  <div class="col-md-4"><img src="<?php echo bloginfo('template_url'); ?>/images/wrong.png" class="image"></div>
       </div>
	  <div class="row">
			  <div class="col-md-6">
								<div class="row">
								<div class="col-md-10">Blacklist and block emails and domains</div>
								<div class="col-md-2">?</div>
								</div>
			  </div>
			  <div class="col-md-2"><img src="<?php echo bloginfo('template_url'); ?>/images/right.png" class="image"></div>
			  <div class="col-md-4"><img src="<?php echo bloginfo('template_url'); ?>/images/wrong.png" class="image"></div>
      </div>
	  <div class="row">
			  <div class="col-md-6">
								<div class="row">
								<div class="col-md-10">Free automatic updates</div>
								<div class="col-md-2">?</div>
								</div>
			  </div>
			  <div class="col-md-2"><img src="<?php echo bloginfo('template_url'); ?>/images/right.png" class="image"></div>
			  <div class="col-md-4"><img src="<?php echo bloginfo('template_url'); ?>/images/wrong.png" class="image"></div>
      </div>
      <div class="row">
			  <div class="col-md-6">
								<div class="row">
								<div class="col-md-10">Spam Abuse Reporting with one click</div>
								<div class="col-md-2">?</div>
								</div>
			  </div>
			  <div class="col-md-2"><img src="<?php echo bloginfo('template_url'); ?>/images/right.png" class="image"></div>
			  <div class="col-md-4"><img src="<?php echo bloginfo('template_url'); ?>/images/wrong.png" class="image"></div>
      </div>
      <div class="row">
		  <div class="col-md-6">
							<div class="row">
							<div class="col-md-10">Automatic whitelist management</div>
							<div class="col-md-2">?</div>
							</div>
		  </div>
		   <div class="col-md-2"><img src="<?php echo bloginfo('template_url'); ?>/images/right.png" class="image"></div>
		  <div class="col-md-4"><img src="<?php echo bloginfo('template_url'); ?>/images/wrong.png" class="image"></div>
      </div>
	  <div class="row">
			  <div class="col-md-6">
								<div class="row">
								<div class="col-md-10">Protects against "phishing", identity theft, and other email frauds</div>
								<div class="col-md-2">?</div>
								</div>
			  </div>
			  <div class="col-md-2"><img src="<?php echo bloginfo('template_url'); ?>/images/right.png" class="image"></div>
			  <div class="col-md-4"><img src="<?php echo bloginfo('template_url'); ?>/images/wrong.png" class="image"></div>
      </div>
	  <div class="row">
			  <div class="col-md-6">
								<div class="row">
								<div class="col-md-10">Protects all the email accounts on your PC</div>
								<div class="col-md-2">?</div>
								</div>
			  </div>
			  <div class="col-md-2"><img src="<?php echo bloginfo('template_url'); ?>/images/right.png" class="image"></div>
			  <div class="col-md-4"><img src="<?php echo bloginfo('template_url'); ?>/images/wrong.png" class="image"></div>
      </div>
	  <div class="row">
		  <div class="col-md-6">
							<div class="row">
							<div class="col-md-10">The right to use SPAMfighter in a company/organization</div>
							<div class="col-md-2">?</div>
							</div>
		  </div>
		  <div class="col-md-2"><img src="<?php echo bloginfo('template_url'); ?>/images/right.png" class="image"></div>
		  <div class="col-md-4"><img src="<?php echo bloginfo('template_url'); ?>/images/wrong.png" class="image"></div>
       </div>
	   <div class="row">
			  <div class="col-md-6">
								<div class="row">
								<div class="col-md-10">Unique language filtering tool that empowers you to stop emails written in specific languages</div>
								<div class="col-md-2">?</div>
								</div>
			  </div>
			   <div class="col-md-2"><img src="<?php echo bloginfo('template_url'); ?>/images/right.png" class="image"></div>
			  <div class="col-md-4"><img src="<?php echo bloginfo('template_url'); ?>/images/wrong.png" class="image"></div>
       </div>
  <div class="col-md-6">
                    <div class="row">
                    <div class="col-md-10">Option to move the toolbar in Microsoft Outlook</div>
                    <div class="col-md-2">?</div>
					</div>
  </div>
   <div class="col-md-2"><img src="<?php echo bloginfo('template_url'); ?>/images/right.png" class="image"></div>
  <div class="col-md-4"><img src="<?php echo bloginfo('template_url'); ?>/images/wrong.png" class="image"></div>
  
  <div class="col-md-6">
                    <div class="row">
                    <div class="col-md-10">Free phone support - Call us and get help if you need it</div>
                    <div class="col-md-2">?</div>
					</div>
  </div>
  <div class="col-md-2"><img src="<?php echo bloginfo('template_url'); ?>/images/right.png" class="image"></div>
  <div class="col-md-4"><img src="<?php echo bloginfo('template_url'); ?>/images/wrong.png" class="image"></div>

  <div class="col-md-6">
                    <div class="row">
                    <div class="col-md-10">Unlimited Blacklist/Whitelist entries</div>
                    <div class="col-md-2">?</div>
					</div>
  </div>
  <div class="col-md-2"><img src="<?php echo bloginfo('template_url'); ?>/images/right.png" class="image"></div>
  <div class="col-md-4"><img src="<?php echo bloginfo('template_url'); ?>/images/wrong.png" class="image"></div>

  <div class="col-md-6">
                    <div class="row">
                    <div class="col-md-10">No SPAMfighter footer in your emails</div>
                    <div class="col-md-2">?</div>
					</div>
  </div>
   <div class="col-md-2"><img src="<?php echo bloginfo('template_url'); ?>/images/right.png" class="image"></div>
  <div class="col-md-4"><img src="<?php echo bloginfo('template_url'); ?>/images/wrong.png" class="image"></div>

  <div class="col-md-6">
                    <div class="row">
                    <div class="col-md-10">Commercial-free email client</div>
                    <div class="col-md-2">?</div>
					</div>
  </div>
   <div class="col-md-2"><img src="<?php echo bloginfo('template_url'); ?>/images/right.png" class="image"></div>
  <div class="col-md-4"><img src="<?php echo bloginfo('template_url'); ?>/images/wrong.png" class="image"></div>
  </div>
<hr style="center; margin: 0 auto">
<div class="row">
  <div class="col-md-6">
                    <div class="row">
                    <div class="col-md-10">Price (includes all upgrades and technical support)</div>
                    <div class="col-md-2"></div>
					</div>
  </div>
  <div class="col-md-2">Free</div>
  <div class="col-md-4"><strong>US$29.00</strong></div>

</div>




</div>
<!--buy now-->
<div class="row inner_bbs2">
  <div class="col-md-8 text-center">
   <h3>Buy BigByte Support Pro now</h3>
  </div>
  <div class="col-md-8 margin-bottom-xl text-center ">
   <button class="btn-success" id='buynow'>Buy Now</button>
  </div>
  <!--readmore-->
  <div class="col-md-8 text-center">
   <h3>Business Product</h3>
  </div>
  <div class="col-md-8 margin-bottom-xl text-center ">
   <button class="btn-success" id='readmore'>ReadMore</button>
  </div>
  <div class="col-md-12 text-center">
   <h3>Read more
SPAMfighter Exchange Module, SPAMfighter Mail Gateway and SPAMfighter Hosted Mail Gateway are the most effective and easy-to-use Spam Filters for protecting the company network against spam and phishing fraud. </h3>
  </div>
  
  </div>
  <!--footer -->
  <div class="row footer">
  <!--firstrow-->
  <div class="col-md-3">
        <div class="col-md-12"><strong>PRODUCTS</strong></div>
        <div class="col-md-12"> Antivirus Support </div>
		<div class="col-md-12"> Slow-PC </div>
		<div class="col-md-12"> Full-Disk </div>
		<div class="col-md-12"> Driver </div>
		<div class="col-md-12"> Virus </div>
		<div class="col-md-12"> Spyware </div>
  </div>
  <!--firstrow-->
  <div class="col-md-3">
        <div class="col-md-12"> <strong>ABOUT</strong></div>
		<div class="col-md-12"> Company </div>
		<div class="col-md-12"> Contact Us</div>
		<div class="col-md-12"> PressRoom </div>
		<div class="col-md-12"> Support </div>
		<div class="col-md-12"> Blog </div>
		<div class="col-md-12"> Signup for newsLetters </div>
  
  </div>
  <!--firstrow-->
  <div class="col-md-3">
        <div class="col-md-12"><strong>SocialMedia</strong></div>
        <div class="col-md-12"><a href="#" class="fa fa-facebook"></a>Facebook</div>
		<div class="col-md-12"><a href="#" class="fa fa-twitter"></a>Twitter</div>
		<div class="col-md-12"><a href="#" class="fa fa-youtube"></a>YouTube</div>
		<div class="col-md-12"><a href="#" class="fa fa-linkedin"></a>LinkedIn</div>
 </div>
  
  </div>
  <!--footer end-->
  </div>
<?php
get_footer();

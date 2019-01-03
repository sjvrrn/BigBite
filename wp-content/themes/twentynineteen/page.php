<?php
/**
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
<!--footer styles-->
<style>
.footer-line{
	background-color: rgba(0,0,0,.1);
    border: 0;
    height: 2px;
}
.footer-header{
	margin-bottom: 0%;
    font-size: inherit;
    color: #00331f;
	font-family:serif;
}
.col-md-4{
	font-size: small;
    font-family: none;
    padding: 1% 1%;;
}
.center{
	text-align:center;
	
}
.center h4{
	margin-bottom:0px !important;
}
h4{
	margin-bottom:10px !important;
}
.para-text{
	line-height:1.4 !important
	font-family: timeS;
    font-size: 14px;
	padding:8% 8%;
}
.grid-container1{
	margin-top: 2% !important;
}
.btn-success{
	  padding: 2% 10%;
	  border-radius: 6% 6%;
	  background-color:#00b5f1;
}
.box{
	position: relative;
    width: 100%;
    height: 200px;
	box-shadow: 0 0 5px rgba(0,0,0,0.25);
	border-radius: 2px;
	
}
.innerdiv{
	margin: 4%!important;
    border: 1px solid honeydew;
    height: auto;
    background-color: transparent;
    box-shadow: 0 0 30px white;
	font-family: initial;
	
}
.widget{
	
	padding:3% !important;
}
.foot-text{
	
	text-align: center;
    font-family: times !important;
    color: #2D2D2D;
} 

.fa {
    padding: 1% 2% 1% 2%;
    font-size: 19px;
  width:8%;
  text-align: center;
  text-decoration: none;
     
}
.fa:hover {
  opacity: 0.7;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-youtube {
  background: #fb3106;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}
.inside-footer-widgets{
	margin-bottom:3% !important;
} 
</style>
<!--home styles -->
<style>
#pc_software{
			    background: #65a50e !important;
				font-size: small;
				border-radius: 2% 2% !important;
				display: flex;
				align-items: center;
				justify-content: center;
}
#server_software{
	font-size: small;
    background-color: #00b5f1;
}
.tag{
	font-size: small;
    text-align: center;
	}
.mbanner{
	padding-top: 2%;
    margin-top: 2%;
    padding-bottom: 2%;
    margin-bottom: 2%;
    margin:0 auto;
	border: solid 1px white;
}	
.menu-item-has-children .dropdown-menu-toggle{
	height:68% !important;
}
.main-navigation{
	height:8% !important;
}
.ipanel{
	font-size: small;
    font-family: initial;
    padding: 1% 15% 1% 26%;
}
	
#ipanel_1{
}
.ps{
	padding-left:23%;
}
.social{
	    align-items: center;
    text-align: center;
}
.footer-widgets{
	padding:0px !important;
}
.site-content{
	    background-color: #f5f5f5;
}
.body{
	    background-color: #ffff!important;
}
.social_2{
	padding: 1% 1%;
}
.footer{
	    padding: 0% 1% 1% 7%;
}
.btn-success{
	    color: #fff !important;
    background-color: #ff8533 !important;
    border-color: darkorange !important;
	padding: 2% 10%;
    border-radius: 2% 2%;
	font-size: small;
    font-family:serif;
}
//    background-color: black;margin-left: 6%;
    
</style>


	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
echo Home_Body();
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
	
<style>
.site-header{
	padding:0px !important;
}
.site-branding{
	margin:0px !important;
}
.main-navigation .main-menu{
	
	background-color:black;
    margin-left: 6%;
}
.main-navigation .main-menu  li  a{
	color:antiquewhite;
	font-size: medium;
    font-family: initial;
	
}
.main-navigation .sub-menu  li{
	    background-color: black !important;
}
.main-navigation .main-menu li a{
	color:antiquewhite;
}
.main-navigation{
	background-color:black !important;
	padding-top: 0.5%;
    padding-bottom: 0.5%;
}
.main-navigation  div{
	    padding: 0.5% 0% 1% 2% !important;
}
.main-navigation .sub-menu  li a{
                            font-size: small !important;
                            font-family: -webkit-pictograph !important;
}
</style>
<!--carousel styles-->
<style>
.item img{
	height :280px !important;
}
.site-branding-container img{
				   margin-left: 7.5%;
	  }
.footer{
    margin-left: 12% !important;
    font-size: initial;
    font-family: -webkit-pictograph;
}
</style>
<!--footer styles-->	
<style>
.fa {
    padding: 1% 9% 1% 2%;
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
</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">

			<div class="site-branding-container"><img src="<?php echo bloginfo('template_url');?>/images/BigByteLogo.jpg" class="logo_img"/>
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			</div><!-- .layout-wrap -->

			<?php if ( is_singular() && twentynineteen_can_show_post_thumbnail() ) : ?>
				<div class="site-featured-image">
					<?php
						twentynineteen_post_thumbnail();
						the_post();
						$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null;

						$classes = 'entry-header';
						if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) {
							$classes = 'entry-header has-discussion';
						}
					?>
					<div class="<?php echo $classes; ?>">
						<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</div><!-- .entry-header -->
					<?php rewind_posts(); ?>
				</div>
			<?php endif; ?>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
	<!----------------------------------carousel start-------------------->
<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php bloginfo('template_url');?>/images/mbanner_1.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php bloginfo('template_url');?>/images/mbanner_1.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="<?php bloginfo('template_url');?>/images/mbanner_1.png" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
	<!----------------------------------carousel end----------------------->
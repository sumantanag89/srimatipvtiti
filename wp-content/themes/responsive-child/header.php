<?php
/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

?>
	<!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

		<?php wp_head(); ?>
		
		


<!-- Global site tag (gtag.js) - Google Ads: 796321004 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-796321004"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-796321004');
</script>




<script>
  gtag('config', 'AW-796321004/VPlXCO7w-ocBEOzJ2_sC', {
    'phone_conversion_number': '9230062678'
  });
</script>


		
	</head>

<body <?php body_class(); ?>
?>
<div class="main">
<div class="container">
	
	<div class="row">
		<div class="col-sm-4">
			<div class="logo">
				<a href="<?php echo esc_url(home_url( '/' )); ?>"><img src="http://srimatipvtiti.org/wp-content/uploads/2018/06/edited-logo2.png" class="img-responsive"></a>
			</div>
		</div>
		<div class="col-sm-4">
			<p style="font-family: 'Verdana'; font-size: 11px;">
				<br/><br/>
				<b>Affiliated to NCVT, New Delhi & Approved by DGE & T, Govt. of India DGT/6/25/10/2018-TC<br/>
				<i class="far fa-envelope"></i> srimatipvtiti@gmail.com | srimatitechno@gmail.com<br/>
				<i class="fas fa-phone"></i>9230076095 | 9230062678</b>
			</p>
		</div>
		<div class="col-sm-2">
			<div class="logo">
				<a href="<?php echo esc_url(home_url( '/' )); ?>"><img src="http://srimatipvtiti.org/wp-content/uploads/2019/09/skill-india.png" class="img-responsive"></a>
			</div>
		</div>

		<div class="col-sm-2">
			<div class="logo">
				<a href="<?php echo esc_url(home_url( '/' )); ?>"><img src="http://srimatipvtiti.org/wp-content/uploads/2019/09/iti.png" class="img-responsive"></a>
			</div>	
		</div>
	</div>
	
	<div class="row" style="text-align: center;">
		<a href="http://spitiportal.in/onlineform.php" target="_blank" style="color: #fff;padding: 10px;background: #0265a1; margin: 10px; display: inline-block; clear: both;">Online Admission Form</a>
 	</div>
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<button class="responsive_nav radius3"><i class="fa fa-bars" aria-hidden="true"></i></button>
			<div class="mainheader" >

					<?php wp_nav_menu( array(
						'container'       => 'div',
						'container_class' => 'main_navigation',
						'fallback_cb'     => 'responsive_fallback_menu',
						'theme_location'  => 'header-menu'
					) ); ?>

			</div>		
		</div>
		<div class="col-md-2"></div>
	</div>
</div>	
</div>



<div class="bannersection">
<?php
if ( is_front_page()){ ?>

<div class="owl-carousel owl-theme homeslide">
<?php query_posts('orderby=date&order=ASC&post_type=Banner'); 
			while(have_posts()):the_post();?>
	           <div class="item">
		         <div class="banner">
                   <?php $img = wp_get_attachment_url(get_post_thumbnail_id($posts->id));?>
					<img src="<?php echo $img;?>">
				</div>
              </div>
	<?php endwhile; ?> 
</div>

<?php
}
?>

</div>



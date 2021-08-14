<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Pages Template
 *
 *
 * @file           page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<section class="inner_page_wrap">

	<?php if (have_posts()):
	while (have_posts()) : the_post(); ?>

		<div id="post-<?php the_ID() ?>" <?php post_class(); ?>>
			<?php $inner_banner_img = wp_get_attachment_url(get_post_thumbnail_id() ); ?>
			<div class="inner_page_banner" style="background: url(<?php echo $inner_banner_img; ?>);">
				<div class="inner_page_heading">
					<h1><?php the_title(); ?></h1>
					<div class="page_breadcrumb"><?php get_breadcrumb(); ?></div>
				</div>
			</div>
			<!--inner_page_banner-->

			<div class="inner_page_content">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<?php the_content(); ?>
						</div>
						<div class="col-md-4">

<div class="links">
<?php get_sidebar( 'right' ); ?>
</div>
</div>
					</div>
					
				</div>
				<!--container-->
			</div>
			<!--inner_page_content-->
		</div>
		<!--post_id-->

	<?php endwhile;

		else: 
			echo 'No content Found';

		endif;
	 ?>

</section>
<!--inner_page_wrap-->



<?php get_footer(); ?>

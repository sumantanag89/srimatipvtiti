<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>

<section class="inner_page">
	<?php if(have_posts()): ?>
	<?php while (have_posts()):the_post(); ?>
		<div class="singel_page_banner">
			<div class="inner_page_heading">
				<h1><?php the_title(); ?></h1>
				<div class="page_breadcrumb"><?php get_breadcrumb(); ?></div>
			</div>
		</div>

		<div class="inner_page_content singel_page_content">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-7 col-xs-12">
						<div class="singel_details_img mb15">
							<?php $feat_img_url = wp_get_attachment_url(get_post_thumbnail_id()); ?>
							<img src="<?php echo $feat_img_url;  ?>">
						</div>	
						<?php the_content(); ?>
					</div>
					
				</div>
			</div>
		</div>

	<?php endwhile;

		get_template_part( 'loop-nav', get_post_type() );
	else :
		get_template_part( 'loop-no-posts', get_post_type() );
	endif;
	?>
</section>





<?php get_footer(); ?>
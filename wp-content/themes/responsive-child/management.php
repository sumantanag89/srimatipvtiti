<?php

/* 
 * 
 *  Template Name: managementpage
 * 
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
					<?php the_content(); ?>	
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

<div class="managment_sec">	 
<div class="container">	 

<div class="row">

<div class="col-md-8">
<?php query_posts('orderby=date&order=ASC&post_type=Management&posts_per_page=-1');
while (have_posts()) : the_post(); ?>
<div class="manmnt">
<div class="manage_left">
<img src="<?php the_field('person_img'); ?>" alt="" />
</div>
<div class="manage_right">
<h4><?php the_title() ?></h4>
<h5><strong>Father's Name :</strong></h5> 
<h5><?php the_field('father_name'); ?></h5>
<h6>Address :</h6>
<p><?php the_field('address'); ?></p>
<h5><strong>Mobile No. : </strong></h5> 
<h5><?php the_field('mobile_no'); ?></h5>
</div>
</div>
<?php endwhile; ?>
</div>

<div class="col-md-4">
<div class="links">
<?php get_sidebar( 'right' ); ?>
</div>
</div>
</div>	 
</div> 
</div>	 
	 
	 
	 
	 
	 
	 
	 
	 
</section>
<!--inner_page_wrap-->



<?php get_footer(); ?>

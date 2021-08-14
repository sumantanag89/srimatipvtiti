<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Index Template
 *
 *
 * @file           index.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/index.php
 * @link           http://codex.wordpress.org/Theme_Development#Index_.28index.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>


<div class="content_body">
<div class="container">
<div class="row">
<div class="col-md-8">

<!--welcome_sec-->
<div class="welcome_sec">
<h1>Welcome To Our Institute..!</h1>
<p>Srimati Private Industrial Training Institute is initially conducting Industrial Training in the areas of Electrician and Fashion Design & Technology. Situated in Padmapukur more, Baruipur. Srimati Industrial Training Institute, Baruipur established in the Year 2012 under the Directorate of Industrial Training, Govt. of West Bengal.Srimati Private Industrial Training Institute establish with a common object and strong commitment to the growth and promotion of technical experts for solving the unemployment problem all over India...</p>
<a href="http://srimatipvtiti.org/institution/">Read More</a>
</div>

<!--welcome_sec-->


<!--course_sec-->

<div class="course_sec">
<h1>Our Courses</h1>

<div class="IIT_Course">
<h3>Electrician</h3>
<p>This course aims at acquainting the Students with the knowledge of both Domestic and Industrial
wiring and armature winding of all types of electrical machines such as all types of AC & DC Fan,
Motor (Single & Poly Phase) & Generator with the help of thorough classroom theoretical and
practical training.</p>
<a href="http://srimatipvtiti.org/electrician/">Read More</a>
</div>

<div class="Fashion_Desing">
<h3>Fashion Design & Technology</h3>
<p>Fashion design is the art of the application of design and aesthetics or natural beauty to clothing and accessories. Fashion design is influenced by cultural and social latitudes, and has varied over time and place. Fashion designers work in a number of ways in designing clothing and accessories such as bracelets and necklace, because of the time required to bring a garment onto the market, must at times anticipate changing consumer tastes.</p>
<a href="http://srimatipvtiti.org/fashion-design-technology/">Read More</a>
</div>
</div>

<!--course_sec-->


<!--student_sec-->

<div class="col-md-6 pd">
<div class="student_sec">
<h4><i class="fas fa-graduation-cap"></i>Students Section</h4>
<div class="student_sec_txt">
<p>
	Download Project Report Format
	<ul>
		<li><a href="http://srimatipvtiti.org/wp-content/uploads/2019/02/project-repot-format-fdt.pdf">Fashion Design Technology - Click Here</a></li>
		<li><a href="http://srimatipvtiti.org/wp-content/uploads/2019/02/project-repot-format-ele.pdf">Electrician - Click Here</a></li>
	</ul>
</p>
<a href="http://srimatipvtiti.org/students-section/">Read More<i class="fas fa-arrow-right"></i></a>
</div>
</div>
</div>

<div class="col-md-6 pd1">
<div class="notice_sec">
<h4><i class="fas fa-graduation-cap"></i>Notice Board</h4>
<div class="notice_sec_txt">
<div class="noticeslide">


<div class="swiper-container">
<div class="swiper-wrapper">
<?php query_posts('orderby=date&order=ASC&post_type=Notice');
while(have_posts()):the_post(); ?>
      <div class="swiper-slide">
      <div class="notice_txt">
<p><a href="<?php the_permalink();?>"><?php $content=get_the_content();
   $content=strip_tags($content);
   echo substr($content,0,60); ?>...</a>
</p>
     </div>
</div>
<?php endwhile; ?>
</div>
    <!-- Add Pagination -->
	<!-- Add Arrows -->
    
</div>
    
 
 	           
</div>

</div>
<div class="arrow">
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div> 
</div>
</div>

</div>

<!--student_sec-->

<!--information_sec-->

<div class="information_sec">

<div class="col-md-6 pd dd">
<div class="information_txt">
<h3>Useful Information</h3>
	<p>
		<ul>
			<li><a href="http://srimatipvtiti.org/wp-content/uploads/2019/02/Application-from.pdf">Download Admission Form</a></li>
			<li><a href="http://srimatipvtiti.org/students-section/">Student's Project Report Format Download</a></li>
		</ul>
		
		
		
	</p>	
<p>Government orders</p>
</div>
</div>

<div class="col-md-6 pd1 dd">
<div class="information_txt">
<h3>Important Links</h3>
	<p><a href="https://dgt.gov.in/" target="blank">DIRECTORATE GENERAL OF TRAINING</a></p>
</div>
</div>

</div>

<!--information_sec-->

</div>

<div class="col-md-4">

<div class="links">
 <?php if ( has_nav_menu( 'footer-menu', 'responsive' ) ) {
					wp_nav_menu( array(
						'container'      => '',
						'fallback_cb'    => false,
						'menu_class'     => 'links',
						'theme_location' => 'side-menu'
					) );
				} ?>

<?php get_sidebar( 'right' ); ?>
</div>
</div>
</div>
</div>
</div>


<!--Infrastructure_sec-->

<div class="Infrastructure_sec">
<div class="container">
<h1>Our Infrastructure</h1>
<div class="owl-carousel owl-theme galleyslide">
<?php query_posts('orderby=date&order=ASC&post_type=Galley'); 
			while(have_posts()):the_post();?>
	           <div class="item">
		         <div class="galley_img">
                   <?php $img = wp_get_attachment_url(get_post_thumbnail_id($posts->id));?>
					<img src="<?php echo $img;?>">
				</div>
              </div>
	<?php endwhile; ?> 
</div>
</div>
</div>

<!--Infrastructure_sec-->
















<?php get_footer(); ?>
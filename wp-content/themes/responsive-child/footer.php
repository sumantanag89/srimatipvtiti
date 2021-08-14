<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */

/*
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
?>


<div class="footar_sec">
<div class="container">
<div class="footar_left">
<p>Copyright ©<span> Srimati Pvt. ITI </span>2018. All Right Reserved.<p>
</div>

<div class="footar_right">
Designed by : 
<a href="http://xigmapro.com/">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/xigma.png">
</a>
</div>
</div>
</div>














<script>
	jQuery('.homeslide').owlCarousel({
		loop:true,
		margin:0,
		autoplay:true,
		autoplaySpeed: 1500,
		nav:false,
		navSpeed:1500,
		dots:true,
		responsive:{
		    0:{
		        items:1
		    },
			540:{
		        items:1
		    },
		    600:{
		        items:1
		    },
		    1000:{
		        items:1
		    }
		}
	});
</script>



<script>
    var swiper = new Swiper('.swiper-container', {
	  slidesPerView: 3,
	  height: '200',
	  autoplay:true,
	  autoplaySpeed: 1500,
      direction: 'vertical',
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
	  navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
</script>


<script>
	jQuery('.galleyslide').owlCarousel({
		loop:true,
		margin:3,
		autoplay:true,
		autoplaySpeed: 1500,
		nav:true,
		navSpeed:1500,
		navText: ['<i class="fa fa-angle-left"></i>' , '<i class="fa fa-angle-right"></i>'],
		dots:false,
		responsive:{
		    0:{
		        items:1
		    },
			540:{
		        items:3
		    },
		    600:{
		        items:3
		    },
		    1000:{
		        items:6
		    }
		}
	});
</script>


<script type="text/javascript">
  jQuery('.responsive_nav').click(function(){
    jQuery('.main_navigation').slideToggle();
  }); 
  jQuery('.main_navigation ul ul').each(function() {
    if(jQuery(this).children().length){
      jQuery(this,'li:first').parent().append('<span class="mean-expand"></span>');
    }
  });
  jQuery('.mean-expand').on("click",function(e){
      e.preventDefault();
        if (jQuery(this).hasClass("mean-clicked")) {
          jQuery(this).prev('ul').slideToggle(300, function(){});
      } else {
          jQuery(this).prev('ul').slideToggle(300, function(){});
      }
      jQuery(this).toggleClass("mean-clicked");
  });
  
</script>
<?php wp_footer(); ?>
</body>
</html>

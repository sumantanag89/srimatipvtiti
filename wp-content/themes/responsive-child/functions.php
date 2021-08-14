<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'bootstrapmin', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
wp_enqueue_style( 'fontawesomeallmin', get_stylesheet_directory_uri() . '/css/fontawesome-all.min.css' );
wp_enqueue_style( 'owlcarouselmin', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css' );
wp_enqueue_style( 'owlthemedefaultmin', get_stylesheet_directory_uri() . '/css/owl.theme.default.min.css' );
wp_enqueue_style( 'animate.min.css', get_stylesheet_directory_uri() . '/css/animate.min.css' );
wp_enqueue_style( 'swipermin', get_stylesheet_directory_uri() . '/css/swiper.min.css' );
wp_enqueue_style( 'hover', get_stylesheet_directory_uri() . '/css/hover.css' );
wp_enqueue_style( 'menu', get_stylesheet_directory_uri() . '/css/menu.css' );
wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/css/custom.css' );
wp_enqueue_script('iowlcarouselmin',get_stylesheet_directory_uri() . '/js/owl.carousel.min.js',array( 'jquery' ));
wp_enqueue_script('wow',get_stylesheet_directory_uri() . '/js/wow.js',array( 'jquery' ));wp_enqueue_script('bootstrapmin',get_stylesheet_directory_uri() . '/js/bootstrap.min.js',array( 'jquery' ));
wp_enqueue_script('swipermin',get_stylesheet_directory_uri() . '/js/swiper.min.js',array( 'jquery' ));
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
  
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
//custom menu//
function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  register_nav_menu('footer-menu1',__( 'side-menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}



//Banner post type Banner
$args = array(
   'labels' => array(
       'menu_name' => 'Banner',
       'all_items' => 'Banner',
       'singular_name' => 'Banner',
       'new_item' => 'New Banner',
       'edit_item' => 'Edit Banner',
       'view_item' => 'View Banner',
       'no_found' => 'No Banner found',
       'no_found_in_trash' => 'No Banner found in trash',
   ),
   'supports' => array('title', 'thumbnail'),
   'menu_position' =>7,
   'public' => true,
);
register_post_type('Banner', $args);


//Notice post type Notice
$args = array(
   'labels' => array(
       'menu_name' => 'Notice',
       'all_items' => 'Notice',
       'singular_name' => 'Notice',
       'new_item' => 'New Notice',
       'edit_item' => 'Edit Notice',
       'view_item' => 'View Notice',
       'no_found' => 'No Notice found',
       'no_found_in_trash' => 'No Notice found in trash',
   ),
   'supports' => array('title', 'editor', 'thumbnail'),
   'menu_position' =>8,
   'public' => true,
);
register_post_type('Notice', $args);

//Galley post type Galley
$args = array(
   'labels' => array(
       'menu_name' => 'Galley',
       'all_items' => 'Galley',
       'singular_name' => 'Galley',
       'new_item' => 'New Galley',
       'edit_item' => 'Edit Galley',
       'view_item' => 'View Galley',
       'no_found' => 'No Galley found',
       'no_found_in_trash' => 'No Galley found in trash',
   ),
   'supports' => array('title', 'editor', 'thumbnail'),
   'menu_position' =>9,
   'public' => true,
);
register_post_type('Galley', $args);

//Management post type Management
$args = array(
   'labels' => array(
       'menu_name' => 'Management',
       'all_items' => 'Management',
       'singular_name' => 'Management',
       'new_item' => 'New Management',
       'edit_item' => 'Edit Management',
       'view_item' => 'View Management',
       'no_found' => 'No Management found',
       'no_found_in_trash' => 'No Management found in trash',
   ),
   'supports' => array('title', 'thumbnail'),
   'menu_position' =>9,
   'public' => true,
);
register_post_type('Management', $args);

?>
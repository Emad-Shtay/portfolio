<?php
/**
 * me functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package me
 */

if ( ! function_exists( 'me_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function me_setup() {
// Hide Hint of login - error in password or username ..etc
function no_wordpress_errors(){
  return 'Something is wrong!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );

function fjarrett_remove_wp_version_strings( $src ) {
     global $wp_version;
     parse_str(parse_url($src, PHP_URL_QUERY), $query);
     if ( !empty($query['ver']) && $query['ver'] === $wp_version ) {
          $src = remove_query_arg('ver', $src);
     }
     return $src;
}
add_filter( 'script_loader_src', 'fjarrett_remove_wp_version_strings' );
add_filter( 'style_loader_src', 'fjarrett_remove_wp_version_strings' );

/* Hide WP version strings from generator meta tag */
function wpmudev_remove_version() {
return '';
}
add_filter('the_generator', 'wpmudev_remove_version');

// To Disable all the Nags & Notifications
function remove_core_updates(){
global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates');
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');
    

 // Add Shortcode for english banar
function bannar1() {
  ob_start();?>
<iframe src="<?php echo esc_url(get_template_directory_uri());?>/bannar1.html" width="100%" height="180px" frameborder="0"></iframe>
    <?php return ob_get_clean(); 
}
add_shortcode( 'bannar', 'bannar1' );
 // Add Shortcode for Arabic banar
        function bannar2() {
            ob_start();
            ?>
            <iframe src="<?php echo esc_url(get_template_directory_uri()); ?>/bannarAr.html" width="100%" height="180px" frameborder="0"></iframe>
            <?php
            return ob_get_clean();
        }

        add_shortcode('bannAr', 'bannar2');

        // Add menu_order to post page.
add_post_type_support( 'post', 'page-attributes' );

add_action( 'pre_get_posts', 'create_new_posts_order' );

function create_new_posts_order( $query ) {

if ( $query->is_main_query() )

$query->set( 'orderby', 'menu_order' );

}
        //registe template of portfolio post -->    

    /*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Movies', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Movies', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Movie', 'twentythirteen' ),
        'all_items'           => __( 'All Movies', 'twentythirteen' ),
        'view_item'           => __( 'View Movie', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Movie', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Movie', 'twentythirteen' ),
        'update_item'         => __( 'Update Movie', 'twentythirteen' ),
        'search_items'        => __( 'Search Movie', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'movies', 'twentythirteen' ),
        'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'movies', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );
    
    

// Register and load the widget
function wpb_load_widget() {
    register_widget('wpb_widget1');
    register_widget( 'wpb_widget' );
    register_widget( 'wpb_tweet' );
    
    register_widget('wpb_tweet3');
            register_widget( 'wpb_categories' );

    
}
add_action( 'widgets_init', 'wpb_load_widget' );
 
// Creating the Categories widget 
class wpb_categories extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_categories', 
 
// Widget name will appear in UI
__('Top Categories', 'wpb_categories1'), 
 
// Widget description
array( 'description' => __( 'Display Top level categories', 'wpb_categories1' ), ) 
);
}
 
// Creating widget front-end

public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes

?>
<div class="entry-widget">
<h5 class="widget-title">Categories</h5>

<div class="accordion">
<div class="panel-group" id="accordion">

<?php
$categories = get_categories(array('number'=> '10','orderby'=> 'count','hide_empty' => 1, 'order' => 'ASC'));

foreach ($categories as $category) { ?>


<div class="panel panel-default">

    <h4 class="panel-title"><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><i class="fa fa-keyboard"></i><?php echo $category->name; ?> </a> <span class="" style="color: #FF3366;font-weight: bold;">{ <?php echo $category->count; ?> };</span></h4>

</div>
<?php }?>

</div>
</div>
</div>
<?php 

}
         
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_tweet' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_categories ends here

// Creating the Tweeet widget 
        class wpb_tweet3 extends WP_Widget {

            function __construct() {
                parent::__construct(
// Base ID of your widget
                        'wpb_tweet3',
// Widget name will appear in UI
                        __('Last Tweet ar', 'wpb_tweet3'),
// Widget description
                        array('description' => __('Display Last Tweet Acount in arabic ', 'wpb_tweet3'),)
                );
            }

// Creating widget front-end

            public function widget($args, $instance) {
                $title = apply_filters('widget_title', $instance['title']);

// before and after widget arguments are defined by themes
                ?>
                <div style="padding-top: 0px" class="entry-widget">
                <a class="twitter-timeline" data-height="650" data-dnt="true" data-theme="light" data-link-color="#666666" href="https://twitter.com/EmadShtay?ref_src=twsrc%5Etfw">أخر التغريدات من حسابي</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>        </div>
                <?php
            }

// Widget Backend 
            public function form($instance) {
                if (isset($instance['title'])) {
                    $title = $instance['title'];
                } else {
                    $title = __('New title', 'wpb_tweet3');
                }
// Widget admin form
                ?>
                <p>
                <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
                </p>
                <?php
            }

// Updating widget replacing old instances with new
            public function update($new_instance, $old_instance) {
                $instance = array();
                $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
                return $instance;
            }

        }

        // Class wpb_tweet ends here
// Creating the Tweeet widget 
class wpb_tweet extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_tweet', 
 
// Widget name will appear in UI
__('Last Tweet', 'wpb_tweet1'), 
 
// Widget description
array( 'description' => __( 'Display Last Tweet Acount', 'wpb_tweet1' ), ) 
);
}
 
// Creating widget front-end

public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes

?>
<div style="padding-top: 0px" class="entry-widget">
<a class="twitter-timeline" data-height="650" data-dnt="true" data-theme="light" data-link-color="#666666" href="https://twitter.com/EmadShtay?ref_src=twsrc%5Etfw">Tweets by EmadShtay</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>        </div>
<?php 

}
         
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_tweet' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_tweet ends here

// Creating the widget 
class wpb_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_widget', 
 
// Widget name will appear in UI
__('Puploar Pos', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Sample widget based Poplur post', 'wpb_widget_domain' ), ) 
);
}
 
// Creating widget front-end

public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes

?>
<div style="padding-top: 0px" class="entry-widget">
        
    <ul style="    margin: 0px;" class="nav nav-tabs">
        <li class="active">
        <a data-toggle="tab" href="http://emadsh.com/themes/intimate/carousel-slider.html#tab1" aria-expanded="false">Popular</a>
        </li>
        <li class="">
        <a data-toggle="tab" href="http://emadsh.com/themes/intimate/carousel-slider.html#tab2" aria-expanded="false">Recent</a>
        </li>
        <li class="">
        <a data-toggle="tab" href="http://emadsh.com/themes/intimate/carousel-slider.html#tab3" aria-expanded="true">Comments</a>
        </li>
        </ul>
        <div class="tab-content">
        
        <div class="tab-pane fadeInDown" id="tab1">
            <ul class="posts-list">
        <?php
        $args1 = array( 'numberposts' => '5','post_status'=> 'publish','orderby'  => 'rand','order' => 'DESC', );
	$popular_posts = wp_get_recent_posts($args1);
        //var_dump($recent_posts);
	foreach( $popular_posts as $popular ){
            
            ?>
             <li>
        <div class="widget-thumb">
            <a href="<?php echo esc_url(the_permalink($popular["ID"])); ?>"><img alt="" src="<?php echo esc_url(get_the_post_thumbnail_url($popular["ID"])); ?>"></a>
        </div>
        <div class="widget-content">
        <a href="<?php echo esc_url(the_permalink($popular["ID"])); ?>"><?php echo $popular["post_title"];?></a>
        <div class="meta">
        <span><i class="fa fa-calendar"></i><?php echo $popular["post_date"] ?></span>
        </div>
        </div>
        <div class="clearfix"></div>
        </li>  
        <?php 
        }
	wp_reset_query();
        ?>
        </ul>
        </div>
        <div class="tab-pane fadeInDown" id="tab2">
        <ul class="posts-list">
        <?php
        $args3 = array( 'numberposts' => '5','post_status'=> 'publish','orderby'  => 'date','order' => 'DESC', );
	$comments_posts = wp_get_recent_posts($args3);
        //var_dump($recent_posts);
	foreach( $comments_posts as $comment ){
            
            ?>
             <li>
        <div class="widget-thumb">
            <a href="<?php echo esc_url(the_permalink($comment["ID"])); ?>"><img alt=""  src="<?php echo esc_url(get_the_post_thumbnail_url($comment["ID"])); ?>"></a>
        </div>
        <div class="widget-content">
        <a href="<?php echo esc_url(the_permalink($comment["ID"])); ?>"><?php echo $comment["post_title"];?></a>
        <div class="meta">
        <span><i class="fa fa-calendar"></i><?php echo $comment["post_date"] ?></span>
        </div>
        </div>
        <div class="clearfix"></div>
        </li>  
        <?php 
        }
	wp_reset_query();
        ?>
        </ul>
        </div>
        
        <div class="tab-pane active" id="tab3">
           <ul class="posts-list">
        <?php
        $args1 = array( 'numberposts' => '5','post_status'=> 'publish','orderby'  => 'comment_count','order' => 'DESC', );
	$popular_posts = wp_get_recent_posts($args1);
        //var_dump($recent_posts);
	foreach( $popular_posts as $popular ){
            
            ?>
             <li>
        <div class="widget-thumb">
            <a href="<?php echo esc_url(the_permalink($popular["ID"])); ?>"><img alt="" src="<?php echo esc_url(get_the_post_thumbnail_url($popular["ID"])); ?>"></a>
        </div>
        <div class="widget-content">
        <a href="<?php echo esc_url(the_permalink($popular["ID"])); ?>"><?php echo $popular["post_title"];?></a>
        <div class="meta">
        <span><i class="fa fa-calendar"></i><?php echo $popular["post_date"] ?></span>
        </div>
        </div>
        <div class="clearfix"></div>
        </li>  
        <?php 
        }
	wp_reset_query();
        ?>
        </ul>
        </div>
        </div>
        </div>
<?php 

}
         
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

 class wpb_widget1 extends WP_Widget {

            function __construct() {
                parent::__construct(
// Base ID of your widget
                        'wpb_widget1',
// Widget name will appear in UI
                        __('Puploar Pos Ar', 'wpb_widget_domain1'),
// Widget description
                        array('description' => __('Sample widget based Poplur post Ar', 'wpb_widget_domain1'),)
                );
            }

// Creating widget front-end

            public function widget($args, $instance) {
                $title = apply_filters('widget_title', $instance['title']);

// before and after widget arguments are defined by themes
                ?>
                <div style="padding-top: 0px" class="entry-widget">
                    <style>.nav-tabs>li {
                            float: right !important;
                                        }</style>
                    <ul style="    margin: 0px;" class="nav nav-tabs">
                        <li class="active">
                        <a data-toggle="tab" href="http://emadsh.com/themes/intimate/carousel-slider.html#tab1" aria-expanded="false">شائع</a>
                        </li>
                        <li class="">
                        <a data-toggle="tab" href="http://emadsh.com/themes/intimate/carousel-slider.html#tab2" aria-expanded="false">مؤخراً</a>
                        </li>
                        <li class="">
                        <a data-toggle="tab" href="http://emadsh.com/themes/intimate/carousel-slider.html#tab3" aria-expanded="true">اخر التعليقات</a>
                        </li>
                        </ul>
                        <div class="tab-content">
                        
                        <div class="tab-pane fadeInDown" id="tab1">
                            <ul class="posts-list">
                <?php
                $args1 = array('post_type' =>'arpost', 'numberposts' => '5', 'post_status' => 'publish', 'orderby' => 'rand', 'order' => 'DESC',);
                $popular_posts = wp_get_recent_posts($args1);
                //var_dump($recent_posts);
                foreach ($popular_posts as $popular) {

                ?>
                                 <li>
                            <div class="widget-thumb">
                                <a href="<?php echo esc_url(the_permalink($popular["ID"])); ?>"><img alt="" src="<?php echo esc_url(get_the_post_thumbnail_url($popular["ID"])); ?>"></a>
                            </div>
                            <div class="widget-content">
                            <a href="<?php echo esc_url(the_permalink($popular["ID"])); ?>"><?php echo $popular["post_title"]; ?></a>
                            <div class="meta">
                            <span><i class="fa fa-calendar"></i><?php echo $popular["post_date"] ?></span>
                            </div>
                            </div>
                            <div class="clearfix"></div>
                            </li>  
                    <?php
                }
                wp_reset_query();
                    ?>
                        </ul>
                        </div>
                        <div class="tab-pane fadeInDown" id="tab2">
                        <ul class="posts-list">
                <?php
                $args3 = array('post_type' => 'arpost','numberposts' => '5', 'post_status' => 'publish', 'orderby' => 'date', 'order' => 'DESC',);
                $comments_posts = wp_get_recent_posts($args3);
                //var_dump($recent_posts);
                foreach ($comments_posts as $comment) {

                ?>
                                 <li>
                            <div class="widget-thumb">
                                <a href="<?php echo esc_url(the_permalink($comment["ID"])); ?>"><img alt=""  src="<?php echo esc_url(get_the_post_thumbnail_url($comment["ID"])); ?>"></a>
                            </div>
                            <div class="widget-content">
                            <a href="<?php echo esc_url(the_permalink($comment["ID"])); ?>"><?php echo $comment["post_title"]; ?></a>
                            <div class="meta">
                            <span><i class="fa fa-calendar"></i><?php echo $comment["post_date"] ?></span>
                            </div>
                            </div>
                            <div class="clearfix"></div>
                            </li>  
                    <?php
                }
                wp_reset_query();
                    ?>
                        </ul>
                        </div>
                        
                        <div class="tab-pane active" id="tab3">
                           <ul class="posts-list">
                <?php
                $args1 = array('post_type' => 'arpost','numberposts' => '5', 'post_status' => 'publish', 'orderby' => 'comment_count', 'order' => 'DESC',);
                $popular_posts = wp_get_recent_posts($args1);
                //var_dump($recent_posts);
                foreach ($popular_posts as $popular) {

                ?>
                                 <li>
                            <div class="widget-thumb">
                                <a href="<?php echo esc_url(the_permalink($popular["ID"])); ?>"><img alt="" src="<?php echo esc_url(get_the_post_thumbnail_url($popular["ID"])); ?>"></a>
                            </div>
                            <div class="widget-content">
                            <a href="<?php echo esc_url(the_permalink($popular["ID"])); ?>"><?php echo $popular["post_title"]; ?></a>
                            <div class="meta">
                            <span><i class="fa fa-calendar"></i><?php echo $popular["post_date"] ?></span>
                            </div>
                            </div>
                            <div class="clearfix"></div>
                            </li>  
                    <?php
                }
                wp_reset_query();
                    ?>
                        </ul>
                        </div>
                        </div>
                        </div>
                <?php
            }

// Widget Backend 
            public function form($instance) {
                if (isset($instance['title'])) {
                    $title = $instance['title'];
                } else {
                    $title = __('New title', 'wpb_widget_domain1');
                }
// Widget admin form
                ?>
                <p>
                <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
                </p>
                <?php
            }

// Updating widget replacing old instances with new
            public function update($new_instance, $old_instance) {
                $instance = array();
                $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
                return $instance;
            }

        }

        // Class wpb_widget ends here

        /* Add theme post formats */
                add_theme_support( 'post-formats', array( 'aside', 'gallery','link','quote','video','status','audio','chat' ) );

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on me, use a find and replace
		 * to change 'me' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'me', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'me' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'me_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;

// add post-formats to post_type 'page'
add_action('init', 'my_theme_slug_add_post_formats_to_page', 11);

function my_theme_slug_add_post_formats_to_page(){
    add_post_type_support( 'post', 'post-formats' );
    register_taxonomy_for_object_type( 'post_format', 'page' );
}

add_action( 'after_setup_theme', 'me_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function me_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'me_content_width', 640 );
}
add_action( 'after_setup_theme', 'me_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function me_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'me' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'me' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'me_widgets_init' );
function me_widgets_init1() {
    register_sidebar( array(
        'name'          => esc_html__( 'Arabic', 'me' ),
        'id'            => 'sidebar-2',
        'description'   => esc_html__( 'Add widgets here.', 'me' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'me_widgets_init1' );

/**
 * Enqueue scripts and styles.
 */
function me_scripts() {
	wp_enqueue_style( 'me-style', get_stylesheet_uri() );

	wp_enqueue_script( 'me-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'me-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'me_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


<?php 
/*
* Template Name: Blog Post test
*/
get_header(); ?>
<div style="padding-top: 50px" class="entry-widget">
        
        <ul class="nav nav-tabs">
        <li class="">
        <a data-toggle="tab" href="http://demo.graygrids.com/themes/intimate/carousel-slider.html#tab1" aria-expanded="false">Popular</a>
        </li>
        <li class="">
        <a data-toggle="tab" href="http://demo.graygrids.com/themes/intimate/carousel-slider.html#tab2" aria-expanded="false">Recent</a>
        </li>
        <li class="active">
        <a data-toggle="tab" href="http://demo.graygrids.com/themes/intimate/carousel-slider.html#tab3" aria-expanded="true">Comments</a>
        </li>
        </ul>
        <div class="tab-content">
        
        <div class="tab-pane fadeInDown" id="tab1">
            <ul class="posts-list">
        <?php
        $args1 = array( 'numberposts' => '5','post_status'=> 'publish','orderby'  => 'date','order' => 'DESC', );
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
        $args = array( 'numberposts' => '5','post_status'=> 'publish','orderby'  => 'date','order' => 'DESC', );
	$recent_posts = wp_get_recent_posts($args);
        //var_dump($recent_posts);
	foreach( $recent_posts as $recent ){
            
            ?>
             <li>
        <div class="widget-thumb">
            <a href="<?php echo esc_url(the_permalink($recent["ID"])); ?>"><img alt="" src="<?php echo esc_url(get_the_post_thumbnail_url($recent["ID"])); ?>"></a>
        </div>
        <div class="widget-content">
        <a href="<?php echo esc_url(the_permalink($recent["ID"])); ?>"><?php echo $recent["post_title"];?></a>
        <div class="meta">
        <span><i class="fa fa-calendar"></i><?php echo $recent["post_date"] ?></span>
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
        <li>
        <div class="widget-thumb">
        <a href="http://demo.graygrids.com/themes/intimate/carousel-slider.html#"><img alt="" src="./Intimate - Home with Post Carousel_files/post1.jpg"></a>
        </div>
        <div class="widget-content">
        <a href="http://demo.graygrids.com/themes/intimate/carousel-slider.html#">Aladdin rides
        'magic carpet' at New York in
        Halloween prank</a>
        <div class="meta">
        <span><i class="ico-calendar-alt-fill"></i>
        October 7,2015</span>
        <span><i class="ico-tag"></i>
        Technology</span>
        </div>
        </div>
        <div class="clearfix"></div>
        </li>
       
        </ul>
        </div>
        <a class="btn btn-common more" href="http://demo.graygrids.com/themes/intimate/carousel-slider.html#">More
        Stories <i class="ico-arrow-right"></i></a>
        </div>
        </div>
<?php get_footer(); ?>
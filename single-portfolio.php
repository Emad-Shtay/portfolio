<?php
/*
 * Template Name: single portfolio page
 * Template Post Type: portfolio
 */
get_header();?>
<?php the_post(); 

?>
<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
    <h2 class="entry-title"><?php the_title(); ?></h2>
<div class="breadcrumb">
<a href="#"><i class="icon-home"></i> Home</a>
<span class="crumbs-spacer"><i class="ico-fast-forward"></i></span> <span class="current">Portfolio</span>
</div>
</div>
</div>
</div>
</div>

<div id="content">
            <div class="container">
            <div class="row">
            <div class="col-md-6">
            
                <div class="thumbs-gallery">
        <div class="touch-slider owl-carousel owl-theme" style="opacity: 1; display: block;">
        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3330px; left: 0px; display: block; transition: all 800ms ease; transform: translate3d(-1110px, 0px, 0px);"><div class="owl-item" style="width: 555px;"><div class="item">
         <a data-lightbox="image" href="<?php echo esc_url(the_post_thumbnail_url()); ?>"><img alt="" class="img-responsive" src="<?php  echo esc_url(the_post_thumbnail_url()); ?>"> <span><i class="fa fa-expand"></i></span></a>
        </div></div></div></div>


        <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="ico-keyboard_arrow_left"></i></div><div class="owl-next"><i class="ico-keyboard_arrow_right"></i></div></div></div>
        </div>
        </div>
            </div>
            <div class="col-md-6">
            <h2 class="title1">Project Description</h2>
            <div style="height: 130px;    font-size: 14px !important;" class="description-text">
                <p> <?php  the_content(); ?></p>
      
            </div>
         
          
            <span class="space"></span>
            <?php if(!get_post_meta(get_the_ID(),'livepreview_24686')){
                echo "value";
            } ?>
            <a target="_blank" class="btn btn-border" href="<?php echo get_post_meta(get_the_ID(),'livepreview_24686',true) ?>"><i class="fa fa-eye"></i> Live Preview</a>
            <a target="_blank" class="btn btn-border"  href="<?php echo get_post_meta(get_the_ID(),'viewpresention',true) ?>"><i class="fa fa-eye"></i> Promo Preview</a>

            </div>
            </div>
            </div>
         <div class="content-section">
            <div class="container">
            <div class="row">
          <div class="col-md-12">
    <h2 class="entry-title">More Portfolio</h2>

</div>      
    <?php

$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID),'post_type' => 'portfolio', ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>
 
             
            
            <div id="portfolio-list" class="fail">
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
            <div class="portfolio-item">
                <div class="portfolio-img" style="width: 360px;height: 270px;">
                <img alt="" src="<?php echo esc_url(the_post_thumbnail_url()) ;?>">
            <div class="portfolio-item-content">
                <h3 class="field-content"><a href="#"><?php the_title(); ?></a></h3>
            </div>
            <div class="icon-zoom-in">
                <a class="link" href="<?php echo esc_url(the_permalink()); ?>"><i class="fa fa-link"></i></a> <a class="zoom" data-lightbox="roadtrip" href="<?php echo esc_url(the_post_thumbnail_url()) ;?>"><i class="fa fa-search-plus"></i></a>
            </div>
            </div>
            </div>
            </div>
    

            </div>
           
<?php }
wp_reset_postdata(); ?>
    
                  
            </div>
            </div>
            </div> 
            </div>
<?php get_footer();
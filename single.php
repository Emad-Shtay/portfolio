<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package me
 */

get_header(); ?>
<?php the_post(); ?>
<!-- Head Single Post Page -->
<section class="text-center" id="hero-area">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="intro-area">
    <h2 class="page-title"><?php the_title(); ?></h2>
<div class="entry-meta">
    <span class="meta-part"><i class="fa fa-user"></i><a href="#"><?php the_author_meta('nickname'); ?></a></span> 
<span class="meta-part"><i class="fa fa-calendar"></i><a href="#"><?php the_date(); ?></a></span> 
<span class="meta-part"><i class="fa fa-comments"></i> <a href="#"><?php count(the_comment()); ?></a></span> 
<span class="meta-part"><i class="fa fa-tag"></i> <a href="#"><?php the_tags(); ?></a></span>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="single-post" id="content">
        <div class="container">
        <div class="row">
        <div class="col-md-8">
        
        <article class="single-post-content">
        
        <div class="blog-item-wrap">
            <a data-lightbox="image" href="<?php echo esc_url(the_post_thumbnail_url()); ?>"><img class="img-responsive"  alt="" src="<?php echo esc_url(the_post_thumbnail_url()); ?>"></a>
        </div><br>
        <div class="post-content"> <?php the_content(); ?> </div>

        <div class="links">

            <a class="heart" href="#"><i class="fa fa-heart"></i>(143)</a> 
            <a  target="_blank" title="" class="" href="https://twitter.com/share?url=<?php echo esc_url(get_permalink()); ?>[title]=<?php echo get_the_title(); ?> %23syria_programmer"><i class="fa fa-twitter"></i> Tweet</a> 
            <a data-url="<?php the_permalink(); ?>" data-title="<?php the_title_attribute(); ?> target="_blank" class="" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink()); ?>&text=<?php echo get_the_title(); ?>"><i class="fa fa-facebook"></i> Share</a> 
            <a target="_blank" class="" href="#"><i class="fa fa-google-plus"></i> Google+</a>
            <a target="_blank" class="" href="#"><i class="fa fa-linkedin"></i> Linkedin</a>
        </div>
        </article>
        <?php
        // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
        ?>
        </div>
               <!-- Page Sidebar -->
          <div class="col-md-4">
                    <div class="sidebar">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
        </div>
        </div>
</div>
            <?php

get_footer();

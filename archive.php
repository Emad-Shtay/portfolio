<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package me
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
<div id="content">
        <div class="container">
        <div class="row">
        <div class="col-md-8">
        
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
                          //  var_dump(the_post());
                                ?>
                        
                            <article>
        
        <div class="blog-item-wrap">
        
        <div class="post-format">
            <?php
           if(has_post_format('video')){
             echo "<span><i class='fa fa-video-camera'></i></span>";

           }
           elseif (has_post_format('chat')) {
                    echo "<span><i class='fa fa-comments-o'></i></span>";

       }
          elseif (has_post_format('audio')) {
                    echo "<span><i class='fa fa-volume-down'></i></span>";

       }
          elseif (has_post_format('status')) {
                    echo "<span><i class='fa fa-star'></i></span>";

       }
          elseif (has_post_format('quote')) {
                    echo "<span><i class='fa fa-quote-right'></i></span>";

       }
          elseif (has_post_format('aside')) {
         echo "<span><i class='fa fa-file-text-o'></i></span>";

       }
          elseif (has_post_format('gallery')) {
         echo "<span><i class='fa fa-camera'></i></span>";

       }
              
        else{
               echo "<span><i class='fa fa-arrows'></i></span>";

            }
          ?>
          
        </div>
            <h2 class="blog-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h2>
        <div class="entry-meta">
            <span class="meta-part"><i class="fa fa-user"></i> <a href="<?php  echo esc_url(the_author_meta('user_url'));?>"><?php the_author_meta('nickname'); ?></a></span>
            <span class="meta-part"><i class="fa fa-calendar"></i> <a href="#"><?php the_date(); ?></a></span> 
            <span class="meta-part"><i class="fa fa-comments"></i><a href="#"><?php echo $post->comment_count ?></a></span> 
            <span class="meta-part"><i class="fa fa-tag"></i><?php the_tags(); ?></span> 
        </div>
        
        <div class="feature-inner">
            <a data-lightbox="roadtrip" href="<?php echo esc_url(the_post_thumbnail_url()); ?>"><img alt="" src="<?php echo esc_url(the_post_thumbnail_url()); ?>"></a>
        </div>
        
            <div class="post-content"> <?php echo wp_trim_words( get_the_content(), 40, '...' ); ?> </div>
        <div class="entry-more">
        <div class="pull-left">
            <a class="btn btn-common" href="<?php echo esc_url(get_permalink()); ?>">Read More <i class="fa fa-arrow-right"></i></a>
        </div>
        
        </div>
        </div>
        </article>
                        
			<?php endwhile;

		

		endif; ?>

        </div>
          <div class="col-md-4">
                    <div class="sidebar">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
        
        </div>
        
        </div></div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

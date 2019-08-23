
<?php 
/*
* Template Name: Blog Post inclued
*/
get_header(); ?>

<!-- Page Header -->
<div class="page-header">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
        <h2 class="entry-title"><?php the_title(); ?></h2>
    <div class="breadcrumb">
      
    </div>
    </div>
    </div>
    </div>
</div>
<!-- Page  Blog Item Wrap-->
<!-- 

<?php
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

  $args = array(
    'post_type' => 'post', // enter custom post type
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page'   => 5,
    'post_status'      => 'publish',
    'paged' => $paged,
    'orderby' => array( 'date' => 'ASC', 'menu_order' => 'ASC' )
  );

  $loop = new WP_Query( $args );
  if( $loop->have_posts() ):
  while( $loop->have_posts() ): $loop->the_post(); global $post;
    echo '<div class="portfolio">';
    echo '<h3>' . get_the_title() . '</h3>';
    echo '<div class="portfolio-image">'. get_the_post_thumbnail( $id ).'</div>';
    echo '<div class="portfolio-work">'. get_the_content().'</div>';
    echo '</div>';
  endwhile;
  endif;
?>
-->
<div id="content">
        <div class="container">
        <div class="row">
        <div class="col-md-8">
        <?php
        $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
        $args = array(
          'post_type' => 'post', // enter custom post type'orderby' => 'date',
            'orderby' => array('menu_order' => 'ASC', 'date' => 'DESC'  ),      
          'posts_per_page'   => 5,
          'post_status'      => 'publish',
          'paged' => $paged,
          
        );
        //var_dump($args);
        $loop = new WP_Query( $args );
        if( $loop->have_posts() ):
        while( $loop->have_posts() ): $loop->the_post(); global $post;?>
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
            <a data-lightbox="image" href="<?php echo esc_url(the_post_thumbnail_url()); ?>"><img class="img-responsive" alt="" src="<?php echo esc_url(the_post_thumbnail_url()); ?>"></a>
        </div>
        
            <div class="post-content"> <?php echo wp_trim_words( get_the_content(), 40, '...' ); ?> </div>
        <div class="entry-more">
        <div class="pull-left">
            <a class="btn btn-common" href="<?php echo esc_url(get_permalink()); ?>">Read More <i class="fa fa-arrow-right"></i></a>
        </div>

        </div>
        </div>
        </article>
            <?php
            
             endwhile;
  endif;
?>
            <article>

<ul class="pager">
       <?php
$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $loop->max_num_pages
) );
?>  
</ul>
</article>
            
   
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

<?php get_footer(); ?>
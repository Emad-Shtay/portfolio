<?php
/*
 * Template Name: single product page
 * Template Post Type: product
 */
get_header();?>
<?php the_post(); ?>
<header class="entry-header header-wth-bg">
    <div class="container-content">
        <div class="grid">
            <div class="one-half">
                <div class="entry-image browser-mockup">
                    <img width="800" height="600" src="<?php echo esc_url(the_post_thumbnail_url()); ?>" class="attachment-small_thumb size-small_thumb wp-post-image" alt=""sizes="(max-width: 500px) 100vw, 500px"> 
                </div>
            </div>
            <div class="one-half">
                <header class="entry-header">
                    <h1 class="h2 mt entry-title"><span class="product-name"><?php the_title(); ?></span><span class="product-desc">Is a <?php the_category($post->ID); ?> Website Theme</span></h1> </header>
                <div class="entry-content">
                    <div class="product-features">
                        <div class="section">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="product-link">
                            <a class="button button-ghost button-demo mr" href="<?php echo get_post_meta(get_the_ID(), 'livepreview_24686', true) ?>" target="_blank">Live Demo</a>
                            <a data-mediabox="my-gallery-name"
                               data-iframe="true" 
                               data-width="853"
                               data-height="480" class="button button-ghost button-scrollto-download" href="<?php echo esc_url(get_post_meta(get_the_ID(), 'viewpresention_75213', true)) ?>" target="">
                                Promo Video </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="animated fadeIn" id="content">
    <div class="container-content" style="max-width:960px;">
        <main role="main">
            <h2 style="x-larg"><strong>Description</strong></h2>
            <div class="content-box" style="font-size:18px;">
                <article class="post-3691 templates type-templates status-publish has-post-thumbnail hentry">
                    <div>
                        <div class="entry-content product-description">
                           <?php the_content(); ?>
                        </div>
                      
                    </div>
                </article>
            </div>

            <div id="download" class="section content-box download-options">
                <h2 class="x-larg text-center" style="margin-top:0;">Get Your Website Now &DownArrow;</h2>
                <div class="grid" style="margin-left: 25%; margin-right: 25%;">

                    <div class="download-card download-paid one-half text-center">
                        <h3 ><?php the_title() ?></h3>
                       
                        <ul class="bare">
                            <h5 class="h2">Free Domain</h5>
                            <h5 class="h2">Free 1GB Storage </h5>
                            <li class="h2">Email Account</li>
                            <li class="h2">99.9% Website Uptime</li>
                            <li class="h2"> Enhanced Security</li>
                            <li><a href="http://emadsh.com/contact/" target="_blank">Support</a> via e-mail</li>
                            <li class="">Setup Your Content</li>
                            <li class="">1 Video Promation</li>
                            <li class="">Setup Email in Your Phone</li>
                        </ul>
                        <div class="text-center">
                            <a class="button button-primary" href="http://emadsh.com/contact/" target="_blank">Contact Me</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section text-center">
                <h3 class="x-larg">Share this →</h3>
                <div class="robots-nocontent social-share-buttons">
                    <a class="button button-facebook" style="background: #3B5997;" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(the_permalink()); ?>" target="_blank">
                        <svg class="icon" viewBox="0 0 16 28">
                        <path d="M14.984 0.187v4.125h-2.453c-1.922 0-2.281 0.922-2.281 2.25v2.953h4.578l-0.609 4.625h-3.969v11.859h-4.781v-11.859h-3.984v-4.625h3.984v-3.406c0-3.953 2.422-6.109 5.953-6.109 1.687 0 3.141 0.125 3.563 0.187z"></path>
                        </svg><span>Share</span></a>
                    <a class="button button-twitter" style="background: #00aced;" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&amp;url=<?php echo esc_url(the_permalink()); ?>" target="_blank">
                        <svg class="icon" viewBox="0 0 26 28">
                        <path d="M25.312 6.375c-0.688 1-1.547 1.891-2.531 2.609 0.016 0.219 0.016 0.438 0.016 0.656 0 6.672-5.078 14.359-14.359 14.359-2.859 0-5.516-0.828-7.75-2.266 0.406 0.047 0.797 0.063 1.219 0.063 2.359 0 4.531-0.797 6.266-2.156-2.219-0.047-4.078-1.5-4.719-3.5 0.313 0.047 0.625 0.078 0.953 0.078 0.453 0 0.906-0.063 1.328-0.172-2.312-0.469-4.047-2.5-4.047-4.953v-0.063c0.672 0.375 1.453 0.609 2.281 0.641-1.359-0.906-2.25-2.453-2.25-4.203 0-0.938 0.25-1.797 0.688-2.547 2.484 3.062 6.219 5.063 10.406 5.281-0.078-0.375-0.125-0.766-0.125-1.156 0-2.781 2.25-5.047 5.047-5.047 1.453 0 2.766 0.609 3.687 1.594 1.141-0.219 2.234-0.641 3.203-1.219-0.375 1.172-1.172 2.156-2.219 2.781 1.016-0.109 2-0.391 2.906-0.781z"></path>
                        </svg><span>Tweet</span></a>
                    <a class="button button-googleplus" style="background: #D64937;" href="https://plus.google.com/share?url=<?php echo esc_url(the_permalink()); ?>" target="_blank">
                        <svg class="icon" viewBox="0 0 36 28">
                        <path d="M22.453 14.266c0 6.547-4.391 11.188-11 11.188-6.328 0-11.453-5.125-11.453-11.453s5.125-11.453 11.453-11.453c3.094 0 5.672 1.125 7.672 3l-3.109 2.984c-0.844-0.812-2.328-1.766-4.562-1.766-3.906 0-7.094 3.234-7.094 7.234s3.187 7.234 7.094 7.234c4.531 0 6.234-3.266 6.5-4.937h-6.5v-3.938h10.813c0.109 0.578 0.187 1.156 0.187 1.906zM36 12.359v3.281h-3.266v3.266h-3.281v-3.266h-3.266v-3.281h3.266v-3.266h3.281v3.266h3.266z"></path>
                        </svg>
                    </a>
                    <a class="button button-linkedin" style="background: #0074A1;" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo esc_url(the_permalink()); ?>;title=<?php the_title(); ?>" target="_blank">
                        <svg class="icon" viewBox="0 0 24 28">
                        <path d="M5.453 9.766v15.484h-5.156v-15.484h5.156zM5.781 4.984c0.016 1.484-1.109 2.672-2.906 2.672v0h-0.031c-1.734 0-2.844-1.188-2.844-2.672 0-1.516 1.156-2.672 2.906-2.672 1.766 0 2.859 1.156 2.875 2.672zM24 16.375v8.875h-5.141v-8.281c0-2.078-0.75-3.5-2.609-3.5-1.422 0-2.266 0.953-2.641 1.875-0.125 0.344-0.172 0.797-0.172 1.266v8.641h-5.141c0.063-14.031 0-15.484 0-15.484h5.141v2.25h-0.031c0.672-1.062 1.891-2.609 4.672-2.609 3.391 0 5.922 2.219 5.922 6.969z"></path>
                        </svg>
                    </a>
                    <a class="button button-pinterest" style="background: #bd081c;" href="https://pinterest.com/pin/create/button/?url=<?php echo esc_url(the_permalink()); ?>&media=<?php echo esc_url(the_post_thumbnail_url()); ?>&amp;description=<?php the_title(); ?>" target="_blank">
                        <svg class="icon" viewBox="0 0 24 28">
                        <path d="M24 14c0 6.625-5.375 12-12 12-1.188 0-2.312-0.172-3.406-0.5 0.453-0.719 0.969-1.641 1.219-2.562 0 0 0.141-0.531 0.844-3.297 0.406 0.797 1.625 1.5 2.922 1.5 3.859 0 6.484-3.516 6.484-8.234 0-3.547-3.016-6.875-7.609-6.875-5.688 0-8.563 4.094-8.563 7.5 0 2.063 0.781 3.906 2.453 4.594 0.266 0.109 0.516 0 0.594-0.313 0.063-0.203 0.187-0.734 0.25-0.953 0.078-0.313 0.047-0.406-0.172-0.672-0.484-0.578-0.797-1.313-0.797-2.359 0-3.031 2.266-5.75 5.906-5.75 3.219 0 5 1.969 5 4.609 0 3.453-1.531 6.375-3.813 6.375-1.25 0-2.188-1.031-1.891-2.312 0.359-1.516 1.062-3.156 1.062-4.25 0-0.984-0.531-1.813-1.625-1.813-1.281 0-2.312 1.328-2.312 3.109 0 0 0 1.141 0.391 1.906-1.313 5.563-1.547 6.531-1.547 6.531-0.219 0.906-0.234 1.922-0.203 2.766-4.234-1.859-7.187-6.078-7.187-11 0-6.625 5.375-12 12-12s12 5.375 12 12z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="related-posts section">
                <div class="x-larg text-muted text-center ">More Website Theme &DownArrow;</div>
                <div class="grid">
                    <?php
                  
                    $related = get_posts(array('category__in' => wp_get_post_categories($post->ID), 'numberposts' => 4, 'post__not_in' => array($post->ID), 'post_type' => 'product',));
                    if ($related)
                        foreach ($related as $post) {
                            setup_postdata($post);
                            ?>
                 
                    <div class="one-half">
                        <div class="media">
                            <a href="<?php echo esc_url(the_permalink()); ?>" rel="bookmark" title="Coming Soon">
                                <div class="browser-mockup">
                                    <img width="500" height="375" src="<?php echo esc_url(the_post_thumbnail_url()); ?>" class="attachment-small_thumb size-small_thumb wp-post-image" alt=""sizes="(max-width: 500px) 100vw, 500px"> </div>
                            </a>
                            <div class="media-body">
                                <h3 class="entry-title text-center mt"><a href="<?php echo esc_url(the_permalink()); ?>" rel="bookmark" title="Coming Soon"><?php the_title(); ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    wp_reset_postdata();?>
                    </div>
                </div>
              <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
            </div>

        </main>
    </div>
    </div>
</div>

<?php get_footer();
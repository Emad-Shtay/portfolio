<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package me
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title">404</h1>
				</header><!-- .page-header -->

				<div style="text-align: center;" class="page-content">
				    <iframe height="450" width="800" src="http://emadsh.com/wp-content/uploads/404/index.html" style="border:2px solid grey;"></iframe>


				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package IRIE_PIXEL
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<div class="page-content">
					<p>It looks like nothing was found at this location.</p>
					<a class="button button-grey button-fade-activation hvr-shutter-in-horizontal" href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

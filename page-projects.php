<?php
/**
 * Template Name: Projects
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package IRIE_PIXEL
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="row featured-projects-row wow fadeIn">
					<h1 class="page-title wow fadeIn">
						<?php the_title(); ?>
					</h1>
					<div class="project-list-description wow fadeIn">
						<?php the_content(); ?>
					</div>

					<!-- homepage projects list -->
					<?php

						// WP_Query arguments
						$args = array (
							'post_type'         => array( 'project' ),
							'order'             => 'ASC',
							'orderby'           => 'menu_order',
							'posts_per_page' 	=> '300',
						);

						// The Query
						$query = new WP_Query( $args );
					?>
					
					<div class="project-list wow fadeIn">
						<!-- The Loop -->
						<?php if ( $query->have_posts() ) : ?>
						    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
								
								<a class="project-item-url" href='<?php the_permalink(); ?>'>
									<div class="project-item wow fadeIn">
										<div class="project-item-background" style="background-image: url(<?php the_field('project_line_thumb'); ?>);">
										</div>
										<h3><?php the_field('project_full_name'); ?></h3>
									</div>
								</a>
						 
						    <?php endwhile; ?>
						<?php endif; ?>
					</div>

					<div class="button button-grey button-centered button-pointer back-to-top wow fadeIn">TOP</div>

					<!-- Restore original Post Data -->
					<?php wp_reset_postdata(); ?>

				</div>
				
			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

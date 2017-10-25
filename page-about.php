<?php
/**
 * Template Name: About
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

				<div class="row top-section-row wow fadeIn">
					<h1 class="page-title">
						<?php the_title(); ?>
					</h1>
				</div>

				<div class="row about-header-row wow fadeIn" style="background-image: url(<?php the_field('about_header_background_image'); ?>);">
					<div class="cell">
						<div class="about-description-top">
							<?php the_content(); ?>
							<div class="button read-more-about mobile">read more</div>
						</div>

						<div class="about-description-bottom">
							<div class="about-description-left">
								<?php the_field('about_text_left'); ?>
							</div>
							<div class="about-description-right">
								<?php the_field('about_text_right'); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="row about-services-row wow fadeIn" id="services">
					<h2 class="section-title wow fadeIn">
						<?php the_field('services_section_title'); ?>
					</h2>

					<div class="cell">

							<?php if(get_field('services_section')): ?>
								<?php while(the_repeater_field('services_section')): ?>

									<!-- CHECK ALT & TITLE IN IMG !!!!!!!!!!!! -->

									<div class="about-service-item wow fadeIn">
										<div class="about-service-image">
											<img src="<?php the_sub_field('service_image'); ?>" title="<?php the_sub_field('title'); ?>" alt="<?php the_sub_field('alt'); ?>" />
										</div>
										<div class="about-service-text-block">
									    	<h3 class="about-service-title">
									    		<?php the_sub_field('service_name'); ?>
									    	</h3>
									    	<div class="about-service-description">
									    		<?php the_sub_field('service_description'); ?>
									    	</div>
								    	</div>
								    </div>

								<?php endwhile; ?>
							<?php endif; ?>

					</div>
				</div>

				<div class="row about-instagram-feed-row row-grey wow fadeIn">
					<h2 class="section-title wow fadeIn">
						<?php the_field('instagram_section_title'); ?>
					</h2>
					<?php echo do_shortcode('[instashow id="2"]'); ?>
					<a class="button button-grey button-centered wow fadeIn" href="<?php the_field('instagram_button_url'); ?>" target="_blank"><?php the_field('instagram_button_text'); ?></a>
				</div>

				<div class="row about-testimonial-row wow fadeIn">
					<h2 class="section-title wow fadeIn">
						<?php the_field('testimonials_section_title'); ?>
					</h2>

					<!-- homepage projects list -->
					<?php

						// WP_Query arguments
						$args = array (
							'post_type'         => array( 'testimonial' ),
							'orderby'           => 'rand',
							'posts_per_page' 	=> '-1',
						);

						// The Query
						$query = new WP_Query( $args );
					?>
					<div class="cell cell-1400">
						<div class="about-testimonial-list wow fadeIn">
							<!-- The Loop -->
							<?php if ( $query->have_posts() ) : ?>
							    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
 
									<div class="about-testimonial-item wow fadeIn">
										<h3 class="testimonial-author"><?php the_title(); ?></h3>
										<div class="testimonial-author-name"><?php the_field('client_name_surname'); ?></div>
										<div class="testimonial-text">
											<?php the_content(); ?>
										</div>
									</div>

							    <?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>

					<!-- Restore original Post Data -->
					<?php wp_reset_postdata(); ?>

					<!-- <a class="button button-grey" href="<?php the_field('testimonials_button_text'); ?>" target="_blank"><?php the_field('testimonials_button_url'); ?></a> -->
				</div>



			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

<?php
/**
 * Template Name: Homepage
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

				<div class="row homepage-intro-row row-grey wow fadeIn">
					<div class="cell">

						<div class="homepage-intro">
							<!-- <h1><?php the_title(); ?></h1> -->
							<div class="homepage-intro-image wow fadeIn">
								<!-- ACF image srcset responsive aproach -->
								<?php $img = get_field('homepage_intro_image'); ?>

								<?php
									$image = get_field('homepage_intro_image');
									$size = 'full'; // (thumbnail, medium, large, full or custom size)

									if( $image )
									{
										echo wp_get_attachment_image( $image, $size );
									}
								?>
								<!-- ACF image srcset responsive aproach end -->
							</div>
							<div class="homepage-intro-text wow fadeIn">
								<?php the_content(); ?>
								<!-- <div class="homepage-intro-text-slogan"><?php the_field('homepage_intro_text'); ?></div> -->
								<a class="button button-grey button-fade-activation hvr-shutter-in-horizontal" href="<?php the_field('cv_file'); ?>" target="_blank" onClick="_gaq.push(['_trackEvent', 'pdf', 'download', '<?php the_field('cv_file'); ?>'])"><?php the_field('homepage_intro_button_text'); ?></a>
							</div>
						</div>

					</div>
				</div>

				<div class="row featured-projects-row wow fadeIn">
					<h2 class="section-title wow fadeIn">
						<?php the_field('homepage_project_section_title'); ?>
					</h2>

					<!-- homepage projects list -->
					<?php

						// WP_Query arguments
						$args = array (
							'post_type'         => array( 'project' ),
							'order'             => 'ASC',
							'orderby'           => 'menu_order',
							'posts_per_page' 	=> '6',
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

					<!-- Restore original Post Data -->
					<?php wp_reset_postdata(); ?>

				</div>

				<div class="row row-grey wow fadeIn u-centered">
					<a class="button button-grey button-centered wow fadeIn" href="<?php echo esc_url( home_url( '/' ) ); ?>projects">All projects</a>
				</div>

				<div class="row homepage-services-row wow fadeIn">
					<h2 class="section-title">
						<?php the_field('homepage_services_section_title'); ?>
					</h2>
					<div class="cell">

						<div class="service-grid">
						<?php if(get_field('services')): ?>
							<?php while(the_repeater_field('services')): ?>
								<?php $service_image = get_sub_field('service_image'); ?>
								<div class="homepage-service-item service-item wow fadeIn">
									<a class="homepage-service-item-link" href='<?php echo esc_url( home_url( '/' ) ); ?>about#services'>
										<div class="homepage-service-image">
											<img src="<?php echo $service_image['url'] ?>" title="<?php echo $service_image['title'] ?>" alt="<?php echo $service_image['alt'] ?>" />
										</div>
								    	<h3 class="homepage-service-title">
								    		<?php the_sub_field('service_name'); ?>
								    	</h3>
								    </div>
									</a>
							<?php endwhile; ?>
						<?php endif; ?>
						</div>

					</div>
				</div>

			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

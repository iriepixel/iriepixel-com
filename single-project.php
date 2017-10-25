<?php
/**
 * Template Name: Single Project
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package IRIE_PIXEL
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="row top-section-row wow fadeIn">
				<div class="page-title">Project</div>
			</div>

			<div class="row project-header-row wow fadeIn" style="background-image: url(<?php the_field('project_header_image'); ?>);">
				<div class="cell">
					<div class="project-about-section wow fadeIn">
						<h1 class="projecy-title wow fadeIn">
							<?php the_title(); ?>
						</h1>
						<div class="project-client wow fadeIn">
							Client: <?php the_field('project_client'); ?>
						</div>
						<div class="project-description wow fadeIn">
							<?php the_content(); ?>
						</div>
						<div class="project-link wow fadeIn">
							<a class="button button-white" href="<?php the_field('project_website_url'); ?>" target="_blank">Visit website</a>
						</div>
					</div>
				</div>
			</div>

			<div class="row project-devices-row row-white wow fadeIn">
				<h2 class="section-title wow fadeIn">
					Devices
				</h2>
				<div class="cell">
					<div class="project-devices wow fadeIn">
						<?php
			              $project_devices = get_field('project_devices');
			              $size = 'full'; // (thumbnail, medium, large, full or custom size)
			              if( $project_devices ) {
			                echo wp_get_attachment_image( $project_devices, $size );
			              }
			            ?>
					</div>
				</div>
			</div>

			<div class="row project-browser-screenshots-row row-grey wow fadeIn">
				<h2 class="section-title wow fadeIn">
					Screenshots
				</h2>
				<div class="cell">
					<div class="project-browser-screenshots">
						<?php if(get_field('project_browser_screenshots')): ?>
							<?php while(the_repeater_field('project_browser_screenshots')): 
								$image = get_sub_field('project_browser_screenshot_image');
								$size = 'full'; // (thumbnail, medium, large, full or custom size)
							?>
								<div class="project-browser-screenshot wow fadeIn">
									<?php echo wp_get_attachment_image( $image, $size ); ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="single-project-bottom-navigation wow fadeIn">
						<a class="button button-grey button-back button-fade-activation" href="<?php echo esc_url( home_url( '/' ) ); ?>projects">ALL PROJECTS</a>
						<div class="button button-grey button-centered button-pointer back-to-top">TOP</div>
					</div>
					<!-- post navigation -->
					
				</div>
			</div>

		<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

<?php
/**
 * Template Name: Contact
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

				<div class="row contact-header-row wow fadeIn" style="background-image: url(<?php the_field('contact_header_background_image'); ?>);">
					<div class="cell">

						<!-- CHECK ALT & TITLE IN IMG !!!!!!!!!!!! -->

						<div class="contact-header-icons wow fadeIn">
							<div class="contact-header-icon phone">
									<a href="tel:<?php the_field('contact_phone_number'); ?>">
									<div class="contact-icon">
										<img src="<?php the_field('contact_phone_icon'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('alt'); ?>" />
									</div>
									<div class="contact-icon-text"><?php the_field('contact_phone_number'); ?></div>
								</a>
							</div>

							<div class="contact-header-icon email">
								<a href="mailto:<?php the_field('contact_email'); ?>">
									<div class="contact-icon">
										<img src="<?php the_field('contact_email_icon'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('alt'); ?>" />
									</div>
									<div class="contact-icon-text">
										<?php the_field('contact_email'); ?>
									</div>
								</a>
							</div>

							<div class="contact-header-icon skype">
								<a href="skype:stafer?add">
									<div class="contact-icon">
										<img src="<?php the_field('contact_skype_icon'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('alt'); ?>" />
									</div>
									<div class="contact-icon-text">
										<?php the_field('contact_skype'); ?>
									</div>
								</a>
							</div>
						</div>

						<div class="contact-header-details wow fadeIn">
							<div class="contact-header-detail web">
								<i class="icon-web"></i>
								<a href="http://iriepixel.com" target="_blank"><?php the_field('contact_website_url'); ?></a>
							</div>
							<div class="contact-header-detail facebook">
								<i class="icon-facebook"></i>
								<a href="https://www.facebook.com/iriepixel/" target="_blank"><?php the_field('contact_facebook'); ?></a>
							</div>
							<div class="contact-header-detail address">
								<i class="icon-address"></i>
								<a href="<?php the_field('contact_address_google_maps_url'); ?>" target="_blank"><?php the_field('contact_address'); ?></a>
							</div>
						</div>

					</div>
				</div>

				<div class="row contact-text-row row-grey wow fadeIn">
					<div class="cell cell-1000">
						<?php the_content(); ?>
					</div>
				</div>

				<div class="row contact-form-row wow fadeIn">
					<?php echo do_shortcode("[contact-form-7 id='11' title='Contact form']"); ?>
				</div>

				<div id="googleMap" class="wow fadeIn"></div>

			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

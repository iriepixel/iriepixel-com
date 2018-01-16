<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IRIE_PIXEL
 */

$post_id = get_queried_object_id();

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if($post_id != 89): ?>
			<div class="row footer-contact-form-title-row row-dark wow fadeIn">
				<?php dynamic_sidebar( 'irie_footer_contact_form' ); ?>
			</div>

			<div class="row contact-form-row row-grey wow fadeIn">
				<?php echo do_shortcode("[contact-form-7 id='11' title='Contact form']"); ?>
			</div>
		<?php endif; ?>

		<div class="row footer-contact-details-row row-white wow fadeIn">
			<?php dynamic_sidebar( 'irie_footer_contact_details' ); ?>
		</div>

		<div class="row footer-copyrights-row row-grey wow fadeIn" itemscope itemtype="http://schema.org/Person">
			<a href="https://www.google.com/maps/place/IRIE+PIXEL/@50.8248103,-0.1398502,15z/data=!4m2!3m1!1s0x0:0x9428cedd6e93a6a0?sa=X&ved=0ahUKEwj2raq3xqXLAhWlA5oKHeH_AOcQ_BIIezAR" target="_blank">
				<span itemprop="address">4 Orange Row, Brighton, BN1 1UQ, UK</span>
			</a> | Company No: 9695544 | Registered in England and Wales<br/>	
			&copy; <?php echo date("Y"); ?> <a href="http://iriepixel.com"><span itemprop="company">IRIE PIXEL LIMITED</span></a> | All rights reserved<br/>
		</div>

		<div class="row footer-socials-row row-grey wow fadeIn">
			<div class="contact-socials-container">
				<a href="https://www.facebook.com/iriepixel/" target="_blank">
					<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/iriepixel/images/social-facebook.svg" title="IRIE PIXEL Facebook social icon" alt="IRIE PIXEL facebook social icon">
				</a>
				<a href="https://plus.google.com/+iriepixel/" target="_blank">
					<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/iriepixel/images/social-google-plus.svg" title="IRIE PIXEL Google+ social icon" alt="IRIE PIXEL Google+ social icon">
				</a>
				<a href="https://twitter.com/irie_pixel/" target="_blank">
					<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/iriepixel/images/social-twitter.svg" title="IRIE PIXEL Twitter social icon" alt="IRIE PIXEL Twitter social icon">
				</a>
				<a href="https://www.instagram.com/iriepixel/" target="_blank">
					<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/iriepixel/images/social-instagram.svg" title="IRIE PIXEL Instagram social icon" alt="IRIE PIXEL Instagram social icon">
				</a>
			</div>
		</div>
		<div class="row footer-logo-row row-grey wow fadeIn">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/iriepixel/images/iriepixel-footer-logo.svg" title="IRIE PIXEL logo" alt="IRIE PIXEL logo">
			</a>
		</div>
		<!-- <div class="beta-ribbon"><a href="https://goo.gl/t6pWRE" target="_blank">DUB</a></div> -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

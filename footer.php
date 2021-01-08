<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cornunion
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="footer-logo">
				<?php
				the_custom_logo();
				?>
				<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<div class="border-menu"></div>	
				<div class="border-menu"></div>	
				<div class="border-menu"></div>	
			<?php //esc_html_e( 'Primary Menu', 'cornunion' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
			</div>
			
			<div class="social-icons">
				<a href="#!"><img src="wp-content/uploads/2021/01/ic-facebook.svg" class="fb_icon"></img></a>
				<a href="#!"><img src="wp-content/uploads/2021/01/ic-twitter.svg" class="fb_twitter"></img></a>
				<a href="#!"><img src="wp-content/uploads/2021/01/ic-instagram.svg" class="fb_insta"></img></a>
			</div>
			<div class="tagline">
				<?php
				printf( esc_html__( '2019. All love and happines' ));
				?>
			</div>
			
		</div><!-- .site-info -->
		
	</footer><!-- #colophon -->
<!-- </div>#page -->

<?php wp_footer(); ?>

</body>
</html>

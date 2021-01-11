<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package YourThemeName
 */

?>

	<footer id="footer">
		<div class="container">
		
			<div class="row">
				<div class="col-12">
					<div class="footer__logo">
						<?php if (has_custom_logo()) {the_custom_logo();} else {?>
							<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a>
						<?php }?>
					</div><!-- /.footer__logo -->
				</div>
			</div><!-- /.row -->

			<div class="row">
				<div class="col-12">
					<div class="footer__social-medias">	
						<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/facebook.svg"></a>					
						<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/instagram.svg"></a>
					</div><!-- /.footer__social-medias -->
				</div>
			</div><!-- /.row -->

			<div class="row">
				<div class="col-12">
					<div class="footer__navigation">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'primary',
							'depth' => 1,
							'container' => false,
							'menu_class' => 'nav',
							'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
							'walker' => new Bootstrap_Walker_Nav_Menu(),
						));
					?>
					</div><!-- /.footer__navigation -->
				</div>
			</div><!-- /.row -->

			<hr>

			<div class="footer__copyright row flex-row-reverse">
				<div class="col-lg-6 d-flex justify-content-lg-end justify-content-left">
					<div class="footer__legal">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'footer',
							'depth' => 1,
							'container' => false,
							'menu_class' => 'nav',
							'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
							'walker' => new Bootstrap_Walker_Nav_Menu(),
						));
						?>
					</div><!-- /.footer__legal -->
				</div>

				<div class="col-lg-6 d-flex justify-content-lg-start justify-content-left">	
					<p class="footer__copyright-item"><?php echo esc_html__('© 2020 - Designed & developed by', 'yourThemeName'); ?>
						<a href="https://www.wappstars.nl/" target="_blank" >Wappstars</a>
					</p><!-- /.footer__copyright-item -->
				</div>
			</div><!-- /.footer__copyright -->

		</div><!-- /.container -->
	</footer><!-- /#footer -->

</div><!-- /#page -->

<?php wp_footer(); ?>

</body>
</html>

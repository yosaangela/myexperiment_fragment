<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package YourThemeName
 */

get_header();
?>
 
	<div id="not-found" class="d-flex flex-column justify-content-center">
		<div class="container">

			<div class="row">
				<div class="not-found__text col-md-6 d-flex flex-column justify-content-center">
					<span>404</span>
					<h2>
						<?php echo esc_html__('Page not found, sorry', 'BierEindhoven'); ?>
					</h2>
					<a href="<?php echo get_option("siteurl"); ?>" class="button-primary"><?php echo esc_html__('Back to Home', 'toloomid'); ?></a>
				</div><!-- /.not-found__text -->
			</div><!-- /.row -->

		</div><!-- /.container -->
	</div><!-- /#not-found -->

	<!-- CTA -->
	<?php include get_stylesheet_directory() . '/template-pages/default-templates/cta.php'; ?>
 
<?php get_footer(); ?>

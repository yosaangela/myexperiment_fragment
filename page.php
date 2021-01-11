<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package YourThemeName
 */

get_header();
?>

<?php  if( have_posts() ) : 
	while( have_posts() ) : the_post() ; ?>
		<!-- Banner -->
		<?php include get_stylesheet_directory() . '/template-pages/default-templates/header-halfpage.php'; ?>

			<div id="default-page">

				<div class="container">
					<article>
						<?php the_content(); ?>
					</article>
				</div>

			</div>

		<!-- CTA -->
		<?php include get_stylesheet_directory() . '/template-pages/default-templates/cta.php'; ?>
	<?php endwhile ; 
endif ; ?>

<?php
get_footer();


<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package YourThemeName
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> id="html">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>

<div id="page" class="site">

	<!-- Contact navigation (telephone, email) -->
	<nav id="contact-navigation">
		<div class="container">

			<div class="row d-flex align-items-center justify-content-end">
				<div class="contact-navigation__wrapper col-md-auto d-flex flex-wrap">

					<div class="contact-navigation__telephone d-flex flex-wrap">
						<div class="contact-navigation__item">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/call-white.svg">
								<span>+31 111 222</span>
							</a>
						</div><!-- /.contact-navigation__item -->
					</div><!-- /.contact-navigation__telephone -->

					<span class="contact-navigation__divider">|</span>
					
					<div class="contact-navigation__mail">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/mail-white.svg">
							<span>your@email.com</span>
						</a>
					</div><!-- /.contact-navigation__mail -->

				</div><!-- /.contact-navigation__wrapper -->
			</div><!-- /.row -->
			
		</div><!-- /.container -->
	</nav><!-- /#contact-navigation -->

	<!-- Main menu navigation -->
	<header id="masthead">
		<div class="container">

			<div class="masthead__menu-wrapper">
				<div class="masthead__site-branding">
					<?php if (has_custom_logo()) {the_custom_logo();} else {?>
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a>
					<?php }?>
				</div><!-- /.masthead__site-branding -->

				<div class="hamburger hamburger--collapse">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div><!-- /.hamburger -->
			</div><!-- /.masthead__menu-wrapper -->

			<nav id="site-navigation" class="masthead__main-navigation">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'depth' => 2,
					'container' => false,
					'menu_class' => 'nav',
					'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
					'walker' => new Bootstrap_Walker_Nav_Menu(),
				));
				?>
			</nav><!-- /#site-navigation -->

		</div><!-- /.container -->
	</header><!-- /#masthead -->
<?php
/**
 * Template Name: Homepage
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package YourThemeName
 */

?>

<?php get_header(); ?>

    <?php 
        //Here you can breakdown all the sections -- and call certain file one by one
        include get_stylesheet_directory() . '/template-pages/homepage/section-1.php'; 
    ?>
<?php get_footer(); ?>
<?php
/**
 * Template Name: Trail status (mobile)
 * Template Post Type: page
 * Slimmed down page with trail status only
 */
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

get_header();

$container   = get_theme_mod( 'understrap_container_type' ); 

?>


<!-- Section: Donate Callout -->
<?php include(get_theme_file_path() . '/sections/section-callout-donate-orange'); ?>

<!-- Section: Trail status -->
<?php include(get_theme_file_path() . '/sections/section-trail-status.php'); ?>


<?php get_footer(); ?>








<?php
/**
 * Template Name: About Page Full Width
 *
 * Template for displaying home page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<h1><?php the_field('about_us') ?> </h1>

<?php 
get_footer();
?>
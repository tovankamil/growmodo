<?php
/**
 * Template Name: Properties Page
 *
 * @package Estatein
 */

get_header();
?>

<main id="primary" class="site-main properties-page-main">
  <?php
  // 1. Find Your Dream Property (Hero & Filters)
  get_template_part( 'template-parts/properties-hero' );

  // 2. Discover a World of Possibilities (Catalogue Grid)
  get_template_part( 'template-parts/properties-list' );

  // 3. Let's Make it Happen (Inquiry Form)
  get_template_part( 'template-parts/properties-form' );
  ?>
</main>

<?php
get_footer();

<?php
/**
 * Template Name: About Us Page
 *
 * @package Estatein
 */

get_header();
?>

<main id="primary" class="site-main about-page-main">
  <?php
  // 1. Our Journey (Hero Section)
  get_template_part( 'template-parts/about-hero' );

  // 2. Our Values
  get_template_part( 'template-parts/about-values' );

  // 3. Our Achievements
  get_template_part( 'template-parts/about-achievements' );

  // 4. Navigating the Estatein Experience (Steps)
  get_template_part( 'template-parts/about-steps' );

  // 5. Meet the Estatein Team
  get_template_part( 'template-parts/about-team' );

  // 6. Our Valued Clients
  get_template_part( 'template-parts/about-clients' );
  ?>

<?php
get_footer();

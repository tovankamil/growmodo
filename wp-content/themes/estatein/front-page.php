<?php
/**
 * Estatein Front Page Template
 *
 * @package Estatein
 */

get_header();
?>

<main id="primary" class="site-main">
  <?php
  // 1. Hero Section
  get_template_part( 'template-parts/hero' );

  // 2. Features / Value Proposition
  get_template_part( 'template-parts/features' );

  // 3. Featured Properties Carousel
  get_template_part( 'template-parts/properties' );

  // 4. Client Testimonials
  get_template_part( 'template-parts/testimonials' );

  // 5. Frequently Asked Questions
  get_template_part( 'template-parts/faq' );
  ?>

<?php
get_footer();

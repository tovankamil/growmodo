<?php
/**
 * Template Name: Property Detail Page
 *
 * @package Estatein
 */

get_header();
?>

<main id="primary" class="site-main property-detail-main">
  <?php
  // 1. Header Bar, Photo Gallery, Specs & Amenities
  get_template_part( 'template-parts/property-detail-hero' );

  // 2. Inquire Form
  get_template_part( 'template-parts/property-detail-inquire' );

  // 3. Comprehensive Pricing Details
  get_template_part( 'template-parts/property-detail-pricing' );

  // 4. Frequently Asked Questions (Reusable)
  get_template_part( 'template-parts/faq' );
  ?>
</main>

<?php
get_footer();

<?php
/**
 * Template Name: Services Page
 *
 * @package Estatein
 */

get_header();
?>

<main id="primary" class="site-main services-page-main">
  <?php
  // 1. Elevate Your Real Estate Experience (Hero & Nav)
  get_template_part( 'template-parts/services-hero' );

  // 2. Unlock Property Value (Selling)
  get_template_part( 'template-parts/services-selling' );

  // 3. Effortless Property Management
  get_template_part( 'template-parts/services-management' );

  // 4. Smart Investments, Informed Decisions
  get_template_part( 'template-parts/services-investment' );
  ?>
</main>

<?php
get_footer();

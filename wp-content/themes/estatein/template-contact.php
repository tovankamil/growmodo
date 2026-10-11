<?php
/**
 * Template Name: Contact Page
 *
 * @package Estatein
 */

get_header();
?>

<main id="primary" class="site-main contact-page-main">
  <?php
  // 1. Get in Touch with Estatein (Hero & Cards)
  get_template_part( 'template-parts/contact-hero' );

  // 2. Let's Connect (Contact Form)
  get_template_part( 'template-parts/contact-form' );

  // 3. Discover Our Office Locations (Offices & Filter)
  get_template_part( 'template-parts/contact-offices' );

  // 4. Explore Estatein's World (Workspace Mosaic)
  get_template_part( 'template-parts/contact-gallery' );
  ?>
</main>

<?php
get_footer();

<?php
/**
 * Template Part: Contact Page - Explore Estatein's World Gallery
 *
 * @package Estatein
 */

$office_photos = array(
	array(
		'img' => get_template_directory_uri() . '/assets/images/office.png',
		'alt' => 'Estatein Team Workspace',
	),
	array(
		'img' => get_template_directory_uri() . '/assets/images/about_hero.png',
		'alt' => 'Estatein Architecture & Office Design',
	),
	array(
		'img' => get_template_directory_uri() . '/assets/images/team_1.jpg',
		'alt' => 'Professional Real Estate Consultation',
	),
	array(
		'img' => get_template_directory_uri() . '/assets/images/team_2.jpg',
		'alt' => 'Estatein Executive Team',
	),
	array(
		'img' => get_template_directory_uri() . '/assets/images/team_3.jpg',
		'alt' => 'Strategic Planning and Client Advisory',
	),
	array(
		'img' => get_template_directory_uri() . '/assets/images/team_4.jpg',
		'alt' => 'Client Relations & Management',
	),
);
?>
<section class="section-spacing contact-gallery-section" id="estateins-world">
  <div class="container">
    <div class="section-header">
      <div class="section-header-content">
        <div class="section-sparkle">
          <svg width="56" height="24" viewBox="0 0 60 26" fill="none">
            <path d="M12 0L14 8L22 10L14 12L12 20L10 12L2 10L10 8L12 0Z" fill="#4D4D4D"/>
            <path d="M30 6L31.5 12L37.5 13.5L31.5 15L30 21L28.5 15L22.5 13.5L28.5 12L30 6Z" fill="#703BF7"/>
            <path d="M46 12L47 16L51 17L47 18L46 22L45 18L41 17L45 16L46 12Z" fill="#4D4D4D"/>
          </svg>
        </div>
        <h2 class="section-title"><?php esc_html_e( 'Explore Estatein\'s World', 'estatein' ); ?></h2>
        <p class="section-subtitle">
          <?php esc_html_e( 'Step inside the world of Estatein, where professionalism meets warmth, and expertise meets passion. Our gallery offers a glimpse into our team and workspaces, inviting you to get to know us better.', 'estatein' ); ?>
        </p>
      </div>
    </div>

    <!-- Office Photo Mosaic Grid -->
    <div class="contact-mosaic-card">
      <div class="contact-mosaic-grid">
        <?php foreach ( $office_photos as $photo ) : ?>
          <div class="mosaic-item">
            <img src="<?php echo esc_url( $photo['img'] ); ?>" alt="<?php echo esc_attr( $photo['alt'] ); ?>" loading="lazy">
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

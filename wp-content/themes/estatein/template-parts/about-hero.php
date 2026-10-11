<?php
/**
 * Template Part: About Us - Our Journey Hero Section
 *
 * @package Estatein
 */
?>
<section class="section-spacing about-hero-section" id="journey">
  <div class="container">
    <div class="about-hero-grid">
      <!-- Left Content: Journey Text & Stats -->
      <div class="about-hero-content">
        <div class="section-sparkle">
          <svg width="56" height="24" viewBox="0 0 60 26" fill="none">
            <path d="M12 0L14 8L22 10L14 12L12 20L10 12L2 10L10 8L12 0Z" fill="#4D4D4D"/>
            <path d="M30 6L31.5 12L37.5 13.5L31.5 15L30 21L28.5 15L22.5 13.5L28.5 12L30 6Z" fill="#703BF7"/>
            <path d="M46 12L47 16L51 17L47 18L46 22L45 18L41 17L45 16L46 12Z" fill="#4D4D4D"/>
          </svg>
        </div>
        <h1 class="section-title"><?php esc_html_e( 'Our Journey', 'estatein' ); ?></h1>
        <p class="section-subtitle">
          <?php esc_html_e( "Our story is one of continuous growth and evolution. We started as a small team with big dreams, determined to create a real estate platform that transcended the ordinary. Over the years, we've expanded our reach, forged valuable partnerships, and gained the trust of countless clients.", 'estatein' ); ?>
        </p>

        <!-- Stats Grid (3 on desktop, 2+1 on mobile) -->
        <div class="about-stats-grid">
          <div class="about-stat-card">
            <span class="about-stat-num">200+</span>
            <span class="about-stat-label"><?php esc_html_e( 'Happy Customers', 'estatein' ); ?></span>
          </div>
          <div class="about-stat-card">
            <span class="about-stat-num">10k+</span>
            <span class="about-stat-label"><?php esc_html_e( 'Properties For Clients', 'estatein' ); ?></span>
          </div>
          <div class="about-stat-card about-stat-card-wide">
            <span class="about-stat-num">16+</span>
            <span class="about-stat-label"><?php esc_html_e( 'Years of Experience', 'estatein' ); ?></span>
          </div>
        </div>
      </div>

      <!-- Right Visual Card: Hand holding model house -->
      <div class="about-hero-visual">
        <div class="about-hero-image-card">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about_hero.png' ); ?>" alt="<?php esc_attr_e( 'Our Journey - Estatein Model House', 'estatein' ); ?>" class="about-hero-image" width="758" height="584" loading="eager">
        </div>
      </div>
    </div>
  </div>
</section>

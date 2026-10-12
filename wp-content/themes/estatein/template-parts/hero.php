<?php
/**
 * Template Part: Hero Section
 *
 * @package Estatein
 */
?>
<section class="hero-section" id="hero">
  <div class="container">
    <div class="hero-grid">
      <!-- Hero Text Content -->
      <div class="hero-content">
        <h1 class="hero-title"><?php esc_html_e( 'Discover Your Dream Property with Estatein', 'estatein' ); ?></h1>
        <p class="hero-description">
          <?php esc_html_e( 'Your journey to finding the perfect property begins here. Explore our listings to find the home that matches your dreams.', 'estatein' ); ?>
        </p>
        
        <div class="hero-buttons">
          <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-secondary"><?php esc_html_e( 'Learn More', 'estatein' ); ?></a>
          <a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Browse Properties', 'estatein' ); ?></a>
        </div>

        <div class="hero-stats">
          <div class="stat-card">
            <div class="stat-number">200+</div>
            <div class="stat-label"><?php esc_html_e( 'Happy Customers', 'estatein' ); ?></div>
          </div>
          <div class="stat-card">
            <div class="stat-number">10k+</div>
            <div class="stat-label"><?php esc_html_e( 'Properties For Clients', 'estatein' ); ?></div>
          </div>
          <div class="stat-card stat-card-wide">
            <div class="stat-number">16+</div>
            <div class="stat-label"><?php esc_html_e( 'Years of Experience', 'estatein' ); ?></div>
          </div>
        </div>
      </div>

      <!-- Hero Visual & Circular Rotating Badge -->
      <div class="hero-visual">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Abstract Design3.png' ); ?>" alt="" class="hero-visual-abstract" aria-hidden="true">
        <div class="hero-glow"></div>
        
        <!-- Circular Rotating Badge -->
        <div class="hero-badge-circle" aria-hidden="true">
          <svg class="hero-badge-rotating-text" viewBox="0 0 100 100">
            <path id="circlePath" d="M 50, 50 m 0, 37 a 37,37 0 1,1 0, -74 a 37,37 0 1,1 0, 74" fill="none"></path>
            <text fill="#ffffff" font-family="'Urbanist', sans-serif" font-size="9" font-weight="500">
              <textPath href="#circlePath" startOffset="3%" textLength="212" lengthAdjust="spacing">
                ✨ Discover Your Dream Property
              </textPath>
            </text>
          </svg>
          <div class="hero-badge-inner">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="7" y1="17" x2="17" y2="7"></line>
              <polyline points="7 7 17 7 17 17"></polyline>
            </svg>
          </div>
        </div>

        <div class="hero-image-wrapper">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/office.png' ); ?>" alt="<?php esc_attr_e( 'Estatein Modern Architecture', 'estatein' ); ?>" class="hero-image" width="920" height="814" loading="eager">
        </div>
      </div>
    </div>
  </div>
</section>

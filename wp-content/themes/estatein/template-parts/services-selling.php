<?php
/**
 * Template Part: Services Page - Unlock Property Value
 *
 * @package Estatein
 */
?>
<section class="section-spacing services-section" id="unlock-value">
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
        <h2 class="section-title"><?php esc_html_e( 'Unlock Property Value', 'estatein' ); ?></h2>
        <p class="section-subtitle">
          <?php esc_html_e( 'Selling your property should be a rewarding experience, and at Estatein, we make sure it is. Our Property Selling Service is designed to maximize the value of your asset and provide a smooth, stress-free transaction.', 'estatein' ); ?>
        </p>
      </div>
    </div>

    <!-- 3-Column / Hybrid Grid with 4 feature cards and 1 wide promo card -->
    <div class="services-cards-grid">
      <!-- 1. Valuation Mastery -->
      <div class="service-feature-card">
        <div class="service-feature-header">
          <div class="service-feature-icon-wrap">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          <h3 class="service-feature-title"><?php esc_html_e( 'Valuation Mastery', 'estatein' ); ?></h3>
        </div>
        <p class="service-feature-desc">
          <?php esc_html_e( 'Discover the true worth of your property with our expert valuation services. We analyze market trends and property attributes to determine an optimal listing price.', 'estatein' ); ?>
        </p>
      </div>

      <!-- 2. Strategic Marketing -->
      <div class="service-feature-card">
        <div class="service-feature-header">
          <div class="service-feature-icon-wrap">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
              <path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path>
            </svg>
          </div>
          <h3 class="service-feature-title"><?php esc_html_e( 'Strategic Marketing', 'estatein' ); ?></h3>
        </div>
        <p class="service-feature-desc">
          <?php esc_html_e( 'Selling a property requires more than just a listing; it takes a tailored marketing strategy. We showcase your property through high-impact channels to reach prospective buyers.', 'estatein' ); ?>
        </p>
      </div>

      <!-- 3. Negotiation Wizardry -->
      <div class="service-feature-card">
        <div class="service-feature-header">
          <div class="service-feature-icon-wrap">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
          </div>
          <h3 class="service-feature-title"><?php esc_html_e( 'Negotiation Wizardry', 'estatein' ); ?></h3>
        </div>
        <p class="service-feature-desc">
          <?php esc_html_e( 'Negotiating the best deal is an art, and our seasoned negotiators excel at it. We advocate for your interests, aiming to secure the most favorable terms for your sale.', 'estatein' ); ?>
        </p>
      </div>

      <!-- 4. Closing Success -->
      <div class="service-feature-card">
        <div class="service-feature-header">
          <div class="service-feature-icon-wrap">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
              <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
          </div>
          <h3 class="service-feature-title"><?php esc_html_e( 'Closing Success', 'estatein' ); ?></h3>
        </div>
        <p class="service-feature-desc">
          <?php esc_html_e( 'A successful sale is not complete until the closing. We guide you through the intricate closing process, ensuring all legal and financial aspects are handled smoothly.', 'estatein' ); ?>
        </p>
      </div>

      <!-- Wide Promotional Card (spans 2 columns) -->
      <div class="service-promo-card-wide">
        <div class="service-promo-content">
          <div class="service-promo-header">
            <h3 class="service-promo-title"><?php esc_html_e( 'Unlock the Value of Your Property Today', 'estatein' ); ?></h3>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary btn-sm"><?php esc_html_e( 'Learn More', 'estatein' ); ?></a>
          </div>
          <p class="service-promo-desc">
            <?php esc_html_e( 'Ready to unlock the true value of your property? Explore our Property Selling Service categories and let us help you achieve the best deal possible for your valuable asset.', 'estatein' ); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

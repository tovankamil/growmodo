<?php
/**
 * Template Part: Services Page - Smart Investments, Informed Decisions
 *
 * @package Estatein
 */
?>
<section class="section-spacing services-section" id="smart-investments">
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
        <h2 class="section-title"><?php esc_html_e( 'Smart Investments, Informed Decisions', 'estatein' ); ?></h2>
        <p class="section-subtitle">
          <?php esc_html_e( 'Building a real estate portfolio requires a strategic approach. Estatein\'s Investment Advisory Service empowers you to make smart investments and informed decisions.', 'estatein' ); ?>
        </p>
      </div>
    </div>

    <!-- 2-Column Split: Left Promo Card, Right 2x2 Feature Cards -->
    <div class="services-investment-split">
      <!-- Left Column: Banner Card -->
      <div class="service-investment-banner-card">
        <div class="investment-banner-content">
          <h3 class="investment-banner-title"><?php esc_html_e( 'Unlock Your Investment Potential', 'estatein' ); ?></h3>
          <p class="investment-banner-desc">
            <?php esc_html_e( 'Explore our Property Management Service categories and let us handle the complexities while you enjoy the benefits of property ownership.', 'estatein' ); ?>
          </p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary btn-sm"><?php esc_html_e( 'Learn More', 'estatein' ); ?></a>
        </div>
      </div>

      <!-- Right Column: 2x2 Feature Grid -->
      <div class="services-investment-grid">
        <!-- 1. Market Insight -->
        <div class="service-feature-card">
          <div class="service-feature-header">
            <div class="service-feature-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="20" x2="18" y2="10"></line>
                <line x1="12" y1="20" x2="12" y2="4"></line>
                <line x1="6" y1="20" x2="6" y2="14"></line>
              </svg>
            </div>
            <h3 class="service-feature-title"><?php esc_html_e( 'Market Insight', 'estatein' ); ?></h3>
          </div>
          <p class="service-feature-desc">
            <?php esc_html_e( 'Stay ahead of market trends with our expert Market Analysis. We provide in-depth insights into real estate market conditions', 'estatein' ); ?>
          </p>
        </div>

        <!-- 2. ROI Assessment -->
        <div class="service-feature-card">
          <div class="service-feature-header">
            <div class="service-feature-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"></path>
              </svg>
            </div>
            <h3 class="service-feature-title"><?php esc_html_e( 'ROI Assessment', 'estatein' ); ?></h3>
          </div>
          <p class="service-feature-desc">
            <?php esc_html_e( 'Make investment decisions with confidence. Our ROI Assessment services evaluate the potential returns on your investments', 'estatein' ); ?>
          </p>
        </div>

        <!-- 3. Customized Strategies -->
        <div class="service-feature-card">
          <div class="service-feature-header">
            <div class="service-feature-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 18h6M10 22h4M12 2a7 7 0 0 0-7 7c0 2.38 1.19 4.47 3 5.74V17a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-2.26c1.81-1.27 3-3.36 3-5.74a7 7 0 0 0-7-7z"></path>
              </svg>
            </div>
            <h3 class="service-feature-title"><?php esc_html_e( 'Customized Strategies', 'estatein' ); ?></h3>
          </div>
          <p class="service-feature-desc">
            <?php esc_html_e( 'Every investor is unique, and so are their goals. We develop Customized Investment Strategies tailored to your specific needs', 'estatein' ); ?>
          </p>
        </div>

        <!-- 4. Diversification Mastery -->
        <div class="service-feature-card">
          <div class="service-feature-header">
            <div class="service-feature-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="4"></circle>
                <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"></path>
              </svg>
            </div>
            <h3 class="service-feature-title"><?php esc_html_e( 'Diversification Mastery', 'estatein' ); ?></h3>
          </div>
          <p class="service-feature-desc">
            <?php esc_html_e( 'Diversify your real estate portfolio effectively. Our experts guide you in spreading your investments across various property types and locations', 'estatein' ); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

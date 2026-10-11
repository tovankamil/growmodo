<?php
/**
 * Template Part: Services Page - Effortless Property Management
 *
 * @package Estatein
 */
?>
<section class="section-spacing services-section" id="property-management">
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
        <h2 class="section-title"><?php esc_html_e( 'Effortless Property Management', 'estatein' ); ?></h2>
        <p class="section-subtitle">
          <?php esc_html_e( 'Owning a property should be a pleasure, not a hassle. Estatein\'s Property Management Service takes the stress out of property ownership, offering comprehensive solutions tailored to your needs. Explore the categories below to see how we can make property management effortless for you', 'estatein' ); ?>
        </p>
      </div>
    </div>

    <!-- Cards Grid -->
    <div class="services-cards-grid">
      <!-- 1. Tenant Harmony -->
      <div class="service-feature-card">
        <div class="service-feature-header">
          <div class="service-feature-icon-wrap">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="10"></circle>
              <line x1="12" y1="8" x2="12" y2="12"></line>
              <line x1="12" y1="16" x2="12.01" y2="16"></line>
            </svg>
          </div>
          <h3 class="service-feature-title"><?php esc_html_e( 'Tenant Harmony', 'estatein' ); ?></h3>
        </div>
        <p class="service-feature-desc">
          <?php esc_html_e( 'Our Tenant Management services ensure that your tenants have a smooth and reducing vacancies.', 'estatein' ); ?>
        </p>
      </div>

      <!-- 2. Maintenance Ease -->
      <div class="service-feature-card">
        <div class="service-feature-header">
          <div class="service-feature-icon-wrap">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
            </svg>
          </div>
          <h3 class="service-feature-title"><?php esc_html_e( 'Maintenance Ease', 'estatein' ); ?></h3>
        </div>
        <p class="service-feature-desc">
          <?php esc_html_e( 'Say goodbye to property maintenance headaches. We handle all aspects of property upkeep.', 'estatein' ); ?>
        </p>
      </div>

      <!-- 3. Financial Peace of Mind -->
      <div class="service-feature-card">
        <div class="service-feature-header">
          <div class="service-feature-icon-wrap">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="2" y="4" width="20" height="16" rx="2"></rect>
              <line x1="6" y1="12" x2="10" y2="12"></line>
              <line x1="14" y1="12" x2="18" y2="12"></line>
            </svg>
          </div>
          <h3 class="service-feature-title"><?php esc_html_e( 'Financial Peace of Mind', 'estatein' ); ?></h3>
        </div>
        <p class="service-feature-desc">
          <?php esc_html_e( 'Managing property finances can be complex. Our financial experts take care of rent collection, expense tracking, and financial reporting.', 'estatein' ); ?>
        </p>
      </div>

      <!-- 4. Legal Compliance -->
      <div class="service-feature-card">
        <div class="service-feature-header">
          <div class="service-feature-icon-wrap">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
          </div>
          <h3 class="service-feature-title"><?php esc_html_e( 'Legal Compliance', 'estatein' ); ?></h3>
        </div>
        <p class="service-feature-desc">
          <?php esc_html_e( 'Stay compliant with local laws and regulations effortlessly. We navigate the legalities of property management, ensuring your peace of mind.', 'estatein' ); ?>
        </p>
      </div>

      <!-- Wide Promotional Card -->
      <div class="service-promo-card-wide">
        <div class="service-promo-content">
          <div class="service-promo-header">
            <h3 class="service-promo-title"><?php esc_html_e( 'Experience Effortless Property Management Today', 'estatein' ); ?></h3>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary btn-sm"><?php esc_html_e( 'Learn More', 'estatein' ); ?></a>
          </div>
          <p class="service-promo-desc">
            <?php esc_html_e( 'Ready to experience stress-free property management? Explore our Property Management Service categories and let us handle the complexities while you enjoy the benefits of property ownership.', 'estatein' ); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
/**
 * Template Part: Contact Page - Office Locations
 *
 * @package Estatein
 */
?>
<section class="section-spacing contact-offices-section" id="office-locations">
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
        <h2 class="section-title"><?php esc_html_e( 'Discover Our Office Locations', 'estatein' ); ?></h2>
        <p class="section-subtitle">
          <?php esc_html_e( 'Estatein is here to serve you across multiple locations. Whether you\'re looking to meet our team, discuss real estate opportunities, or simply drop by for a chat, we have offices conveniently located to serve your needs. Explore the categories below to find the Estatein office nearest to you', 'estatein' ); ?>
        </p>
      </div>
    </div>

    <!-- Category Tabs -->
    <div class="office-tabs-nav" id="officeTabs">
      <button type="button" class="office-tab-btn active" data-category="all"><?php esc_html_e( 'All', 'estatein' ); ?></button>
      <button type="button" class="office-tab-btn" data-category="regional"><?php esc_html_e( 'Regional', 'estatein' ); ?></button>
      <button type="button" class="office-tab-btn" data-category="international"><?php esc_html_e( 'International', 'estatein' ); ?></button>
    </div>

    <!-- Office Cards 2-Col Grid -->
    <div class="office-cards-grid" id="officeCardsGrid">
      <!-- 1. Main Headquarters -->
      <div class="office-card" data-category="regional">
        <span class="office-category-tag"><?php esc_html_e( 'Main Headquarters', 'estatein' ); ?></span>
        <h3 class="office-address-title"><?php esc_html_e( '123 Estatein Plaza, City Center, Metropolis', 'estatein' ); ?></h3>
        <p class="office-desc">
          <?php esc_html_e( 'Our main headquarters serve as the heart of Estatein. Located in the bustling city center, this is where our core team of experts operates, driving the excellence and innovation that define us.', 'estatein' ); ?>
        </p>
        <div class="office-pills-row">
          <span class="office-pill">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
              <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
            <?php esc_html_e( 'info@estatein.com', 'estatein' ); ?>
          </span>
          <span class="office-pill">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
            <?php esc_html_e( '+1 (123) 456-7890', 'estatein' ); ?>
          </span>
          <span class="office-pill">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
              <circle cx="12" cy="10" r="3"></circle>
            </svg>
            <?php esc_html_e( 'Metropolis', 'estatein' ); ?>
          </span>
        </div>
        <a href="https://maps.google.com" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-block">
          <?php esc_html_e( 'Get Direction', 'estatein' ); ?>
        </a>
      </div>

      <!-- 2. Regional Offices -->
      <div class="office-card" data-category="regional">
        <span class="office-category-tag"><?php esc_html_e( 'Regional Offices', 'estatein' ); ?></span>
        <h3 class="office-address-title"><?php esc_html_e( '456 Urban Avenue, Downtown District, Metropolis', 'estatein' ); ?></h3>
        <p class="office-desc">
          <?php esc_html_e( 'Estatein\'s presence extends to multiple regions, each with its own dynamic real estate landscape. Discover our regional offices, staffed by local experts who understand the nuances of their respective markets.', 'estatein' ); ?>
        </p>
        <div class="office-pills-row">
          <span class="office-pill">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
              <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
            <?php esc_html_e( 'info@restatein.com', 'estatein' ); ?>
          </span>
          <span class="office-pill">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
            <?php esc_html_e( '+1 (123) 628-7890', 'estatein' ); ?>
          </span>
          <span class="office-pill">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
              <circle cx="12" cy="10" r="3"></circle>
            </svg>
            <?php esc_html_e( 'Metropolis', 'estatein' ); ?>
          </span>
        </div>
        <a href="https://maps.google.com" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-block">
          <?php esc_html_e( 'Get Direction', 'estatein' ); ?>
        </a>
      </div>

      <!-- 3. International Office (for international tab) -->
      <div class="office-card" data-category="international">
        <span class="office-category-tag"><?php esc_html_e( 'International Offices', 'estatein' ); ?></span>
        <h3 class="office-address-title"><?php esc_html_e( '789 Global Gateway, Marina Bay, Singapore', 'estatein' ); ?></h3>
        <p class="office-desc">
          <?php esc_html_e( 'Our premier global office connecting clients worldwide with distinguished international luxury properties and wealth advisory services.', 'estatein' ); ?>
        </p>
        <div class="office-pills-row">
          <span class="office-pill">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
              <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
            <?php esc_html_e( 'global@estatein.com', 'estatein' ); ?>
          </span>
          <span class="office-pill">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
            <?php esc_html_e( '+65 6789 0123', 'estatein' ); ?>
          </span>
          <span class="office-pill">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
              <circle cx="12" cy="10" r="3"></circle>
            </svg>
            <?php esc_html_e( 'Singapore', 'estatein' ); ?>
          </span>
        </div>
        <a href="https://maps.google.com" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-block">
          <?php esc_html_e( 'Get Direction', 'estatein' ); ?>
        </a>
      </div>
    </div>
  </div>
</section>

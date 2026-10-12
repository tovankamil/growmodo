<?php
/**
 * Template Part: Property Detail - Comprehensive Pricing Details
 *
 * @package Estatein
 */
?>
<section class="section-spacing property-pricing-section" id="pricing">
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
        <h2 class="section-title"><?php esc_html_e( 'Comprehensive Pricing Details', 'estatein' ); ?></h2>
        <p class="section-subtitle">
          <?php esc_html_e( 'At Estatein, transparency is key. We want you to have a clear understanding of all costs associated with your property investment. Below, we break down the pricing for Seaside Serenity Villa to help you make an informed decision', 'estatein' ); ?>
        </p>
      </div>
    </div>

    <!-- Note Banner -->
    <div class="pricing-note-card">
      <span class="note-pill"><?php esc_html_e( 'Note', 'estatein' ); ?></span>
      <p class="note-text"><?php esc_html_e( 'The figures provided above are estimates and may vary depending on the property, location, and individual circumstances.', 'estatein' ); ?></p>
    </div>

    <!-- Main Pricing Breakdown -->
    <div class="pricing-breakdown-wrapper">
      <!-- Listing Price Column/Box -->
      <div class="pricing-listing-card">
        <span class="price-label"><?php esc_html_e( 'Listing Price', 'estatein' ); ?></span>
        <span class="price-val"><?php esc_html_e( '$1,250,000', 'estatein' ); ?></span>
      </div>

      <!-- Additional Fees Card -->
      <div class="pricing-group-card">
        <div class="pricing-group-header">
          <h3 class="pricing-group-title"><?php esc_html_e( 'Additional Fees', 'estatein' ); ?></h3>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary btn-sm"><?php esc_html_e( 'Learn More', 'estatein' ); ?></a>
        </div>
        <div class="pricing-group-grid">
          <div class="pricing-fee-item">
            <span class="fee-name"><?php esc_html_e( 'Property Transfer Tax', 'estatein' ); ?></span>
            <div class="fee-val-row">
              <span class="fee-amount"><?php esc_html_e( '$25,000', 'estatein' ); ?></span>
              <span class="fee-pill"><?php esc_html_e( 'Based on the sale price and local regulations', 'estatein' ); ?></span>
            </div>
          </div>
          <div class="pricing-fee-item">
            <span class="fee-name"><?php esc_html_e( 'Legal Fees', 'estatein' ); ?></span>
            <div class="fee-val-row">
              <span class="fee-amount"><?php esc_html_e( '$3,000', 'estatein' ); ?></span>
              <span class="fee-pill"><?php esc_html_e( 'Approximate cost for legal services, including title transfer', 'estatein' ); ?></span>
            </div>
          </div>
          <div class="pricing-fee-item">
            <span class="fee-name"><?php esc_html_e( 'Home Inspection', 'estatein' ); ?></span>
            <div class="fee-val-row">
              <span class="fee-amount"><?php esc_html_e( '$500', 'estatein' ); ?></span>
              <span class="fee-pill"><?php esc_html_e( 'Recommended for due diligence', 'estatein' ); ?></span>
            </div>
          </div>
          <div class="pricing-fee-item">
            <span class="fee-name"><?php esc_html_e( 'Property Insurance', 'estatein' ); ?></span>
            <div class="fee-val-row">
              <span class="fee-amount"><?php esc_html_e( '$1,200', 'estatein' ); ?></span>
              <span class="fee-pill"><?php esc_html_e( 'Annual cost for comprehensive property insurance', 'estatein' ); ?></span>
            </div>
          </div>
          <div class="pricing-fee-item full-width">
            <span class="fee-name"><?php esc_html_e( 'Mortgage Fees', 'estatein' ); ?></span>
            <div class="fee-val-row">
              <span class="fee-amount"><?php esc_html_e( 'Varies', 'estatein' ); ?></span>
              <span class="fee-pill"><?php esc_html_e( 'If applicable, consult with your lender for specific details', 'estatein' ); ?></span>
            </div>
          </div>
        </div>
      </div>

      <!-- Monthly Costs Card -->
      <div class="pricing-group-card">
        <div class="pricing-group-header">
          <h3 class="pricing-group-title"><?php esc_html_e( 'Monthly Costs', 'estatein' ); ?></h3>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary btn-sm"><?php esc_html_e( 'Learn More', 'estatein' ); ?></a>
        </div>
        <div class="pricing-group-grid">
          <div class="pricing-fee-item">
            <span class="fee-name"><?php esc_html_e( 'Property Taxes', 'estatein' ); ?></span>
            <div class="fee-val-row">
              <span class="fee-amount"><?php esc_html_e( '$1,250', 'estatein' ); ?></span>
              <span class="fee-pill"><?php esc_html_e( 'Approximate monthly property tax based on the sale price and local rates', 'estatein' ); ?></span>
            </div>
          </div>
          <div class="pricing-fee-item">
            <span class="fee-name"><?php esc_html_e( 'Homeowners\' Association Fee', 'estatein' ); ?></span>
            <div class="fee-val-row">
              <span class="fee-amount"><?php esc_html_e( '$300', 'estatein' ); ?></span>
              <span class="fee-pill"><?php esc_html_e( 'Monthly fee for common area maintenance and security', 'estatein' ); ?></span>
            </div>
          </div>
          <div class="pricing-fee-item">
            <span class="fee-name"><?php esc_html_e( 'Mortgage Payment', 'estatein' ); ?></span>
            <div class="fee-val-row">
              <span class="fee-amount"><?php esc_html_e( 'Varies based on terms and interest rate', 'estatein' ); ?></span>
              <span class="fee-pill"><?php esc_html_e( 'If applicable', 'estatein' ); ?></span>
            </div>
          </div>
          <div class="pricing-fee-item">
            <span class="fee-name"><?php esc_html_e( 'Property Insurance', 'estatein' ); ?></span>
            <div class="fee-val-row">
              <span class="fee-amount"><?php esc_html_e( '$100', 'estatein' ); ?></span>
              <span class="fee-pill"><?php esc_html_e( 'Approximate monthly cost', 'estatein' ); ?></span>
            </div>
          </div>
        </div>
      </div>

      <!-- Total Initial Costs Card -->
      <div class="pricing-group-card">
        <div class="pricing-group-header">
          <h3 class="pricing-group-title"><?php esc_html_e( 'Total Initial Costs', 'estatein' ); ?></h3>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary btn-sm"><?php esc_html_e( 'Learn More', 'estatein' ); ?></a>
        </div>
        <div class="pricing-group-grid">
          <div class="pricing-fee-item">
            <span class="fee-name"><?php esc_html_e( 'Listing Price', 'estatein' ); ?></span>
            <div class="fee-val-row">
              <span class="fee-amount"><?php esc_html_e( '$1,250,000', 'estatein' ); ?></span>
            </div>
          </div>
          <div class="pricing-fee-item">
            <span class="fee-name"><?php esc_html_e( 'Down Payment', 'estatein' ); ?></span>
            <div class="fee-val-row">
              <span class="fee-amount"><?php esc_html_e( '$250,000', 'estatein' ); ?></span>
              <span class="fee-pill"><?php esc_html_e( '20%', 'estatein' ); ?></span>
            </div>
          </div>
          <div class="pricing-fee-item">
            <span class="fee-name"><?php esc_html_e( 'Mortgage Amount', 'estatein' ); ?></span>
            <div class="fee-val-row">
              <span class="fee-amount"><?php esc_html_e( '$1,000,000', 'estatein' ); ?></span>
              <span class="fee-pill"><?php esc_html_e( 'If applicable', 'estatein' ); ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

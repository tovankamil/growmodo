<?php
/**
 * Template Part: Properties Page - Hero & Filter Section
 *
 * @package Estatein
 */
?>
<section class="section-spacing properties-hero-section" id="search">
  <div class="container">
    <!-- Hero Title & Subtitle -->
    <div class="properties-hero-header">
      <h1 class="section-title"><?php esc_html_e( 'Find Your Dream Property', 'estatein' ); ?></h1>
      <p class="section-subtitle">
        <?php esc_html_e( 'Welcome to Estatein, where your dream property awaits in every corner of our beautiful world. Explore our curated selection of properties, each offering a unique story and a chance to redefine your life. With categories to suit every dreamer, your journey begins here.', 'estatein' ); ?>
      </p>
    </div>

    <!-- Search & Filter Component -->
    <div class="search-filter-box">
      <!-- Search Bar -->
      <form class="property-search-bar" id="propertySearchForm" onsubmit="event.preventDefault();">
        <input type="text" id="propSearchInput" placeholder="<?php esc_attr_e( 'Search For A Property', 'estatein' ); ?>" class="prop-search-input" aria-label="<?php esc_attr_e( 'Search For A Property', 'estatein' ); ?>">
        <button type="submit" class="btn btn-primary btn-search-submit" id="propSearchSubmitBtn">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
          <span class="btn-search-text"><?php esc_html_e( 'Find Property', 'estatein' ); ?></span>
        </button>
      </form>

      <!-- 5 Filter Dropdowns Grid -->
      <div class="filter-dropdowns-bar">
        <!-- 1. Location -->
        <div class="filter-dropdown-item">
          <div class="filter-select-wrapper">
            <span class="filter-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
            </span>
            <select class="filter-select" id="filterLocation" aria-label="<?php esc_attr_e( 'Location', 'estatein' ); ?>">
              <option value=""><?php esc_html_e( 'Location', 'estatein' ); ?></option>
              <option value="malibu"><?php esc_html_e( 'Malibu, California', 'estatein' ); ?></option>
              <option value="los-angeles"><?php esc_html_e( 'Los Angeles, California', 'estatein' ); ?></option>
              <option value="new-york"><?php esc_html_e( 'New York, NY', 'estatein' ); ?></option>
              <option value="miami"><?php esc_html_e( 'Miami, Florida', 'estatein' ); ?></option>
            </select>
          </div>
        </div>

        <!-- 2. Property Type -->
        <div class="filter-dropdown-item">
          <div class="filter-select-wrapper">
            <span class="filter-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
              </svg>
            </span>
            <select class="filter-select" id="filterType" aria-label="<?php esc_attr_e( 'Property Type', 'estatein' ); ?>">
              <option value=""><?php esc_html_e( 'Property Type', 'estatein' ); ?></option>
              <option value="villa"><?php esc_html_e( 'Villa', 'estatein' ); ?></option>
              <option value="apartment"><?php esc_html_e( 'Apartment', 'estatein' ); ?></option>
              <option value="cottage"><?php esc_html_e( 'Cottage', 'estatein' ); ?></option>
              <option value="penthouse"><?php esc_html_e( 'Penthouse', 'estatein' ); ?></option>
            </select>
          </div>
        </div>

        <!-- 3. Pricing Range -->
        <div class="filter-dropdown-item">
          <div class="filter-select-wrapper">
            <span class="filter-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="2" y="6" width="20" height="12" rx="2"></rect>
                <circle cx="12" cy="12" r="2"></circle>
                <path d="M6 12h.01M18 12h.01"></path>
              </svg>
            </span>
            <select class="filter-select" id="filterPrice" aria-label="<?php esc_attr_e( 'Pricing Range', 'estatein' ); ?>">
              <option value=""><?php esc_html_e( 'Pricing Range', 'estatein' ); ?></option>
              <option value="0-500k"><?php esc_html_e( 'Under $500,000', 'estatein' ); ?></option>
              <option value="500k-1m"><?php esc_html_e( '$500,000 - $1,000,000', 'estatein' ); ?></option>
              <option value="1m-plus"><?php esc_html_e( '$1,000,000+', 'estatein' ); ?></option>
            </select>
          </div>
        </div>

        <!-- 4. Property Size -->
        <div class="filter-dropdown-item">
          <div class="filter-select-wrapper">
            <span class="filter-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                <line x1="12" y1="22.08" x2="12" y2="12"></line>
              </svg>
            </span>
            <select class="filter-select" id="filterSize" aria-label="<?php esc_attr_e( 'Property Size', 'estatein' ); ?>">
              <option value=""><?php esc_html_e( 'Property Size', 'estatein' ); ?></option>
              <option value="1-2"><?php esc_html_e( '1-2 Bedrooms', 'estatein' ); ?></option>
              <option value="3-4"><?php esc_html_e( '3-4 Bedrooms', 'estatein' ); ?></option>
              <option value="5+"><?php esc_html_e( '5+ Bedrooms', 'estatein' ); ?></option>
            </select>
          </div>
        </div>

        <!-- 5. Build Year -->
        <div class="filter-dropdown-item">
          <div class="filter-select-wrapper">
            <span class="filter-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
              </svg>
            </span>
            <select class="filter-select" id="filterYear" aria-label="<?php esc_attr_e( 'Build Year', 'estatein' ); ?>">
              <option value=""><?php esc_html_e( 'Build Year', 'estatein' ); ?></option>
              <option value="2024"><?php esc_html_e( '2024', 'estatein' ); ?></option>
              <option value="2023"><?php esc_html_e( '2023', 'estatein' ); ?></option>
              <option value="2022"><?php esc_html_e( '2022', 'estatein' ); ?></option>
              <option value="2020-2021"><?php esc_html_e( '2020 - 2021', 'estatein' ); ?></option>
              <option value="pre-2020"><?php esc_html_e( 'Before 2020', 'estatein' ); ?></option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

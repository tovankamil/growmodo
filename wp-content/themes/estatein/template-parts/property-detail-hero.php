<?php
/**
 * Template Part: Property Detail - Header Bar & Photo Gallery & Specs
 *
 * @package Estatein
 */

$gallery_images = array(
	'https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=1200&q=80',
	'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80',
	'https://images.unsplash.com/photo-1600566753376-12c8ab7fb75b?auto=format&fit=crop&w=1200&q=80',
	'https://images.unsplash.com/photo-1617806118233-18e1de247200?auto=format&fit=crop&w=1200&q=80',
	'https://images.unsplash.com/photo-1600585152220-90363fe7e115?auto=format&fit=crop&w=1200&q=80',
	'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=1200&q=80',
	'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=1200&q=80',
	'https://images.unsplash.com/photo-1580587771525-78b9dba3b914?auto=format&fit=crop&w=1200&q=80',
	'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1200&q=80',
);
?>
<section class="section-spacing property-detail-hero-section">
  <div class="container">
    <!-- Property Top Title & Price Bar -->
    <div class="property-header-bar">
      <div class="prop-title-location-wrap">
        <h1 class="prop-detail-title"><?php esc_html_e( 'Seaside Serenity Villa', 'estatein' ); ?></h1>
        <div class="prop-location-badge">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span><?php esc_html_e( 'Malibu, California', 'estatein' ); ?></span>
        </div>
      </div>
      <div class="prop-detail-price-box">
        <span class="price-label"><?php esc_html_e( 'Price', 'estatein' ); ?></span>
        <span class="price-val"><?php esc_html_e( '$1,250,000', 'estatein' ); ?></span>
      </div>
    </div>

    <!-- Gallery Container -->
    <div class="prop-gallery-card">
      <!-- Thumbnail Strip -->
      <div class="gallery-thumbnails-strip" id="galleryThumbnails">
        <?php foreach ( $gallery_images as $idx => $img_url ) : ?>
          <button type="button" class="gallery-thumb-btn <?php echo ( 0 === $idx ) ? 'active' : ''; ?>" data-slide="<?php echo esc_attr( $idx ); ?>" aria-label="View photo <?php echo esc_attr( $idx + 1 ); ?>">
            <img src="<?php echo esc_url( $img_url ); ?>" alt="Thumbnail <?php echo esc_attr( $idx + 1 ); ?>" loading="lazy">
          </button>
        <?php endforeach; ?>
      </div>

      <!-- Main Dual Image Display -->
      <div class="gallery-dual-showcase" id="galleryMainShowcase">
        <div class="gallery-main-item">
          <img id="galleryMainImg1" src="<?php echo esc_url( $gallery_images[0] ); ?>" alt="<?php esc_attr_e( 'Seaside Serenity Villa Exterior', 'estatein' ); ?>">
        </div>
        <div class="gallery-main-item">
          <img id="galleryMainImg2" src="<?php echo esc_url( $gallery_images[1] ); ?>" alt="<?php esc_attr_e( 'Seaside Serenity Villa Interior', 'estatein' ); ?>">
        </div>
      </div>

      <!-- Gallery Controls: Prev, Dashes, Next -->
      <div class="gallery-nav-bar">
        <button type="button" class="carousel-arrow" id="galleryPrevBtn" aria-label="<?php esc_attr_e( 'Previous Photos', 'estatein' ); ?>">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="15 18 9 12 15 6"></polyline>
          </svg>
        </button>
        <div class="gallery-progress-dashes" id="galleryDashes">
          <span class="gallery-dash active"></span>
          <span class="gallery-dash"></span>
          <span class="gallery-dash"></span>
          <span class="gallery-dash"></span>
          <span class="gallery-dash"></span>
        </div>
        <button type="button" class="carousel-arrow" id="galleryNextBtn" aria-label="<?php esc_attr_e( 'Next Photos', 'estatein' ); ?>">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </button>
      </div>
    </div>

    <!-- Specs 2-Column Grid -->
    <div class="prop-specs-grid">
      <!-- Left Box: Description & Quick Stats -->
      <div class="spec-card spec-desc-card">
        <h3 class="spec-card-title"><?php esc_html_e( 'Description', 'estatein' ); ?></h3>
        <p class="spec-desc-text">
          <?php esc_html_e( 'Discover your own piece of paradise with the Seaside Serenity Villa. With an open floor plan, breathtaking ocean views from every room, and direct access to a pristine sandy beach, this property is the epitome of coastal living.', 'estatein' ); ?>
        </p>
        <div class="spec-stats-divider"></div>
        <div class="spec-stats-row">
          <div class="spec-stat-item">
            <div class="stat-top">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M2 4v16M2 8h20v12H2zM2 12h20M6 8v4M18 8v4"></path>
              </svg>
              <span class="stat-name"><?php esc_html_e( 'Bedrooms', 'estatein' ); ?></span>
            </div>
            <div class="stat-num"><?php esc_html_e( '04', 'estatein' ); ?></div>
          </div>
          <div class="spec-stat-item">
            <div class="stat-top">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 12v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6M3 12h18M7 12V7a2 2 0 0 1 2-2h1"></path>
              </svg>
              <span class="stat-name"><?php esc_html_e( 'Bathrooms', 'estatein' ); ?></span>
            </div>
            <div class="stat-num"><?php esc_html_e( '03', 'estatein' ); ?></div>
          </div>
          <div class="spec-stat-item">
            <div class="stat-top">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="9" y1="3" x2="9" y2="21"></line>
                <line x1="3" y1="9" x2="21" y2="9"></line>
              </svg>
              <span class="stat-name"><?php esc_html_e( 'Area', 'estatein' ); ?></span>
            </div>
            <div class="stat-num"><?php esc_html_e( '2,500 Square Feet', 'estatein' ); ?></div>
          </div>
        </div>
      </div>

      <!-- Right Box: Key Features and Amenities -->
      <div class="spec-card spec-features-card">
        <h3 class="spec-card-title"><?php esc_html_e( 'Key Features and Amenities', 'estatein' ); ?></h3>
        <div class="amenities-list">
          <div class="amenity-item">
            <span class="amenity-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
              </svg>
            </span>
            <span class="amenity-text"><?php esc_html_e( 'Expansive oceanfront terrace for outdoor entertaining', 'estatein' ); ?></span>
          </div>
          <div class="amenity-item">
            <span class="amenity-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
              </svg>
            </span>
            <span class="amenity-text"><?php esc_html_e( 'Gourmet kitchen with top-of-the-line appliances', 'estatein' ); ?></span>
          </div>
          <div class="amenity-item">
            <span class="amenity-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
              </svg>
            </span>
            <span class="amenity-text"><?php esc_html_e( 'Private beach access for morning strolls and sunset views', 'estatein' ); ?></span>
          </div>
          <div class="amenity-item">
            <span class="amenity-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
              </svg>
            </span>
            <span class="amenity-text"><?php esc_html_e( 'Master suite with a spa-inspired bathroom and ocean-facing balcony', 'estatein' ); ?></span>
          </div>
          <div class="amenity-item">
            <span class="amenity-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
              </svg>
            </span>
            <span class="amenity-text"><?php esc_html_e( 'Private garage and ample storage space', 'estatein' ); ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

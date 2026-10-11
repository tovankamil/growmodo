<?php
/**
 * Template Part: Properties Page - Discover a World of Possibilities
 *
 * @package Estatein
 */

$property_items = array(
	array(
		'title'       => 'Seaside Serenity Villa',
		'badge'       => 'Coastal Escapes - Where Waves Beckon',
		'image'       => get_template_directory_uri() . '/assets/images/Image2.jpg',
		'desc'        => 'Wake up to the soothing melody of waves. This beachfront villa offers breathtaking ocean views, modern amenities, and private direct access to pristine sands.',
		'price'       => '$1,250,000',
		'link'        => home_url( '/property/seaside-serenity-villa/' ),
		'location'    => 'malibu',
		'type'        => 'villa',
		'price_range' => '1m-plus',
		'size'        => '3-4',
		'year'        => '2023',
	),
	array(
		'title'       => 'Metropolitan Haven',
		'badge'       => 'Urban Oasis - Life in the Heart of the City',
		'image'       => get_template_directory_uri() . '/assets/images/Image3.jpg',
		'desc'        => 'Immerse yourself in the energy of the city. This modern apartment in the heart of downtown features skyline views, high ceilings, and luxury finishes.',
		'price'       => '$650,000',
		'link'        => home_url( '/property/seaside-serenity-villa/' ),
		'location'    => 'new-york',
		'type'        => 'apartment',
		'price_range' => '500k-1m',
		'size'        => '1-2',
		'year'        => '2022',
	),
	array(
		'title'       => 'Rustic Retreat Cottage',
		'badge'       => 'Countryside Charm - Escape to Nature\'s Embrace',
		'image'       => get_template_directory_uri() . '/assets/images/Image4.jpg',
		'desc'        => 'Find tranquility in the countryside. This charming cottage is nestled amidst rolling hills, featuring cozy stone fireplaces and extensive private grounds.',
		'price'       => '$350,000',
		'link'        => home_url( '/property/seaside-serenity-villa/' ),
		'location'    => 'los-angeles',
		'type'        => 'cottage',
		'price_range' => '0-500k',
		'size'        => '3-4',
		'year'        => '2020-2021',
	),
);
?>
<section class="section-spacing properties-list-section" id="properties-list">
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
        <h2 class="section-title"><?php esc_html_e( 'Discover a World of Possibilities', 'estatein' ); ?></h2>
        <p class="section-subtitle">
          <?php esc_html_e( 'Our portfolio of properties is as diverse as your dreams. Explore the following categories to find the perfect property that resonates with your vision of home', 'estatein' ); ?>
        </p>
      </div>
    </div>

    <!-- Properties Grid -->
    <div class="properties-grid properties-catalogue-grid" id="propertiesCatalogueGrid">
      <?php foreach ( $property_items as $index => $item ) : ?>
        <article class="property-card catalogue-card" 
                 data-location="<?php echo esc_attr( $item['location'] ); ?>"
                 data-type="<?php echo esc_attr( $item['type'] ); ?>"
                 data-price="<?php echo esc_attr( $item['price_range'] ); ?>"
                 data-size="<?php echo esc_attr( $item['size'] ); ?>"
                 data-year="<?php echo esc_attr( $item['year'] ); ?>"
                 data-title="<?php echo esc_attr( strtolower( $item['title'] ) ); ?>">
          <div class="property-image-wrapper">
            <img src="<?php echo esc_url( $item['image'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" class="property-image" loading="lazy">
          </div>
          <div class="property-details">
            <div class="catalogue-badge-wrap">
              <span class="catalogue-category-badge"><?php echo esc_html( $item['badge'] ); ?></span>
            </div>
            <h3 class="property-name"><?php echo esc_html( $item['title'] ); ?></h3>
            <p class="property-desc">
              <?php echo esc_html( wp_trim_words( $item['desc'], 13, '...' ) ); ?>
              <a href="<?php echo esc_url( $item['link'] ); ?>" class="read-more-link"><?php esc_html_e( 'Read More', 'estatein' ); ?></a>
            </p>
          </div>
          <div class="property-footer">
            <div class="property-price-box">
              <span class="price-label"><?php esc_html_e( 'Price', 'estatein' ); ?></span>
              <span class="price-amount"><?php echo esc_html( $item['price'] ); ?></span>
            </div>
            <a href="<?php echo esc_url( $item['link'] ); ?>" class="btn btn-primary"><?php esc_html_e( 'View Property Details', 'estatein' ); ?></a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <!-- Pagination & Carousel Controls -->
    <div class="catalogue-pagination-bar">
      <span class="catalogue-page-counter" id="cataloguePageNum"><strong id="catalogueCurrentPage">01</strong> of 10</span>
      <div class="carousel-nav-arrows">
        <button type="button" class="carousel-arrow carousel-prev" id="propCataloguePrev" aria-label="<?php esc_attr_e( 'Previous Page', 'estatein' ); ?>">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="15 18 9 12 15 6"></polyline>
          </svg>
        </button>
        <button type="button" class="carousel-arrow carousel-next" id="propCatalogueNext" aria-label="<?php esc_attr_e( 'Next Page', 'estatein' ); ?>">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>

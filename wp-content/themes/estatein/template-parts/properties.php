<?php
/**
 * Template Part: Featured Properties Section
 *
 * @package Estatein
 */

$properties_query = new WP_Query(
	array(
		'post_type'      => 'estatein_property',
		'posts_per_page' => 3,
		'post_status'    => 'publish',
	)
);
?>
<section class="section-spacing" id="properties">
  <div class="container">
    <!-- Section Header with Sparkle Decoration -->
    <div class="section-header">
      <div class="section-header-content">
        <div class="section-sparkle">
          <svg width="56" height="24" viewBox="0 0 60 26" fill="none">
            <path d="M12 0L14 8L22 10L14 12L12 20L10 12L2 10L10 8L12 0Z" fill="#4D4D4D"/>
            <path d="M30 6L31.5 12L37.5 13.5L31.5 15L30 21L28.5 15L22.5 13.5L28.5 12L30 6Z" fill="#703BF7"/>
            <path d="M46 12L47 16L51 17L47 18L46 22L45 18L41 17L45 16L46 12Z" fill="#4D4D4D"/>
          </svg>
        </div>
        <h2 class="section-title"><?php esc_html_e( 'Featured Properties', 'estatein' ); ?></h2>
        <p class="section-subtitle">
          <?php esc_html_e( 'Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes and investments available through Estatein. Click "View Details" for more information.', 'estatein' ); ?>
        </p>
      </div>
      <a href="#properties" class="btn btn-secondary desktop-view-all-btn"><?php esc_html_e( 'View All Properties', 'estatein' ); ?></a>
    </div>

    <!-- Properties Grid / Carousel Container -->
    <div class="carousel-wrapper">
      <div class="properties-grid" id="propertiesSlider">
        <?php
        if ( $properties_query->have_posts() ) :
          $index = 0;
          while ( $properties_query->have_posts() ) :
            $properties_query->the_post();
            $price = estatein_get_meta( get_the_ID(), 'property_price', '_property_price', '$550,000' );
            $beds  = estatein_get_meta( get_the_ID(), 'property_beds', '_property_beds', '4-Bedroom' );
            $baths = estatein_get_meta( get_the_ID(), 'property_baths', '_property_baths', '3-Bathroom' );
            $type  = estatein_get_meta( get_the_ID(), 'property_type', '_property_type', 'Villa' );
            ?>
            <article class="property-card" data-index="<?php echo esc_attr( $index ); ?>">
              <div class="property-image-wrapper">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail( 'large', array( 'class' => 'property-image', 'loading' => 'lazy' ) ); ?>
                <?php else : ?>
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/img1.jpg' ); ?>" alt="<?php the_title_attribute(); ?>" class="property-image" width="864" height="636" loading="lazy">
                <?php endif; ?>
              </div>
              <div class="property-details">
                <h3 class="property-name"><?php the_title(); ?></h3>
                <p class="property-desc">
                  <?php echo wp_trim_words( get_the_excerpt() ?: get_the_content(), 14 ); ?>
                  <a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'estatein' ); ?></a>
                </p>
                <div class="property-tags">
                  <span class="tag-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 4v16M2 8h20v12H2zM2 12h20M6 8v4M18 8v4"/></svg>
                    <?php echo esc_html( $beds ); ?>
                  </span>
                  <span class="tag-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 12v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6M3 12h18M7 12V7a2 2 0 0 1 2-2h1"/></svg>
                    <?php echo esc_html( $baths ); ?>
                  </span>
                  <span class="tag-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                    <?php echo esc_html( $type ); ?>
                  </span>
                </div>
              </div>
              <div class="property-footer">
                <div class="property-price-box">
                  <span class="price-label"><?php esc_html_e( 'Price', 'estatein' ); ?></span>
                  <span class="price-amount"><?php echo esc_html( $price ); ?></span>
                </div>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php esc_html_e( 'View Property Details', 'estatein' ); ?></a>
              </div>
            </article>
            <?php
            $index++;
          endwhile;
          wp_reset_postdata();
        else :
          // Fallback to high-fidelity demo cards
          $demo_properties = array(
            array(
              'title' => 'Seaside Serenity Villa',
              'image' => '/assets/images/img1.jpg',
              'desc'  => 'A stunning 4-bedroom, 3-bathroom villa in a peaceful suburban neighborhood...',
              'beds'  => '4-Bedroom',
              'baths' => '3-Bathroom',
              'type'  => 'Villa',
              'price' => '$550,000',
            ),
            array(
              'title' => 'Metropolitan Haven',
              'image' => '/assets/images/Image2.jpg',
              'desc'  => 'A chic and fully-furnished 2-bedroom apartment with panoramic city views...',
              'beds'  => '2-Bedroom',
              'baths' => '2-Bathroom',
              'type'  => 'Villa',
              'price' => '$550,000',
            ),
            array(
              'title' => 'Rustic Retreat Cottage',
              'image' => '/assets/images/Image3.jpg',
              'desc'  => 'An elegant 3-bedroom, 2.5-bathroom townhouse in a peaceful gated community...',
              'beds'  => '3-Bedroom',
              'baths' => '3-Bathroom',
              'type'  => 'Villa',
              'price' => '$550,000',
            ),
          );

          foreach ( $demo_properties as $idx => $prop ) :
          ?>
            <article class="property-card" data-index="<?php echo esc_attr( $idx ); ?>">
              <div class="property-image-wrapper">
                <img src="<?php echo esc_url( get_template_directory_uri() . $prop['image'] ); ?>" alt="<?php echo esc_attr( $prop['title'] ); ?>" class="property-image" width="864" height="636" loading="lazy">
              </div>
              <div class="property-details">
                <h3 class="property-name"><?php echo esc_html( $prop['title'] ); ?></h3>
                <p class="property-desc">
                  <?php echo esc_html( $prop['desc'] ); ?>
                  <a href="#details"><?php esc_html_e( 'Read More', 'estatein' ); ?></a>
                </p>
                <div class="property-tags">
                  <span class="tag-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 4v16M2 8h20v12H2zM2 12h20M6 8v4M18 8v4"/></svg>
                    <?php echo esc_html( $prop['beds'] ); ?>
                  </span>
                  <span class="tag-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 12v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6M3 12h18M7 12V7a2 2 0 0 1 2-2h1"/></svg>
                    <?php echo esc_html( $prop['baths'] ); ?>
                  </span>
                  <span class="tag-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                    <?php echo esc_html( $prop['type'] ); ?>
                  </span>
                </div>
              </div>
              <div class="property-footer">
                <div class="property-price-box">
                  <span class="price-label"><?php esc_html_e( 'Price', 'estatein' ); ?></span>
                  <span class="price-amount"><?php echo esc_html( $prop['price'] ); ?></span>
                </div>
                <a href="#details" class="btn btn-primary"><?php esc_html_e( 'View Property Details', 'estatein' ); ?></a>
              </div>
            </article>
          <?php
          endforeach;
        endif;
        ?>
      </div>
    </div>

    <!-- Pagination Bar (With Mobile View All button) -->
    <div class="pagination-bar">
      <a href="#properties" class="btn btn-secondary mobile-view-all-btn"><?php esc_html_e( 'View All Properties', 'estatein' ); ?></a>
      <div class="pagination-right-group">
        <span class="pagination-counter" id="propertiesCounter">01 of 60</span>
        <div class="pagination-controls">
          <button class="btn-arrow" id="propPrevBtn" aria-label="<?php esc_attr_e( 'Previous Properties', 'estatein' ); ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
          </button>
          <button class="btn-arrow" id="propNextBtn" aria-label="<?php esc_attr_e( 'Next Properties', 'estatein' ); ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

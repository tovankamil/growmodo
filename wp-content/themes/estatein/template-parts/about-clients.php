<?php
/**
 * Template Part: About Us - Our Valued Clients Section
 *
 * @package Estatein
 */

$clients_data = array(
	array(
		'since'       => '2019',
		'name'        => 'ABC Corporation',
		'url'         => '#',
		'domain'      => 'Commercial Real Estate',
		'category'    => 'Luxury Home Development',
		'testimonial' => "Estatein's expertise in finding the perfect office space for our expanding operations was invaluable. They truly understand our business needs.",
	),
	array(
		'since'       => '2018',
		'name'        => 'GreenTech Enterprises',
		'url'         => '#',
		'domain'      => 'Commercial Real Estate',
		'category'    => 'Retail Space',
		'testimonial' => "Estatein's ability to identify prime retail locations helped us expand our brand presence. They are a trusted partner in our growth.",
	),
);
?>
<section class="section-spacing about-clients-section" id="clients">
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
        <h2 class="section-title"><?php esc_html_e( 'Our Valued Clients', 'estatein' ); ?></h2>
        <p class="section-subtitle">
          <?php esc_html_e( "At Estatein, we have had the privilege of working with a diverse range of clients across various industries. Here are some of the clients we've had the pleasure of serving", 'estatein' ); ?>
        </p>
      </div>
    </div>

    <!-- Clients Grid / Carousel Wrapper -->
    <div class="about-clients-wrapper">
      <div class="about-clients-grid" id="clientsSlider">
        <?php foreach ( $clients_data as $idx => $client ) : ?>
          <article class="client-card" data-index="<?php echo esc_attr( $idx ); ?>">
            <div class="client-card-top">
              <div class="client-identity">
                <span class="client-since"><?php echo esc_html( sprintf( __( 'Since %s', 'estatein' ), $client['since'] ) ); ?></span>
                <h3 class="client-name"><?php echo esc_html( $client['name'] ); ?></h3>
              </div>
              <a href="<?php echo esc_url( $client['url'] ); ?>" class="btn-visit-website">
                <?php esc_html_e( 'Visit Website', 'estatein' ); ?>
              </a>
            </div>

            <div class="client-meta-row">
              <div class="client-meta-item">
                <div class="client-meta-label">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="3" width="7" height="7" rx="1"></rect>
                    <rect x="14" y="3" width="7" height="7" rx="1"></rect>
                    <rect x="14" y="14" width="7" height="7" rx="1"></rect>
                    <rect x="3" y="14" width="7" height="7" rx="1"></rect>
                  </svg>
                  <span><?php esc_html_e( 'Domain', 'estatein' ); ?></span>
                </div>
                <div class="client-meta-value"><?php echo esc_html( $client['domain'] ); ?></div>
              </div>

              <div class="client-meta-item">
                <div class="client-meta-label">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                  </svg>
                  <span><?php esc_html_e( 'Category', 'estatein' ); ?></span>
                </div>
                <div class="client-meta-value"><?php echo esc_html( $client['category'] ); ?></div>
              </div>
            </div>

            <div class="client-quote-box">
              <span class="client-quote-label"><?php esc_html_e( 'What They Said 🤗', 'estatein' ); ?></span>
              <p class="client-quote-text"><?php echo esc_html( $client['testimonial'] ); ?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Clients Pagination Bar -->
    <div class="clients-pagination-bar">
      <div class="clients-pagination-counter" id="clientsPaginationCounter">
        <span class="current-client-page text-white">01</span> <span class="counter-total">of 10</span>
      </div>
      <div class="clients-pagination-controls">
        <button class="client-arrow-btn" id="clientPrevBtn" aria-label="<?php esc_attr_e( 'Previous client', 'estatein' ); ?>">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
        </button>
        <button class="client-arrow-btn" id="clientNextBtn" aria-label="<?php esc_attr_e( 'Next client', 'estatein' ); ?>">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
        </button>
      </div>
    </div>
  </div>
</section>

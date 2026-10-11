<?php
/**
 * Template Part: Frequently Asked Questions Section
 *
 * @package Estatein
 */

$faq_query = new WP_Query(
	array(
		'post_type'      => 'estatein_faq',
		'posts_per_page' => 3,
		'post_status'    => 'publish',
	)
);
?>
<section class="section-spacing" id="faq">
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
        <h2 class="section-title"><?php esc_html_e( 'Frequently Asked Questions', 'estatein' ); ?></h2>
        <p class="section-subtitle">
          <?php esc_html_e( "Find answers to common questions about Estatein's services, property listings, and the real estate process. We're here to provide clarity and assist you every step of the way.", 'estatein' ); ?>
        </p>
      </div>
      <a href="#faq" class="btn btn-secondary desktop-view-all-btn"><?php esc_html_e( "View All FAQ's", 'estatein' ); ?></a>
    </div>

    <!-- FAQ Carousel Container -->
    <div class="carousel-wrapper">
      <div class="faq-grid" id="faqSlider">
        <?php
        if ( $faq_query->have_posts() ) :
          $index = 0;
          while ( $faq_query->have_posts() ) :
            $faq_query->the_post();
            ?>
            <div class="faq-card" data-index="<?php echo esc_attr( $index ); ?>">
              <h3 class="faq-question"><?php the_title(); ?></h3>
              <div class="faq-answer">
                <?php echo wp_kses_post( get_the_content() ); ?>
              </div>
              <button class="btn btn-secondary faq-button faq-toggle-btn" data-expanded="false"><?php esc_html_e( 'Read More', 'estatein' ); ?></button>
            </div>
            <?php
            $index++;
          endwhile;
          wp_reset_postdata();
        else :
          // Fallback to high-fidelity demo FAQs
          $demo_faqs = array(
            array(
              'q' => 'How do I search for properties on Estatein?',
              'a' => 'Learn how to use our user-friendly search tools, filter options, and interactive maps to find properties that match your criteria.',
            ),
            array(
              'q' => 'What documents do I need to sell my property through Estatein?',
              'a' => 'Find out about the necessary documentation, title deeds, tax filings, and inspection reports required for listing your property with us.',
            ),
            array(
              'q' => 'How can I contact an Estatein agent?',
              'a' => 'Discover the different ways you can get in touch with our experienced agents via direct call, email, or booking a private 1-on-1 consultation.',
            ),
          );

          foreach ( $demo_faqs as $idx => $faq ) :
          ?>
            <div class="faq-card" data-index="<?php echo esc_attr( $idx ); ?>">
              <h3 class="faq-question"><?php echo esc_html( $faq['q'] ); ?></h3>
              <p class="faq-answer">
                <?php echo esc_html( $faq['a'] ); ?>
              </p>
              <button class="btn btn-secondary faq-button faq-toggle-btn" data-expanded="false"><?php esc_html_e( 'Read More', 'estatein' ); ?></button>
            </div>
          <?php
          endforeach;
        endif;
        ?>
      </div>
    </div>

    <!-- Pagination Bar -->
    <div class="pagination-bar">
      <a href="#faq" class="btn btn-secondary mobile-view-all-btn"><?php esc_html_e( "View All FAQ's", 'estatein' ); ?></a>
      <div class="pagination-right-group">
        <div class="pagination-counter" id="faqPaginationCounter">
          <span class="current-page text-white">01</span> of 03
        </div>
        <div class="pagination-controls">
          <button class="btn-arrow" id="faqPrevBtn" aria-label="<?php esc_attr_e( 'Previous FAQ', 'estatein' ); ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
          </button>
          <button class="btn-arrow" id="faqNextBtn" aria-label="<?php esc_attr_e( 'Next FAQ', 'estatein' ); ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

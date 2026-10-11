<?php
/**
 * Template Part: Client Testimonials Section
 *
 * @package Estatein
 */

$testimonials_query = new WP_Query(
	array(
		'post_type'      => 'estatein_testimonial',
		'posts_per_page' => 3,
		'post_status'    => 'publish',
	)
);
?>
<section class="section-spacing" id="testimonials">
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
        <h2 class="section-title"><?php esc_html_e( 'What Our Clients Say', 'estatein' ); ?></h2>
        <p class="section-subtitle">
          <?php esc_html_e( 'Read the success stories and heartfelt testimonials from our valued clients. Discover why they chose Estatein for their real estate needs.', 'estatein' ); ?>
        </p>
      </div>
      <a href="#testimonials" class="btn btn-secondary desktop-view-all-btn"><?php esc_html_e( 'View All Testimonials', 'estatein' ); ?></a>
    </div>

    <!-- Testimonials Carousel Container -->
    <div class="carousel-wrapper">
      <div class="testimonials-grid" id="testimonialsSlider">
        <?php
        if ( $testimonials_query->have_posts() ) :
          $index = 0;
          while ( $testimonials_query->have_posts() ) :
            $testimonials_query->the_post();
            $client_name     = estatein_get_meta( get_the_ID(), 'testimonial_author', '_testimonial_author', get_the_title() );
            $client_location = estatein_get_meta( get_the_ID(), 'testimonial_location', '_testimonial_location', 'USA, California' );
            $client_rating   = intval( estatein_get_meta( get_the_ID(), 'testimonial_rating', '_testimonial_rating', '5' ) );
            ?>
            <div class="testimonial-card" data-index="<?php echo esc_attr( $index ); ?>">
              <div class="rating-stars" aria-label="<?php echo esc_attr( sprintf( __( '%d stars rating', 'estatein' ), $client_rating ) ); ?>">
                <?php for ( $i = 0; $i < $client_rating; $i++ ) : ?>
                  <div class="star-box"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
                <?php endfor; ?>
              </div>
              <div class="testimonial-content">
                <h3 class="testimonial-title"><?php the_title(); ?></h3>
                <div class="testimonial-quote">
                  "<?php echo esc_html( wp_strip_all_tags( get_the_content() ) ); ?>"
                </div>
              </div>
              <div class="client-profile">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail( array( 56, 56 ), array( 'class' => 'client-avatar', 'loading' => 'lazy' ) ); ?>
                <?php else : ?>
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/m1.jpg' ); ?>" alt="<?php echo esc_attr( $client_name ); ?>" class="client-avatar" width="56" height="56" loading="lazy">
                <?php endif; ?>
                <div class="client-meta">
                  <span class="client-name"><?php echo esc_html( $client_name ); ?></span>
                  <span class="client-location"><?php echo esc_html( $client_location ); ?></span>
                </div>
              </div>
            </div>
            <?php
            $index++;
          endwhile;
          wp_reset_postdata();
        else :
          // Fallback to high-fidelity demo testimonials
          $demo_testimonials = array(
            array(
              'title'    => 'Exceptional Service!',
              'quote'    => 'Our experience with Estatein was outstanding. Their team\'s dedication and professionalism made finding our dream home a breeze. Highly recommended!',
              'author'   => 'Wade Warren',
              'location' => 'USA, California',
              'avatar'   => '/assets/images/m1.jpg',
            ),
            array(
              'title'    => 'Efficient and Reliable',
              'quote'    => 'Estatein provided us with top-notch service. They helped us sell our property quickly and at a great price. We couldn\'t be happier with the results.',
              'author'   => 'Emelie Thomson',
              'location' => 'USA, Florida',
              'avatar'   => '/assets/images/w1.jpg',
            ),
            array(
              'title'    => 'Trusted Advisors',
              'quote'    => 'The Estatein team guided us through the entire buying process. Their knowledge and commitment to our needs were impressive. Thank you for your support!',
              'author'   => 'John Mans',
              'location' => 'USA, Nevada',
              'avatar'   => '/assets/images/w2.jpg',
            ),
          );

          foreach ( $demo_testimonials as $idx => $test ) :
          ?>
            <div class="testimonial-card" data-index="<?php echo esc_attr( $idx ); ?>">
              <div class="rating-stars" aria-label="<?php esc_attr_e( '5 stars rating', 'estatein' ); ?>">
                <div class="star-box"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
                <div class="star-box"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
                <div class="star-box"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
                <div class="star-box"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
                <div class="star-box"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
              </div>
              <div class="testimonial-content">
                <h3 class="testimonial-title"><?php echo esc_html( $test['title'] ); ?></h3>
                <p class="testimonial-quote">
                  "<?php echo esc_html( $test['quote'] ); ?>"
                </p>
              </div>
              <div class="client-profile">
                <img src="<?php echo esc_url( get_template_directory_uri() . $test['avatar'] ); ?>" alt="<?php echo esc_attr( $test['author'] ); ?>" class="client-avatar" width="56" height="56" loading="lazy">
                <div class="client-meta">
                  <span class="client-name"><?php echo esc_html( $test['author'] ); ?></span>
                  <span class="client-location"><?php echo esc_html( $test['location'] ); ?></span>
                </div>
              </div>
            </div>
          <?php
          endforeach;
        endif;
        ?>
      </div>
    </div>

    <!-- Pagination Bar -->
    <div class="pagination-bar">
      <a href="#testimonials" class="btn btn-secondary mobile-view-all-btn"><?php esc_html_e( 'View All Testimonials', 'estatein' ); ?></a>
      <div class="pagination-right-group">
        <div class="pagination-counter" id="testPaginationCounter">
          <span class="current-page text-white">01</span> of 03
        </div>
        <div class="pagination-controls">
          <button class="btn-arrow" id="testPrevBtn" aria-label="<?php esc_attr_e( 'Previous testimonial', 'estatein' ); ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
          </button>
          <button class="btn-arrow" id="testNextBtn" aria-label="<?php esc_attr_e( 'Next testimonial', 'estatein' ); ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

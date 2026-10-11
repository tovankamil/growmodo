<?php
/**
 * Estatein Theme Footer
 *
 * @package Estatein
 */
?>
    <!-- Call to Action Banner -->
    <section class="cta-section">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Abstract Design.png' ); ?>" alt="" class="cta-bg-abstract cta-bg-left" aria-hidden="true">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Abstract Design2.png' ); ?>" alt="" class="cta-bg-abstract cta-bg-right" aria-hidden="true">
      <div class="container">
        <div class="cta-grid">
          <div class="cta-content">
            <h2 class="cta-title"><?php esc_html_e( 'Start Your Real Estate Journey Today', 'estatein' ); ?></h2>
            <p class="cta-description">
              <?php esc_html_e( "Your dream property is just a click away. Whether you're looking for a new home, a strategic investment, or expert real estate advice, Estatein is here to assist you every step of the way. Take the first step towards your real estate goals and explore our available properties or get in touch with our team for personalized assistance.", 'estatein' ); ?>
            </p>
          </div>
          <a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>" class="btn btn-primary cta-btn"><?php esc_html_e( 'Explore Properties', 'estatein' ); ?></a>
        </div>
      </div>
    </section>
  </main>

  <!-- Global Footer -->
  <footer class="site-footer" id="contact">
    <div class="container">
      <div class="footer-top">
        <!-- Brand & Newsletter Form -->
        <div class="footer-brand">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo" aria-label="<?php bloginfo( 'name' ); ?>">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo/Logo_d.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" width="160" height="48">
          </a>
          <form class="newsletter-form" id="newsletterForm" aria-label="<?php esc_attr_e( 'Subscribe to newsletter', 'estatein' ); ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--grey-60); flex-shrink: 0;">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
              <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
            <input type="email" placeholder="<?php esc_attr_e( 'Enter Your Email', 'estatein' ); ?>" class="newsletter-input" required aria-label="<?php esc_attr_e( 'Email Address', 'estatein' ); ?>">
            <button type="submit" class="newsletter-btn" aria-label="<?php esc_attr_e( 'Subscribe', 'estatein' ); ?>">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="22" y1="2" x2="11" y2="13"></line>
                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
              </svg>
            </button>
          </form>
        </div>

        <!-- Sitemap Navigation Grid (2 Columns on Mobile with Dividers) -->
        <div class="footer-nav-grid">
          <div class="footer-nav-col footer-nav-col-1">
            <!-- Col 1: Home -->
            <div class="footer-col footer-col-home">
              <h4 class="footer-col-title"><?php esc_html_e( 'Home', 'estatein' ); ?></h4>
              <ul class="footer-links">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Hero Section', 'estatein' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Features', 'estatein' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>"><?php esc_html_e( 'Properties', 'estatein' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/#testimonials' ) ); ?>"><?php esc_html_e( 'Testimonials', 'estatein' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>"><?php esc_html_e( 'FAQ’s', 'estatein' ); ?></a></li>
              </ul>
            </div>

            <!-- Col 3: Properties -->
            <div class="footer-col footer-col-properties">
              <h4 class="footer-col-title"><?php esc_html_e( 'Properties', 'estatein' ); ?></h4>
              <ul class="footer-links">
                <li><a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>"><?php esc_html_e( 'Portfolio', 'estatein' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>"><?php esc_html_e( 'Categories', 'estatein' ); ?></a></li>
              </ul>
            </div>

            <!-- Col 5: Contact Us -->
            <div class="footer-col footer-col-contact">
              <h4 class="footer-col-title"><?php esc_html_e( 'Contact Us', 'estatein' ); ?></h4>
              <ul class="footer-links">
                <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Form', 'estatein' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Our Offices', 'estatein' ); ?></a></li>
              </ul>
            </div>
          </div>

          <div class="footer-nav-col footer-nav-col-2">
            <!-- Col 2: About Us -->
            <div class="footer-col footer-col-about">
              <h4 class="footer-col-title"><?php esc_html_e( 'About Us', 'estatein' ); ?></h4>
              <ul class="footer-links">
                <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'Our Story', 'estatein' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'Our Works', 'estatein' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'How It Works', 'estatein' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/about/#team' ) ); ?>"><?php esc_html_e( 'Our Team', 'estatein' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/about/#clients' ) ); ?>"><?php esc_html_e( 'Our Clients', 'estatein' ); ?></a></li>
              </ul>
            </div>

            <!-- Col 4: Services -->
            <div class="footer-col footer-col-services">
              <h4 class="footer-col-title"><?php esc_html_e( 'Services', 'estatein' ); ?></h4>
              <ul class="footer-links">
                <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Valuation Mastery', 'estatein' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Strategic Marketing', 'estatein' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Negotiation Wizardry', 'estatein' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Closing Success', 'estatein' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Property Management', 'estatein' ); ?></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Copyright & Social -->
    <div class="footer-bottom">
      <div class="container">
        <div class="footer-bottom-inner">
          <div class="footer-meta-links">
            <span>@2023 Estatein. All Rights Reserved.</span>
            <a href="#terms"><?php esc_html_e( 'Terms & Conditions', 'estatein' ); ?></a>
          </div>

          <div class="social-links" aria-label="<?php esc_attr_e( 'Social media channels', 'estatein' ); ?>">
            <a href="https://facebook.com" class="social-icon-btn" aria-label="Facebook" target="_blank" rel="noopener">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
              </svg>
            </a>
            <a href="https://linkedin.com" class="social-icon-btn" aria-label="LinkedIn" target="_blank" rel="noopener">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                <rect x="2" y="9" width="4" height="12"></rect>
                <circle cx="4" cy="4" r="2"></circle>
              </svg>
            </a>
            <a href="https://twitter.com" class="social-icon-btn" aria-label="Twitter / X" target="_blank" rel="noopener">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
              </svg>
            </a>
            <a href="https://youtube.com" class="social-icon-btn" aria-label="YouTube" target="_blank" rel="noopener">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19.1c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.43z"></path>
                <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" fill="var(--grey-10)"></polygon>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>

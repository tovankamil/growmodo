<?php
/**
 * Template Part: Contact Page - Hero & Quick Contact Cards
 *
 * @package Estatein
 */
?>
<section class="section-spacing contact-hero-section">
  <div class="container">
    <div class="properties-hero-header">
      <h1 class="section-title"><?php esc_html_e( 'Get in Touch with Estatein', 'estatein' ); ?></h1>
      <p class="section-subtitle">
        <?php esc_html_e( 'Welcome to Estatein\'s Contact Us page. We\'re here to assist you with any inquiries, requests, or feedback you may have. Whether you\'re looking to buy or sell a property, explore investment opportunities, or simply want to connect, we\'re just a message away. Reach out to us, and let\'s start a conversation.', 'estatein' ); ?>
      </p>
    </div>

    <!-- 4 Contact Cards Grid -->
    <div class="services-quick-nav-grid contact-quick-nav-grid">
      <!-- 1. Email -->
      <a href="mailto:info@estatein.com" class="service-quick-card contact-card-item">
        <div class="service-quick-icon-wrap">
          <svg class="feature-concentric-rings" viewBox="0 0 68 68" fill="none">
            <circle cx="34" cy="34" r="31" stroke="rgba(192, 132, 252, 0.28)" stroke-width="1.2" stroke-dasharray="2 3"/>
            <circle cx="34" cy="34" r="27" stroke="rgba(192, 132, 252, 0.42)" stroke-width="1.2"/>
            <path d="M 10,24 A 27,27 0 0,1 58,20" stroke="#c084fc" stroke-width="1.6" stroke-linecap="round"/>
            <path d="M 58,44 A 27,27 0 0,1 10,48" stroke="#c084fc" stroke-width="1.6" stroke-linecap="round"/>
            <circle cx="34" cy="34" r="21" fill="rgba(112, 59, 247, 0.16)" stroke="#703BF7" stroke-width="1.5"/>
          </svg>
          <svg class="feature-icon-svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
            <polyline points="22,6 12,13 2,6"></polyline>
          </svg>
        </div>
        <span class="service-quick-title"><?php esc_html_e( 'info@estatein.com', 'estatein' ); ?></span>
        <span class="service-quick-arrow">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="7" y1="17" x2="17" y2="7"></line>
            <polyline points="7 7 17 7 17 17"></polyline>
          </svg>
        </span>
      </a>

      <!-- 2. Phone -->
      <a href="tel:+11234567890" class="service-quick-card contact-card-item">
        <div class="service-quick-icon-wrap">
          <svg class="feature-concentric-rings" viewBox="0 0 68 68" fill="none">
            <circle cx="34" cy="34" r="31" stroke="rgba(192, 132, 252, 0.28)" stroke-width="1.2" stroke-dasharray="2 3"/>
            <circle cx="34" cy="34" r="27" stroke="rgba(192, 132, 252, 0.42)" stroke-width="1.2"/>
            <path d="M 10,24 A 27,27 0 0,1 58,20" stroke="#c084fc" stroke-width="1.6" stroke-linecap="round"/>
            <path d="M 58,44 A 27,27 0 0,1 10,48" stroke="#c084fc" stroke-width="1.6" stroke-linecap="round"/>
            <circle cx="34" cy="34" r="21" fill="rgba(112, 59, 247, 0.16)" stroke="#703BF7" stroke-width="1.5"/>
          </svg>
          <svg class="feature-icon-svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
          </svg>
        </div>
        <span class="service-quick-title"><?php esc_html_e( '+1 (123) 456-7890', 'estatein' ); ?></span>
        <span class="service-quick-arrow">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="7" y1="17" x2="17" y2="7"></line>
            <polyline points="7 7 17 7 17 17"></polyline>
          </svg>
        </span>
      </a>

      <!-- 3. Main Headquarters -->
      <a href="#office-locations" class="service-quick-card contact-card-item">
        <div class="service-quick-icon-wrap">
          <svg class="feature-concentric-rings" viewBox="0 0 68 68" fill="none">
            <circle cx="34" cy="34" r="31" stroke="rgba(192, 132, 252, 0.28)" stroke-width="1.2" stroke-dasharray="2 3"/>
            <circle cx="34" cy="34" r="27" stroke="rgba(192, 132, 252, 0.42)" stroke-width="1.2"/>
            <path d="M 10,24 A 27,27 0 0,1 58,20" stroke="#c084fc" stroke-width="1.6" stroke-linecap="round"/>
            <path d="M 58,44 A 27,27 0 0,1 10,48" stroke="#c084fc" stroke-width="1.6" stroke-linecap="round"/>
            <circle cx="34" cy="34" r="21" fill="rgba(112, 59, 247, 0.16)" stroke="#703BF7" stroke-width="1.5"/>
          </svg>
          <svg class="feature-icon-svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
        </div>
        <span class="service-quick-title"><?php esc_html_e( 'Main Headquarters', 'estatein' ); ?></span>
        <span class="service-quick-arrow">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="7" y1="17" x2="17" y2="7"></line>
            <polyline points="7 7 17 7 17 17"></polyline>
          </svg>
        </span>
      </a>

      <!-- 4. Socials -->
      <div class="service-quick-card contact-card-item contact-card-socials">
        <div class="service-quick-icon-wrap">
          <svg class="feature-concentric-rings" viewBox="0 0 68 68" fill="none">
            <circle cx="34" cy="34" r="31" stroke="rgba(192, 132, 252, 0.28)" stroke-width="1.2" stroke-dasharray="2 3"/>
            <circle cx="34" cy="34" r="27" stroke="rgba(192, 132, 252, 0.42)" stroke-width="1.2"/>
            <path d="M 10,24 A 27,27 0 0,1 58,20" stroke="#c084fc" stroke-width="1.6" stroke-linecap="round"/>
            <path d="M 58,44 A 27,27 0 0,1 10,48" stroke="#c084fc" stroke-width="1.6" stroke-linecap="round"/>
            <circle cx="34" cy="34" r="21" fill="rgba(112, 59, 247, 0.16)" stroke="#703BF7" stroke-width="1.5"/>
          </svg>
          <svg class="feature-icon-svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="18" cy="5" r="3"></circle>
            <circle cx="6" cy="12" r="3"></circle>
            <circle cx="18" cy="19" r="3"></circle>
            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
          </svg>
        </div>
        <div class="contact-social-links-wrap">
          <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="contact-social-inline">Instagram</a>
          <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="contact-social-inline">LinkedIn</a>
          <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="contact-social-inline">Facebook</a>
        </div>
        <span class="service-quick-arrow">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="7" y1="17" x2="17" y2="7"></line>
            <polyline points="7 7 17 7 17 17"></polyline>
          </svg>
        </span>
      </div>
    </div>
  </div>
</section>

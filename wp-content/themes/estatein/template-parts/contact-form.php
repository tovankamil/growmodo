<?php
/**
 * Template Part: Contact Page - Let's Connect Form
 *
 * @package Estatein
 */
?>
<section class="section-spacing contact-connect-section" id="connect">
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
        <h2 class="section-title"><?php esc_html_e( 'Let\'s Connect', 'estatein' ); ?></h2>
        <p class="section-subtitle">
          <?php esc_html_e( 'We\'re excited to connect with you and learn more about your real estate goals. Use the form below to get in touch with Estatein. Whether you\'re a prospective client, partner, or simply curious about our services, we\'re here to answer your questions and provide the assistance you need.', 'estatein' ); ?>
        </p>
      </div>
    </div>

    <!-- Contact Form Container -->
    <div class="inquiry-form-card">
      <form class="estatein-form" id="contactMainForm" onsubmit="event.preventDefault(); window.handleEstateinSubmit(this);">
        <div class="form-grid-3">
          <!-- First Name -->
          <div class="form-group">
            <label class="form-label" for="contactFirstName"><?php esc_html_e( 'First Name', 'estatein' ); ?></label>
            <input type="text" id="contactFirstName" name="first_name" class="form-input" placeholder="<?php esc_attr_e( 'Enter First Name', 'estatein' ); ?>" required>
          </div>
          <!-- Last Name -->
          <div class="form-group">
            <label class="form-label" for="contactLastName"><?php esc_html_e( 'Last Name', 'estatein' ); ?></label>
            <input type="text" id="contactLastName" name="last_name" class="form-input" placeholder="<?php esc_attr_e( 'Enter Last Name', 'estatein' ); ?>" required>
          </div>
          <!-- Email -->
          <div class="form-group">
            <label class="form-label" for="contactEmail"><?php esc_html_e( 'Email', 'estatein' ); ?></label>
            <input type="email" id="contactEmail" name="email" class="form-input" placeholder="<?php esc_attr_e( 'Enter your Email', 'estatein' ); ?>" required>
          </div>
        </div>

        <div class="form-grid-3">
          <!-- Phone -->
          <div class="form-group">
            <label class="form-label" for="contactPhone"><?php esc_html_e( 'Phone', 'estatein' ); ?></label>
            <input type="tel" id="contactPhone" name="phone" class="form-input" placeholder="<?php esc_attr_e( 'Enter Phone Number', 'estatein' ); ?>" required>
          </div>
          <!-- Inquiry Type -->
          <div class="form-group">
            <label class="form-label" for="contactInquiryType"><?php esc_html_e( 'Inquiry Type', 'estatein' ); ?></label>
            <div class="form-select-wrapper">
              <select id="contactInquiryType" name="inquiry_type" class="form-select" required>
                <option value=""><?php esc_html_e( 'Select Inquiry Type', 'estatein' ); ?></option>
                <option value="Buying"><?php esc_html_e( 'Buying Property', 'estatein' ); ?></option>
                <option value="Selling"><?php esc_html_e( 'Selling Property', 'estatein' ); ?></option>
                <option value="Management"><?php esc_html_e( 'Property Management', 'estatein' ); ?></option>
                <option value="Investment"><?php esc_html_e( 'Investment Advisory', 'estatein' ); ?></option>
                <option value="General"><?php esc_html_e( 'General Inquiry', 'estatein' ); ?></option>
              </select>
            </div>
          </div>
          <!-- How Did You Hear About Us? -->
          <div class="form-group">
            <label class="form-label" for="contactSource"><?php esc_html_e( 'How Did You Hear About Us?', 'estatein' ); ?></label>
            <div class="form-select-wrapper">
              <select id="contactSource" name="source" class="form-select">
                <option value=""><?php esc_html_e( 'Select', 'estatein' ); ?></option>
                <option value="Google"><?php esc_html_e( 'Google / Search Engine', 'estatein' ); ?></option>
                <option value="Social Media"><?php esc_html_e( 'Social Media', 'estatein' ); ?></option>
                <option value="Referral"><?php esc_html_e( 'Friend / Colleague', 'estatein' ); ?></option>
                <option value="Ad"><?php esc_html_e( 'Online Advertisement', 'estatein' ); ?></option>
                <option value="Other"><?php esc_html_e( 'Other', 'estatein' ); ?></option>
              </select>
            </div>
          </div>
        </div>

        <!-- Message -->
        <div class="form-group">
          <label class="form-label" for="contactMessage"><?php esc_html_e( 'Message', 'estatein' ); ?></label>
          <textarea id="contactMessage" name="message" class="form-textarea" rows="5" placeholder="<?php esc_attr_e( 'Enter your Message here..', 'estatein' ); ?>" required></textarea>
        </div>

        <!-- Terms & Submit Bar -->
        <div class="form-footer-bar">
          <label class="checkbox-label">
            <input type="checkbox" name="terms" required checked>
            <span class="checkbox-custom"></span>
            <span class="checkbox-text">
              <?php esc_html_e( 'I agree with', 'estatein' ); ?> 
              <a href="#" class="inline-link"><?php esc_html_e( 'Terms of Use', 'estatein' ); ?></a> 
              <?php esc_html_e( 'and', 'estatein' ); ?> 
              <a href="#" class="inline-link"><?php esc_html_e( 'Privacy Policy', 'estatein' ); ?></a>
            </span>
          </label>
          <button type="submit" class="btn btn-primary btn-submit-form">
            <?php esc_html_e( 'Send Your Message', 'estatein' ); ?>
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

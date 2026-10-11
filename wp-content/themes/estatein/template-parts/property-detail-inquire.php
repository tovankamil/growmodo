<?php
/**
 * Template Part: Property Detail - Inquire Section
 *
 * @package Estatein
 */
?>
<section class="section-spacing property-inquire-section" id="inquire">
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
        <h2 class="section-title"><?php esc_html_e( 'Inquire About Seaside Serenity Villa', 'estatein' ); ?></h2>
        <p class="section-subtitle">
          <?php esc_html_e( 'Interested in this property? Fill out the form below, and our real estate experts will get back to you with more details, including scheduling a viewing and answering any questions you may have.', 'estatein' ); ?>
        </p>
      </div>
    </div>

    <div class="inquiry-form-card">
      <form class="estatein-form" id="propertyInquiryForm" onsubmit="event.preventDefault(); window.handleEstateinSubmit(this);">
        <div class="form-grid-4">
          <div class="form-group">
            <label class="form-label" for="inqFirstName"><?php esc_html_e( 'First Name', 'estatein' ); ?></label>
            <input type="text" id="inqFirstName" name="first_name" class="form-input" placeholder="<?php esc_attr_e( 'Enter First Name', 'estatein' ); ?>" required>
          </div>
          <div class="form-group">
            <label class="form-label" for="inqLastName"><?php esc_html_e( 'Last Name', 'estatein' ); ?></label>
            <input type="text" id="inqLastName" name="last_name" class="form-input" placeholder="<?php esc_attr_e( 'Enter Last Name', 'estatein' ); ?>" required>
          </div>
          <div class="form-group">
            <label class="form-label" for="inqEmail"><?php esc_html_e( 'Email', 'estatein' ); ?></label>
            <input type="email" id="inqEmail" name="email" class="form-input" placeholder="<?php esc_attr_e( 'Enter your Email', 'estatein' ); ?>" required>
          </div>
          <div class="form-group">
            <label class="form-label" for="inqPhone"><?php esc_html_e( 'Phone', 'estatein' ); ?></label>
            <input type="tel" id="inqPhone" name="phone" class="form-input" placeholder="<?php esc_attr_e( 'Enter Phone Number', 'estatein' ); ?>" required>
          </div>
        </div>

        <div class="form-group">
          <label class="form-label" for="inqSelectedProp"><?php esc_html_e( 'Selected Property', 'estatein' ); ?></label>
          <div class="input-with-icon-wrapper">
            <input type="text" id="inqSelectedProp" name="selected_property" class="form-input readonly-input" value="Seaside Serenity Villa, Malibu, California" readonly>
            <span class="input-right-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
            </span>
          </div>
        </div>

        <div class="form-group">
          <label class="form-label" for="inqMessage"><?php esc_html_e( 'Message', 'estatein' ); ?></label>
          <textarea id="inqMessage" name="message" class="form-textarea" rows="5" placeholder="<?php esc_attr_e( 'Enter your Message here..', 'estatein' ); ?>" required></textarea>
        </div>

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

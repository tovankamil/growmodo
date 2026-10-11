<?php
/**
 * Template Part: Properties Page - Let's Make it Happen Form
 *
 * @package Estatein
 */
?>
<section class="section-spacing properties-inquiry-section" id="make-it-happen">
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
        <h2 class="section-title"><?php esc_html_e( 'Let\'s Make it Happen', 'estatein' ); ?></h2>
        <p class="section-subtitle">
          <?php esc_html_e( 'Ready to take the first step toward your dream property? Fill out the form below, and our real estate wizards will work their magic to find your perfect match. Don\'t wait; let\'s embark on this exciting journey together.', 'estatein' ); ?>
        </p>
      </div>
    </div>

    <!-- Contact Form Box -->
    <div class="inquiry-form-card">
      <form class="estatein-form" id="makeItHappenForm" onsubmit="event.preventDefault(); window.handleEstateinSubmit(this);">
        <div class="form-grid-4">
          <!-- First Name -->
          <div class="form-group">
            <label class="form-label" for="propFirstName"><?php esc_html_e( 'First Name', 'estatein' ); ?></label>
            <input type="text" id="propFirstName" name="first_name" class="form-input" placeholder="<?php esc_attr_e( 'Enter First Name', 'estatein' ); ?>" required>
          </div>
          <!-- Last Name -->
          <div class="form-group">
            <label class="form-label" for="propLastName"><?php esc_html_e( 'Last Name', 'estatein' ); ?></label>
            <input type="text" id="propLastName" name="last_name" class="form-input" placeholder="<?php esc_attr_e( 'Enter Last Name', 'estatein' ); ?>" required>
          </div>
          <!-- Email -->
          <div class="form-group">
            <label class="form-label" for="propEmail"><?php esc_html_e( 'Email', 'estatein' ); ?></label>
            <input type="email" id="propEmail" name="email" class="form-input" placeholder="<?php esc_attr_e( 'Enter your Email', 'estatein' ); ?>" required>
          </div>
          <!-- Phone -->
          <div class="form-group">
            <label class="form-label" for="propPhone"><?php esc_html_e( 'Phone', 'estatein' ); ?></label>
            <input type="tel" id="propPhone" name="phone" class="form-input" placeholder="<?php esc_attr_e( 'Enter Phone Number', 'estatein' ); ?>" required>
          </div>
        </div>

        <div class="form-grid-4">
          <!-- Preferred Location -->
          <div class="form-group">
            <label class="form-label" for="propPrefLocation"><?php esc_html_e( 'Preferred Location', 'estatein' ); ?></label>
            <div class="form-select-wrapper">
              <select id="propPrefLocation" name="preferred_location" class="form-select">
                <option value=""><?php esc_html_e( 'Select Location', 'estatein' ); ?></option>
                <option value="Malibu, California"><?php esc_html_e( 'Malibu, California', 'estatein' ); ?></option>
                <option value="Los Angeles, California"><?php esc_html_e( 'Los Angeles, California', 'estatein' ); ?></option>
                <option value="New York, NY"><?php esc_html_e( 'New York, NY', 'estatein' ); ?></option>
                <option value="Miami, Florida"><?php esc_html_e( 'Miami, Florida', 'estatein' ); ?></option>
              </select>
            </div>
          </div>
          <!-- Property Type -->
          <div class="form-group">
            <label class="form-label" for="propPrefType"><?php esc_html_e( 'Property Type', 'estatein' ); ?></label>
            <div class="form-select-wrapper">
              <select id="propPrefType" name="property_type" class="form-select">
                <option value=""><?php esc_html_e( 'Select Property Type', 'estatein' ); ?></option>
                <option value="Villa"><?php esc_html_e( 'Villa', 'estatein' ); ?></option>
                <option value="Apartment"><?php esc_html_e( 'Apartment', 'estatein' ); ?></option>
                <option value="Cottage"><?php esc_html_e( 'Cottage', 'estatein' ); ?></option>
                <option value="Penthouse"><?php esc_html_e( 'Penthouse', 'estatein' ); ?></option>
              </select>
            </div>
          </div>
          <!-- No. of Bedrooms -->
          <div class="form-group">
            <label class="form-label" for="propPrefBedrooms"><?php esc_html_e( 'No. of Bedrooms', 'estatein' ); ?></label>
            <div class="form-select-wrapper">
              <select id="propPrefBedrooms" name="bedrooms" class="form-select">
                <option value=""><?php esc_html_e( 'Select no. of Bedrooms', 'estatein' ); ?></option>
                <option value="1"><?php esc_html_e( '1 Bedroom', 'estatein' ); ?></option>
                <option value="2"><?php esc_html_e( '2 Bedrooms', 'estatein' ); ?></option>
                <option value="3"><?php esc_html_e( '3 Bedrooms', 'estatein' ); ?></option>
                <option value="4+"><?php esc_html_e( '4+ Bedrooms', 'estatein' ); ?></option>
              </select>
            </div>
          </div>
          <!-- Budget -->
          <div class="form-group">
            <label class="form-label" for="propPrefBudget"><?php esc_html_e( 'Budget', 'estatein' ); ?></label>
            <div class="form-select-wrapper">
              <select id="propPrefBudget" name="budget" class="form-select">
                <option value=""><?php esc_html_e( 'Select Budget', 'estatein' ); ?></option>
                <option value="Under $500,000"><?php esc_html_e( 'Under $500,000', 'estatein' ); ?></option>
                <option value="$500,000 - $1,000,000"><?php esc_html_e( '$500,000 - $1,000,000', 'estatein' ); ?></option>
                <option value="$1,000,000 - $2,000,000"><?php esc_html_e( '$1,000,000 - $2,000,000', 'estatein' ); ?></option>
                <option value="$2,000,000+"><?php esc_html_e( '$2,000,000+', 'estatein' ); ?></option>
              </select>
            </div>
          </div>
        </div>

        <!-- Preferred Contact Method (Radios with icons) -->
        <div class="form-group">
          <label class="form-label"><?php esc_html_e( 'Preferred Contact Method', 'estatein' ); ?></label>
          <div class="contact-method-radios">
            <label class="method-radio-card active">
              <input type="radio" name="contact_method" value="phone" checked>
              <span class="method-radio-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg>
              </span>
              <span class="method-radio-text"><?php esc_html_e( 'Enter Your Number', 'estatein' ); ?></span>
              <span class="radio-indicator"></span>
            </label>
            <label class="method-radio-card">
              <input type="radio" name="contact_method" value="email">
              <span class="method-radio-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                  <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
              </span>
              <span class="method-radio-text"><?php esc_html_e( 'Enter Your Email', 'estatein' ); ?></span>
              <span class="radio-indicator"></span>
            </label>
          </div>
        </div>

        <!-- Message -->
        <div class="form-group">
          <label class="form-label" for="propMessage"><?php esc_html_e( 'Message', 'estatein' ); ?></label>
          <textarea id="propMessage" name="message" class="form-textarea" rows="5" placeholder="<?php esc_attr_e( 'Enter your Message here..', 'estatein' ); ?>" required></textarea>
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

<?php
/**
 * Template Part: About Us - Meet the Estatein Team
 *
 * @package Estatein
 */

$team_members = array(
  array(
    'name'  => 'Max Mitchell',
    'role'  => 'Founder',
    'image' => '/assets/images/team_1.jpg',
  ),
  array(
    'name'  => 'Sarah Johnson',
    'role'  => 'Chief Real Estate Officer',
    'image' => '/assets/images/team_2.jpg',
  ),
  array(
    'name'  => 'David Brown',
    'role'  => 'Head of Property Management',
    'image' => '/assets/images/team_3.jpg',
  ),
  array(
    'name'  => 'Michael Turner',
    'role'  => 'Legal Counsel',
    'image' => '/assets/images/team_4.jpg',
  ),
);
?>
<section class="section-spacing about-team-section" id="team">
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
        <h2 class="section-title"><?php esc_html_e( 'Meet the Estatein Team', 'estatein' ); ?></h2>
        <p class="section-subtitle">
          <?php esc_html_e( 'At Estatein, our success is driven by the dedication and expertise of our team. Get to know the people behind our mission to make your real estate dreams a reality.', 'estatein' ); ?>
        </p>
      </div>
    </div>

    <div class="about-team-grid">
      <?php foreach ( $team_members as $member ) : ?>
        <article class="team-card">
          <div class="team-photo-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . $member['image'] ); ?>" alt="<?php echo esc_attr( $member['name'] ); ?>" class="team-photo" width="318" height="222" loading="eager">
            <a href="https://twitter.com" class="team-social-badge" aria-label="<?php echo esc_attr( sprintf( __( '%s on Twitter', 'estatein' ), $member['name'] ) ); ?>" target="_blank" rel="noopener">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
              </svg>
            </a>
          </div>
          <div class="team-info">
            <h3 class="team-name"><?php echo esc_html( $member['name'] ); ?></h3>
            <span class="team-role"><?php echo esc_html( $member['role'] ); ?></span>
          </div>
          <div class="team-chat-bar">
            <span class="team-chat-text"><?php esc_html_e( 'Say Hello 👋', 'estatein' ); ?></span>
            <button class="team-send-btn" aria-label="<?php esc_attr_e( 'Send direct greeting', 'estatein' ); ?>">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="22" y1="2" x2="11" y2="13"></line>
                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
              </svg>
            </button>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

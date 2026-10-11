<?php
/**
 * 404 Error Page Template
 *
 * @package Estatein
 */

get_header();
?>

<main id="primary" class="site-main section-spacing" style="min-height: 60vh; display: flex; align-items: center;">
  <div class="container" style="text-align: center; max-width: 680px; margin: 0 auto;">
    <div class="section-sparkle" style="margin-bottom: 24px;">
      <svg width="56" height="24" viewBox="0 0 60 26" fill="none">
        <path d="M12 0L14 8L22 10L14 12L12 20L10 12L2 10L10 8L12 0Z" fill="#4D4D4D"/>
        <path d="M30 6L31.5 12L37.5 13.5L31.5 15L30 21L28.5 15L22.5 13.5L28.5 12L30 6Z" fill="#703BF7"/>
        <path d="M46 12L47 16L51 17L47 18L46 22L45 18L41 17L45 16L46 12Z" fill="#4D4D4D"/>
      </svg>
    </div>
    <h1 style="font-size: clamp(64px, 8vw, 96px); font-weight: 700; color: var(--purple-60); line-height: 1; margin-bottom: 16px;">404</h1>
    <h2 style="font-size: clamp(24px, 3vw, 36px); font-weight: 600; color: var(--absolutewhite); margin-bottom: 16px;">
      <?php esc_html_e( 'Page Not Found', 'estatein' ); ?>
    </h2>
    <p style="color: var(--grey-60); font-size: 16px; line-height: 1.6; margin-bottom: 32px;">
      <?php esc_html_e( "The page you're looking for doesn't exist or has been moved. Explore our featured properties or return to the homepage.", 'estatein' ); ?>
    </p>
    <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
        <?php esc_html_e( 'Back to Homepage', 'estatein' ); ?>
      </a>
      <a href="<?php echo esc_url( home_url( '/#properties' ) ); ?>" class="btn btn-secondary">
        <?php esc_html_e( 'Browse Properties', 'estatein' ); ?>
      </a>
    </div>
  </div>
</main>

<?php
get_footer();

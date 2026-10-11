<?php
/**
 * Estatein Theme Header
 *
 * @package Estatein
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- Announcement Top Banner -->
  <aside class="top-banner" id="topBanner" aria-label="<?php esc_attr_e( 'Announcement', 'estatein' ); ?>">
    <div class="container">
      <div class="top-banner-inner">
        <span>✨ <?php esc_html_e( 'Discover Your Dream Property with Estatein', 'estatein' ); ?></span>
        <a href="#about" class="top-banner-link"><?php esc_html_e( 'Learn More', 'estatein' ); ?></a>
      </div>
      <button class="top-banner-close" id="bannerCloseBtn" aria-label="<?php esc_attr_e( 'Close Announcement Banner', 'estatein' ); ?>">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
    </div>
  </aside>

  <!-- Sticky Global Header -->
  <header class="site-header" id="siteHeader">
    <div class="container">
      <nav class="navbar" aria-label="<?php esc_attr_e( 'Main Navigation', 'estatein' ); ?>">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo" aria-label="<?php bloginfo( 'name' ); ?>">
          <?php if ( has_custom_logo() ) : ?>
            <?php the_custom_logo(); ?>
          <?php else : ?>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo/Logo_d.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" width="160" height="48">
          <?php endif; ?>
        </a>

        <?php
        if ( has_nav_menu( 'primary' ) ) :
          wp_nav_menu(
            array(
              'theme_location' => 'primary',
              'container'      => false,
              'menu_class'     => 'nav-menu',
              'menu_id'        => 'navMenu',
              'fallback_cb'    => false,
            )
          );
        else :
        ?>
          <ul class="nav-menu" id="navMenu">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link active"><?php esc_html_e( 'Home', 'estatein' ); ?></a></li>
            <li><a href="#about" class="nav-link"><?php esc_html_e( 'About Us', 'estatein' ); ?></a></li>
            <li><a href="#properties" class="nav-link"><?php esc_html_e( 'Properties', 'estatein' ); ?></a></li>
            <li><a href="#services" class="nav-link"><?php esc_html_e( 'Services', 'estatein' ); ?></a></li>
            <li class="mobile-only-nav-item"><a href="#contact" class="btn btn-primary btn-full"><?php esc_html_e( 'Contact Us', 'estatein' ); ?></a></li>
          </ul>
        <?php endif; ?>

        <div class="nav-actions">
          <a href="#contact" class="btn btn-secondary desktop-contact-btn"><?php esc_html_e( 'Contact Us', 'estatein' ); ?></a>
          <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="<?php esc_attr_e( 'Toggle navigation menu', 'estatein' ); ?>" aria-expanded="false">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="3" y1="6" x2="21" y2="6"></line>
              <line x1="3" y1="12" x2="21" y2="12"></line>
              <line x1="12" y1="18" x2="21" y2="18"></line>
            </svg>
          </button>
        </div>
      </nav>
    </div>
  </header>

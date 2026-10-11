<?php
/**
 * Main Index Fallback Template
 *
 * @package Estatein
 */

get_header();
?>

<main id="primary" class="site-main section-spacing">
  <div class="container">
    <?php if ( have_posts() ) : ?>
      <div class="section-header">
        <h1 class="section-title"><?php esc_html_e( 'Latest News & Updates', 'estatein' ); ?></h1>
      </div>
      <div class="properties-grid">
        <?php
        while ( have_posts() ) :
          the_post();
          ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'property-card' ); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="property-image-wrapper">
                <?php the_post_thumbnail( 'large', array( 'class' => 'property-image', 'loading' => 'lazy' ) ); ?>
              </div>
            <?php endif; ?>
            <div class="property-details">
              <h2 class="property-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <div class="property-desc">
                <?php the_excerpt(); ?>
              </div>
            </div>
            <div class="property-footer">
              <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php esc_html_e( 'Read Article', 'estatein' ); ?></a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
      <?php the_posts_navigation(); ?>
    <?php else : ?>
      <div class="section-header">
        <h1 class="section-title"><?php esc_html_e( 'Nothing Found', 'estatein' ); ?></h1>
        <p class="section-subtitle"><?php esc_html_e( 'It seems we cannot find what you are looking for.', 'estatein' ); ?></p>
      </div>
    <?php endif; ?>
  </div>
</main>

<?php
get_footer();

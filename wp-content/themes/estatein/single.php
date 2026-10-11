<?php
/**
 * Single Post & Property Template
 *
 * @package Estatein
 */

get_header();
?>

<main id="primary" class="site-main section-spacing">
  <div class="container">
    <?php while ( have_posts() ) : the_post(); 
      $price = estatein_get_meta( get_the_ID(), 'property_price', '_property_price', '' );
      $beds  = estatein_get_meta( get_the_ID(), 'property_beds', '_property_beds', '' );
      $baths = estatein_get_meta( get_the_ID(), 'property_baths', '_property_baths', '' );
      $type  = estatein_get_meta( get_the_ID(), 'property_type', '_property_type', '' );
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class( 'single-property-article' ); ?>>
        <header class="section-header">
          <div class="section-header-content">
            <h1 class="section-title"><?php the_title(); ?></h1>
            <?php if ( $price ) : ?>
              <p class="section-subtitle" style="color: var(--purple-60); font-weight: 700; font-size: 24px;">
                <?php echo esc_html( $price ); ?>
              </p>
            <?php endif; ?>
          </div>
          <a href="<?php echo esc_url( home_url( '/#properties' ) ); ?>" class="btn btn-secondary">
            &larr; <?php esc_html_e( 'Back to Listings', 'estatein' ); ?>
          </a>
        </header>

        <?php if ( has_post_thumbnail() ) : ?>
          <div class="single-property-media" style="margin-bottom: 40px; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--grey-15);">
            <?php the_post_thumbnail( 'full', array( 'style' => 'width: 100%; height: auto; max-height: 560px; object-fit: cover;' ) ); ?>
          </div>
        <?php endif; ?>

        <?php if ( $beds || $baths || $type ) : ?>
          <div class="property-tags" style="margin-bottom: 32px; display: flex; gap: 12px; flex-wrap: wrap;">
            <?php if ( $beds ) : ?>
              <span class="tag-badge"><?php echo esc_html( $beds ); ?></span>
            <?php endif; ?>
            <?php if ( $baths ) : ?>
              <span class="tag-badge"><?php echo esc_html( $baths ); ?></span>
            <?php endif; ?>
            <?php if ( $type ) : ?>
              <span class="tag-badge"><?php echo esc_html( $type ); ?></span>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <div class="property-body" style="color: var(--grey-60); font-size: 16px; line-height: 1.8;">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
</main>

<?php
get_footer();

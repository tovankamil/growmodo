<?php
/**
 * Default Page Template
 *
 * @package Estatein
 */

get_header();
?>

<main id="primary" class="site-main section-spacing">
  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class( 'page-article' ); ?>>
        <header class="section-header">
          <div class="section-header-content">
            <h1 class="section-title"><?php the_title(); ?></h1>
          </div>
        </header>

        <div class="page-content" style="color: var(--grey-60); font-size: 16px; line-height: 1.7;">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
</main>

<?php
get_footer();

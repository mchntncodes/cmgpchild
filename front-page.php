<?php
/**
 * Front Page Template
 * Shows the content of the page assigned as "Homepage" in Settings → Reading.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

<main id="primary" class="site-main cm-theme">
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="cm-container" style="padding-top: 24px; padding-bottom: 24px;">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>

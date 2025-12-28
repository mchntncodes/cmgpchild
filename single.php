<?php
/**
 * Single Post Template (clean + readable)
 * - Back link to /blog/
 * - Optional subtitle custom field: "subtitle"
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

<main id="primary" class="site-main cm-theme">
  <div class="cm-container" style="padding-top: 32px; padding-bottom: 48px;">
    <?php while ( have_posts() ) : the_post(); ?>

      <p style="margin:0 0 24px 0;">
        <a href="<?php echo esc_url( home_url('/blog/') ); ?>" style="text-decoration:none;">
          ← Back to Insights
        </a>
      </p>

      <article id="post-<?php the_ID(); ?>" <?php post_class('cm-single'); ?>>
        <header class="entry-header" style="margin-bottom: 24px;">
          <h1 class="entry-title" style="font-size: clamp(2rem, 4vw, 2.75rem); line-height: 1.15; margin: 0 0 12px 0;">
            <?php the_title(); ?>
          </h1>

          <?php $subtitle = get_post_meta( get_the_ID(), 'subtitle', true ); ?>
          <?php if ( $subtitle ) : ?>
            <p style="font-size: 1.15rem; color: var(--color-muted-foreground); margin: 0 0 14px 0;">
              <?php echo esc_html( $subtitle ); ?>
            </p>
          <?php endif; ?>

          <div class="entry-meta" style="display:flex; flex-wrap:wrap; gap:12px; color: var(--color-muted-foreground); font-size: 0.95rem;">
            <span><?php echo esc_html( get_the_date() ); ?></span>
            <span>•</span>
            <span><?php echo esc_html( ceil( str_word_count( wp_strip_all_tags( get_the_content() ) ) / 200 ) ); ?> min read</span>
            <span>•</span>
            <span><?php echo esc_html( get_the_author() ); ?></span>
          </div>
        </header>

        <div class="entry-content" style="font-size: 1.05rem; line-height: 1.8;">
          <?php the_content(); ?>
        </div>

        <footer class="entry-footer" style="margin-top: 28px; padding-top: 18px; border-top: 1px solid var(--color-border);">
          <?php the_tags('<div class="cm-tags"><strong>Tags:</strong> ', ', ', '</div>'); ?>
        </footer>
      </article>

      <?php if ( comments_open() || get_comments_number() ) : ?>
        <div style="margin-top: 28px;">
          <?php comments_template(); ?>
        </div>
      <?php endif; ?>

    <?php endwhile; ?>
  </div>
</main>

<?php get_footer(); ?>

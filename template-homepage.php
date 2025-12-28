<?php
/**
 * Template Name: Homepage
 * Description: Custom homepage template with modern dark theme
 */

get_header(); ?>

<main id="primary" class="site-main homepage-template">
  
  <?php // Hero Section ?>
  <section class="hero-section">
    <!-- Paste Hero HTML here -->
  </section>
  
  <?php // Stats Section ?>
  <section class="stats-section">
    <!-- Paste Stats HTML here -->
  </section>
  
  <?php // Services Section ?>
  <section class="services-section">
    <!-- Paste Services HTML here -->
  </section>
  
  <?php // Testimonials - Use WordPress Loop ?>
  <section class="testimonials-section">
    <?php
    $testimonials = new WP_Query(array(
      'post_type' => 'testimonial',
      'posts_per_page' => 3
    ));
    
    if ($testimonials->have_posts()) :
      while ($testimonials->have_posts()) : $testimonials->the_post();
        // Display testimonial
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
  </section>
  
  <?php // Blog Section - Latest Posts ?>
  <section class="blog-section">
    <?php
    $latest_posts = new WP_Query(array(
      'posts_per_page' => 3
    ));
    
    if ($latest_posts->have_posts()) :
      while ($latest_posts->have_posts()) : $latest_posts->the_post();
        get_template_part('template-parts/content', 'card');
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
  </section>
  
  <?php // CTA Section ?>
  <section class="cta-section">
    <!-- Paste CTA HTML here -->
  </section>

</main>

<?php get_footer(); ?>

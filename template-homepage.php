<?php
/**
 * Template Name: Homepage
 * Description: Custom homepage template with modern dark theme
 */

get_header(); ?>

<main id="primary" class="site-main homepage-template">
  
  <?php // Hero Section ?>
  <section class="hero-section">
    <!-- Hero Section - Add to Homepage using GeneratePress Elements or Page Builder -->
<section class="hero-section">
  <div class="hero-background">
    <div class="hero-pattern"></div>
    <div class="hero-glow"></div>
  </div>
  
  <div class="hero-content container">
    <div class="hero-badge">
      <span class="badge-icon">✦</span>
      <span>SAP Transformation Expert</span>
    </div>
    
    <h1 class="hero-title">
      Transform Your <span class="gradient-text">SAP Ecosystem</span> with AI-Powered Solutions
    </h1>
    
    <p class="hero-subtitle">
      Strategic consulting for S/4HANA migrations, BTP implementations, and AI integration. 
      Helping enterprises modernize their SAP landscape with proven methodologies.
    </p>
    
    <div class="hero-ctas">
      <a href="/contact" class="btn btn-primary btn-xl">
        <svg><!-- Calendar icon --></svg>
        Schedule a Strategy Call
      </a>
      <a href="/about" class="btn btn-secondary btn-xl">
        <svg><!-- Play icon --></svg>
        Watch Introduction
      </a>
    </div>
    
    <div class="trust-indicators">
      <p>Trusted by leading enterprises</p>
      <div class="trust-logos">
        <span>Fortune 500 Companies</span>
        <span>Global Enterprises</span>
        <span>SAP Partners</span>
      </div>
    </div>
  </div>
</section>
  </section>
  
  <?php // Stats Section ?>
  <section class="stats-section">
    <!-- Stats Section -->
<section class="stats-section">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item">
        <span class="stat-value">12+</span>
        <span class="stat-label">Years Experience</span>
      </div>
      <div class="stat-item">
        <span class="stat-value">100+</span>
        <span class="stat-label">Projects Delivered</span>
      </div>
      <div class="stat-item">
        <span class="stat-value">600+</span>
        <span class="stat-label">RICEFWs Managed</span>
      </div>
      <div class="stat-item">
        <span class="stat-value">50+</span>
        <span class="stat-label">Enterprise Clients</span>
      </div>
    </div>
  </div>
</section>
  </section>
  
  <?php // Services Section ?>
  <section class="services-section">
    <!-- Services Section -->
<section class="services-section">
  <div class="container">
    <div class="section-header">
      <h2>Strategic <span class="gradient-text">SAP Services</span></h2>
      <p>Comprehensive solutions designed to accelerate your digital transformation journey</p>
    </div>
    
    <div class="services-grid">
      <!-- Service Card 1 -->
      <div class="service-card">
        <div class="service-icon">
          <svg><!-- Icon --></svg>
        </div>
        <h3>S/4HANA Transformation</h3>
        <p>End-to-end guidance for your S/4HANA journey, from assessment to go-live and beyond.</p>
      </div>
      
      <!-- Service Card 2 -->
      <div class="service-card">
        <div class="service-icon">
          <svg><!-- Icon --></svg>
        </div>
        <h3>BTP Strategy & Implementation</h3>
        <p>Maximize your SAP Business Technology Platform investment with architectural excellence.</p>
      </div>
      
      <!-- Add more service cards... -->
    </div>
  </div>
</section>
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
    <!-- CTA Section -->
<section class="cta-section">
  <div class="cta-background">
    <div class="cta-pattern"></div>
    <div class="cta-glow"></div>
  </div>
  
  <div class="container cta-content">
    <h2>Ready to Accelerate Your <span class="gradient-text">SAP Transformation?</span></h2>
    <p>Let's discuss how I can help you navigate S/4HANA, leverage BTP, and integrate AI to drive real business outcomes.</p>
    
    <div class="cta-buttons">
      <a href="/contact" class="btn btn-primary btn-xl">
        <svg><!-- Calendar icon --></svg>
        Schedule a Free Consultation
      </a>
      <a href="/services" class="btn btn-secondary btn-xl">
        Explore Services
        <svg><!-- Arrow icon --></svg>
      </a>
    </div>
    
    <p class="cta-note">No commitment required • 30-minute strategic conversation • Actionable insights guaranteed</p>
  </div>
</section>
  </section>

</main>

<?php get_footer(); ?>

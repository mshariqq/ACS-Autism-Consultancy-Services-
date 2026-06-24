<?php get_header(); ?>

<section class="page-hero">
  <div class="page-hero-bg"></div>
  <div class="page-hero-glow"></div>
  <div class="page-hero-inner">
    <h1 class="page-title">Page Not <em>Found</em></h1>
    <p class="page-subtitle">The page you're looking for doesn't exist or has been moved. Let us help you find what you need.</p>
    <div class="hero-actions" style="margin-top:32px">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">Return Home</a>
      <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-ghost">Contact Us</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>

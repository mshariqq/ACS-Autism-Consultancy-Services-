<?php
/**
 * Template Name: Video Library
 */
get_header(); ?>
<section class="page-hero">
  <div class="page-hero-bg"></div>
  <div class="page-hero-glow"></div>
  <div class="page-hero-inner">
    <div class="breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 2l4 4-4 4"/></svg>
      <span>Video Library</span>
    </div>
    <h1 class="page-title">Video <em>Library</em></h1>
    <p class="page-subtitle">Short, informative videos on ABA and Autism Spectrum Disorder for parents, educators, and professionals.</p>
  </div>
</section>
<section class="vl-intro-section" style="background:var(--cream);padding:100px 0">
  <div class="container">
    <div class="vl-intro-inner reveal" style="max-width:700px;margin:0 auto;text-align:center">
      <div class="eyebrow" style="justify-content:center">Educational Resources</div>
      <h2 class="section-title">Learn Through <em>Video</em></h2>
      <p class="vl-intro-text" style="font-family:var(--sans);font-size:17px;font-weight:300;color:#4a5a72;line-height:1.85">Our educational video library features short, informative videos on key topics in Applied Behaviour Analysis (ABA) and Autism Spectrum Disorder. New videos are added regularly. Each video is approximately 10 minutes long and designed for parents, educators, and professionals.</p>
    </div>
  </div>
</section>
<section class="vl-grid-section" style="padding:100px 0;background:var(--white)">
  <div class="container">
    <div class="vl-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:28px">
      <?php
      $videos = array(
        array('Introduction to ABA', 'An overview of Applied Behaviour Analysis and how it supports individuals with Autism Spectrum Disorder.', 'https://img.youtube.com/vi/placeholder1/maxresdefault.jpg'),
        array('Understanding Autism Spectrum Disorder', 'Learn about the key characteristics of ASD and how they affect learning and development.', 'https://img.youtube.com/vi/placeholder2/maxresdefault.jpg'),
        array('The Verbal Behaviour Approach', 'An introduction to the Verbal Behaviour framework and its application in ABA programmes.', 'https://img.youtube.com/vi/placeholder3/maxresdefault.jpg'),
        array('Positive Behaviour Support', 'Evidence-based strategies for understanding and addressing challenging behaviour.', 'https://img.youtube.com/vi/placeholder4/maxresdefault.jpg'),
        array('Teaching Communication Skills', 'Practical strategies for supporting communication development using ABA principles.', 'https://img.youtube.com/vi/placeholder5/maxresdefault.jpg'),
        array("Parent's Guide to ABA", 'An introduction for parents and caregivers on how ABA can support your child at home.', 'https://img.youtube.com/vi/placeholder6/maxresdefault.jpg'),
        array('Intensive Teaching (DTT)', 'Learn about Discrete Trial Teaching and how it builds foundational skills.', 'https://img.youtube.com/vi/placeholder7/maxresdefault.jpg'),
        array('Incidental Teaching (NET)', 'Discover how natural environment teaching uses everyday situations to promote learning.', 'https://img.youtube.com/vi/placeholder8/maxresdefault.jpg'),
        array('Data Collection in ABA', 'An overview of how data is used to track progress and guide decision-making in ABA programmes.', 'https://img.youtube.com/vi/placeholder9/maxresdefault.jpg'),
      );
      foreach ($videos as $i => $v) {
        $delay = $i % 4 === 0 ? '' : ' reveal-delay-' . ($i % 4);
      ?>
      <div class="vl-card reveal<?php echo $delay; ?>" style="border:1px solid rgba(8,28,64,0.08);border-radius:16px;overflow:hidden;transition:all 0.3s ease;background:var(--white)">
        <div class="vl-card-thumb" style="position:relative;aspect-ratio:16/9;overflow:hidden">
          <div class="vl-card-thumb-bg" style="width:100%;height:100%;background:var(--cream-dark);display:flex;align-items:center;justify-content:center">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polygon points="10,8 16,12 10,16" fill="var(--gold)"/></svg>
          </div>
          <div class="vl-card-duration" style="position:absolute;bottom:12px;right:12px;background:rgba(8,28,64,0.85);color:var(--white);padding:4px 10px;border-radius:6px;font-family:var(--sans);font-size:12px;font-weight:500">10:00</div>
        </div>
        <div class="vl-card-body" style="padding:24px 28px 28px">
          <h3 style="font-family:var(--serif);font-size:20px;font-weight:600;color:var(--navy);margin-bottom:8px;line-height:1.25"><?php echo esc_html($v[0]); ?></h3>
          <p style="font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82;line-height:1.7"><?php echo esc_html($v[1]); ?></p>
          <div style="margin-top:16px">
            <span style="display:inline-flex;align-items:center;gap:6px;font-family:var(--sans);font-size:13px;font-weight:500;color:var(--navy);text-decoration:none">Watch Video <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px"><path d="M3 8h10M9 4l4 4-4 4"/></svg></span>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<section class="vl-coming-section" style="background:var(--cream);padding:60px 0">
  <div class="container">
    <div class="vl-coming-inner reveal" style="text-align:center">
      <div class="eyebrow" style="justify-content:center">Coming Soon</div>
      <h3 style="font-family:var(--serif);font-size:24px;font-weight:600;color:var(--navy);margin-bottom:8px">More Videos <em>On the Way</em></h3>
      <p style="font-family:var(--sans);font-size:16px;font-weight:300;color:#5a6b82;line-height:1.7;max-width:500px;margin:0 auto">We are working on expanding our video library with new content covering ABA fundamentals, parent tips, and professional development topics. Check back regularly for updates.</p>
    </div>
  </div>
</section>
<section class="vl-cta-section" style="background:var(--navy-deep);padding:100px 0">
  <div class="container">
    <div class="vl-cta-inner reveal" style="max-width:680px;margin:0 auto;text-align:center">
      <div class="eyebrow" style="color:var(--gold);justify-content:center">Stay Connected</div>
      <h2 class="section-title" style="color:var(--white)">Have a <em style="color:var(--gold-light)">Question?</em></h2>
      <p style="font-family:var(--sans);font-size:16px;font-weight:300;color:rgba(255,255,255,0.55);line-height:1.75;margin-bottom:36px">If you have any questions about our video content or would like to suggest a topic for a future video, we'd love to hear from you.</p>
      <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-primary" style="display:inline-flex;margin:0 auto">Contact Us<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
    </div>
  </div>
</section>
<?php get_footer(); ?>

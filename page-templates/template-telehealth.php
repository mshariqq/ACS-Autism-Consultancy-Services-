<?php
/**
 * Template Name: TeleHealth ABA Programmes
 */
get_header(); ?>
<section class="page-hero">
  <div class="page-hero-bg"></div>
  <div class="page-hero-glow"></div>
  <div class="page-hero-inner">
    <div class="breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 2l4 4-4 4"/></svg>
      <a href="<?php echo esc_url(home_url('/about-us/')); ?>">Services</a>
      <svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 2l4 4-4 4"/></svg>
      <span>TeleHealth ABA</span>
    </div>
    <h1 class="page-title">TeleHealth <em>ABA Programmes</em></h1>
    <p class="page-subtitle">Expert ABA support delivered remotely — accessible anywhere in the world without compromising quality.</p>
  </div>
</section>
<section class="svc-overview-section" style="background:var(--cream);padding:100px 0">
  <div class="container">
    <div class="svc-overview-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center">
      <div class="svc-overview-content reveal">
        <div class="eyebrow">Our Approach</div>
        <h2 class="section-title">Remote <em>Excellence</em></h2>
        <p class="svc-overview-body" style="font-family:var(--sans);font-size:16px;font-weight:300;color:#4a5a72;line-height:1.85;margin-bottom:20px">TeleHealth ABA brings the same high-quality, evidence-based Applied Behaviour Analysis services directly to your home via secure video conferencing. Our remote services are designed for families who may not have local access to qualified ABA professionals, or who prefer the convenience of home-based remote support.</p>
        <p class="svc-overview-body" style="font-family:var(--sans);font-size:16px;font-weight:300;color:#4a5a72;line-height:1.85;margin-bottom:20px">Through live observation, real-time feedback, and structured consultation, we work together with you to develop and implement an effective ABA programme — no matter where you are in the world.</p>
      </div>
      <div class="svc-overview-visual reveal reveal-delay-2" style="position:relative">
        <div class="svc-overview-image-frame" style="border-radius:20px;overflow:hidden;aspect-ratio:4/3"><img src="https://darkseagreen-stinkbug-382389.hostingersite.com/wp-content/uploads/2026/06/TeleHealth-ABA-Programmes-scaled.webp" alt="TeleHealth session" style="width:100%;height:100%;object-fit:cover"></div>
        <div class="svc-overview-badge" style="position:absolute;bottom:-20px;right:-20px;background:var(--navy);border-radius:14px;padding:20px 24px;display:flex;align-items:center;gap:14px"><div class="svc-overview-badge-icon" style="width:40px;height:40px;border-radius:10px;background:rgba(201,168,76,0.12);display:flex;align-items:center;justify-content:center;flex-shrink:0"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;color:var(--gold)"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><div class="svc-overview-badge-text"><strong style="display:block;font-family:var(--sans);font-size:15px;font-weight:600;color:var(--white)">Remote Support</strong><span style="font-family:var(--sans);font-size:11.5px;color:var(--text-muted)">Live, interactive sessions</span></div></div>
      </div>
    </div>
  </div>
</section>
<section class="telehealth-stats" style="background:var(--navy-deep);padding:80px 0;position:relative;overflow:hidden">
  <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(201,168,76,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(201,168,76,0.03) 1px,transparent 1px);background-size:80px 80px"></div>
  <div class="container" style="position:relative;z-index:2">
    <div class="telehealth-stats-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:32px">
      <div class="telehealth-stat reveal" style="text-align:center"><div style="font-family:var(--serif);font-size:clamp(36px,4vw,52px);font-weight:600;color:var(--gold);line-height:1;margin-bottom:8px">Worldwide</div><div style="font-family:var(--sans);font-size:13px;font-weight:500;color:rgba(255,255,255,0.55);letter-spacing:0.05em;text-transform:uppercase">Service Reach</div></div>
      <div class="telehealth-stat reveal reveal-delay-1" style="text-align:center"><div style="font-family:var(--serif);font-size:clamp(36px,4vw,52px);font-weight:600;color:var(--gold);line-height:1;margin-bottom:8px">BCBA-D</div><div style="font-family:var(--sans);font-size:13px;font-weight:500;color:rgba(255,255,255,0.55);letter-spacing:0.05em;text-transform:uppercase">Board Certified Leadership</div></div>
      <div class="telehealth-stat reveal reveal-delay-2" style="text-align:center"><div style="font-family:var(--serif);font-size:clamp(36px,4vw,52px);font-weight:600;color:var(--gold);line-height:1;margin-bottom:8px">No Travel</div><div style="font-family:var(--sans);font-size:13px;font-weight:500;color:rgba(255,255,255,0.55);letter-spacing:0.05em;text-transform:uppercase">Convenient from home</div></div>
    </div>
  </div>
</section>
<section class="svc-included-section" style="background:var(--white);padding:100px 0">
  <div class="container">
    <div class="services-header reveal">
      <div class="eyebrow">What's Included</div>
      <h2 class="section-title">TeleHealth <em>Services</em></h2>
      <p class="section-lead">Comprehensive remote ABA support — structured, interactive, and tailored to your needs.</p>
    </div>
    <div class="svc-included-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px">
      <?php
      $items = array(
        array('Initial Remote Consultation', 'Comprehensive online assessment to understand needs and establish baseline goals.', '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:24px;height:24px"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2M9 12l2 2 4-4"/></svg>'),
        array('Live Supervision Sessions', 'Regular live video sessions for observation, feedback, and programme adjustment.', '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:24px;height:24px"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>'),
        array('Parent & Staff Training', 'Remote training sessions for parents, carers, and school staff.', '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:24px;height:24px"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>'),
        array('Individualised Programme Design', 'Personalised treatment plans with clear goals, developed remotely.', '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:24px;height:24px"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>'),
        array('Data Analysis & Progress Reports', 'Continuous monitoring of child progress with detailed reports.', '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:24px;height:24px"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>'),
        array('Ongoing Email & Phone Support', 'Access to your BCBA-D consultant between sessions for advice and support.', '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:24px;height:24px"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.22 1.18 2 2 0 012.22 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.08 6.08l1.27-.66a2 2 0 012.11.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>'),
      );
      foreach ($items as $i => $item) {
        $delay = $i % 4 === 0 ? '' : ' reveal-delay-' . ($i % 4);
      ?>
      <div class="svc-included-card reveal<?php echo $delay; ?>" style="border:1px solid rgba(8,28,64,0.08);border-radius:16px;padding:36px 32px;transition:all 0.3s ease">
        <div class="svc-included-card-icon" style="width:52px;height:52px;border-radius:12px;background:var(--cream);display:flex;align-items:center;justify-content:center;margin-bottom:24px"><?php echo $item[2]; ?></div>
        <h3 style="font-family:var(--serif);font-size:20px;font-weight:600;color:var(--navy);margin-bottom:12px;line-height:1.25"><?php echo esc_html($item[0]); ?></h3>
        <p style="font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82;line-height:1.7"><?php echo esc_html($item[1]); ?></p>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<section class="telehealth-cta-section" style="background:var(--navy-deep);padding:100px 0">
  <div class="container">
    <div class="telehealth-cta-inner reveal" style="max-width:680px;margin:0 auto;text-align:center">
      <div class="eyebrow" style="color:var(--gold);justify-content:center">Get in Touch</div>
      <h2 class="section-title" style="color:var(--white)">Start Your <em style="color:var(--gold-light)">TeleHealth Journey</em></h2>
      <p style="font-family:var(--sans);font-size:16px;font-weight:300;color:rgba(255,255,255,0.55);line-height:1.75;margin-bottom:36px">Contact us to learn more about how TeleHealth ABA can support your child — wherever you are in the world.</p>
      <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-primary" style="display:inline-flex;margin:0 auto">Get Started Today<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
    </div>
  </div>
</section>
<?php get_footer(); ?>

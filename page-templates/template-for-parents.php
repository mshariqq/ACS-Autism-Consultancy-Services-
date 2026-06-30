<?php
/**
 * Template Name: For Parents
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
      <span>For Parents</span>
    </div>
    <h1 class="page-title">For <em>Parents</em></h1>
    <p class="page-subtitle">Guidance, tools, and ongoing support to help families understand ABA and implement it effectively at home.</p>
  </div>
</section>

<section class="svc-overview-section" style="background:var(--cream);padding:100px 0">
  <div class="container">
    <div class="svc-overview-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center">
      <div class="svc-overview-content reveal">
        <div class="eyebrow">Our Approach</div>
        <h2 class="section-title">Supporting <em>Families</em></h2>
        <p class="svc-overview-body" style="font-family:var(--sans);font-size:16.5px;font-weight:300;color:#4a5a72;line-height:1.85;margin-bottom:20px">Parents and caregivers play the most important role in a child's development. Our parent support services are designed to empower families with the knowledge, strategies, and confidence to support their child's progress.</p>
        <p class="svc-overview-body" style="font-family:var(--sans);font-size:16.5px;font-weight:300;color:#4a5a72;line-height:1.85;margin-bottom:20px">We provide practical guidance on everything from understanding ABA fundamentals to navigating the educational system, managing daily routines, and choosing the right support for your child.</p>
      </div>
      <div class="svc-overview-visual reveal reveal-delay-2" style="position:relative">
        <div class="svc-overview-image-frame" style="border-radius:20px;overflow:hidden;aspect-ratio:4/3"><img src="https://darkseagreen-stinkbug-382389.hostingersite.com/wp-content/uploads/2026/06/pexels-dziana-hasanbekava-8213246-scaled.webp" alt="Parent coaching" style="width:100%;height:100%;object-fit:cover"></div>
        <div class="svc-overview-badge" style="position:absolute;bottom:-20px;right:-20px;background:var(--navy);border-radius:14px;padding:20px 24px;display:flex;align-items:center;gap:14px"><div class="svc-overview-badge-icon" style="width:40px;height:40px;border-radius:10px;background:rgba(201,168,76,0.12);display:flex;align-items:center;justify-content:center;flex-shrink:0"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;color:var(--gold)"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg></div><div class="svc-overview-badge-text"><strong style="display:block;font-family:var(--sans);font-size:15px;font-weight:600;color:var(--white)">Family-Centred</strong><span style="font-family:var(--sans);font-size:11.5px;color:var(--text-muted)">Empowering parents and caregivers</span></div></div>
      </div>
    </div>
  </div>
</section>

<section class="svc-included-section" style="background:var(--white);padding:100px 0">
  <div class="container">
    <div class="services-header reveal">
      <div class="eyebrow">What's Included</div>
      <h2 class="section-title">Parent <em>Support Services</em></h2>
      <p class="section-lead">Comprehensive support designed to help parents and caregivers navigate their child's autism journey with confidence.</p>
    </div>
    <div class="svc-included-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px">
      <?php
      $items = array(
        array('Initial Parent Consultation', 'Comprehensive needs assessment to understand your family\'s unique situation and goals for your child.', '<path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2M9 12l2 2 4-4"/>'),
        array('ABA Fundamentals Training', 'Foundational ABA training for parents and carers, providing a solid understanding of behavioural principles and strategies.', '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>'),
        array('Everyday Routine Strategies', 'Practical strategies for managing daily routines, transitions, and challenging situations in the home and community.', '<path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/>'),
        array('Communication & Language', 'Guidance on supporting communication and language development using evidence-based ABA techniques.', '<path d="M8 7h8M8 12h8M8 17h5"/><rect x="3" y="3" width="18" height="18" rx="2"/>'),
        array('Sibling & Family Support', 'Support for siblings and wider family members to foster understanding and create a supportive home environment.', '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/>'),
        array('EHCP & Education Guidance', 'Help navigating the Education, Health and Care Plan (EHCP) process and educational system in the UK.', '<path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>'),
        array('Therapist & Programme Advice', 'Expert advice on choosing appropriate therapists, programmes, and interventions for your child\'s needs.', '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>'),
        array('Ongoing Check-Ins', 'Regular check-in sessions to review progress, address concerns, and adjust strategies as your child develops.', '<path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path d="M12 6v6l4 2"/>'),
      );
      foreach ($items as $i => $item) {
        $delay = $i % 4 === 0 ? '' : ' reveal-delay-' . ($i % 4);
      ?>
      <div class="svc-included-card reveal<?php echo $delay; ?>" style="border:1px solid rgba(8,28,64,0.08);border-radius:16px;padding:36px 32px;transition:all 0.3s ease;cursor:default;position:relative;overflow:hidden">
        <div class="svc-included-card-icon" style="width:52px;height:52px;border-radius:12px;background:var(--cream);display:flex;align-items:center;justify-content:center;margin-bottom:24px"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:24px;height:24px;color:var(--navy)"><?php echo $item[2]; ?></svg></div>
        <h3 style="font-family:var(--serif);font-size:22px;font-weight:600;color:var(--navy);margin-bottom:12px;line-height:1.25"><?php echo esc_html($item[0]); ?></h3>
        <p style="font-family:var(--sans);font-size:14.5px;font-weight:300;color:#5a6b82;line-height:1.7"><?php echo esc_html($item[1]); ?></p>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<section class="svc-delivery-section" style="background:var(--cream);padding:100px 0">
  <div class="container">
    <div class="svc-delivery-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center">
      <div class="svc-delivery-content reveal">
        <div class="eyebrow">Get Started</div>
        <h2 class="section-title">Flexible <em>Service Delivery</em></h2>
        <p class="svc-delivery-body" style="font-family:var(--sans);font-size:16px;font-weight:300;color:#4a5a72;line-height:1.8;margin-bottom:24px">Our parent support services are available through multiple delivery modes to suit every family's needs.</p>
        <div class="svc-delivery-modes" style="display:flex;flex-direction:column;gap:16px">
          <div class="svc-delivery-mode-card" style="display:flex;align-items:center;gap:20px;padding:22px 24px;border-radius:12px;background:var(--white);border:1px solid rgba(8,28,64,0.08)"><div class="svc-delivery-mode-icon" style="width:44px;height:44px;border-radius:10px;background:rgba(8,28,64,0.06);display:flex;align-items:center;justify-content:center;flex-shrink:0"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:22px;height:22px;color:var(--navy)"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg></div><div class="svc-delivery-mode-text"><strong style="display:block;font-family:var(--sans);font-size:15px;font-weight:600;color:var(--navy);margin-bottom:3px">In-Person</strong><span style="font-family:var(--sans);font-size:13.5px;font-weight:300;color:#5a6b82">Face-to-face support in your home</span></div></div>
          <div class="svc-delivery-mode-card" style="display:flex;align-items:center;gap:20px;padding:22px 24px;border-radius:12px;background:var(--white);border:1px solid rgba(8,28,64,0.08)"><div class="svc-delivery-mode-icon" style="width:44px;height:44px;border-radius:10px;background:rgba(8,28,64,0.06);display:flex;align-items:center;justify-content:center;flex-shrink:0"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:22px;height:22px;color:var(--navy)"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><div class="svc-delivery-mode-text"><strong style="display:block;font-family:var(--sans);font-size:15px;font-weight:600;color:var(--navy);margin-bottom:3px">TeleHealth</strong><span style="font-family:var(--sans);font-size:13.5px;font-weight:300;color:#5a6b82">Remote support from home</span></div></div>
          <div class="svc-delivery-mode-card" style="display:flex;align-items:center;gap:20px;padding:22px 24px;border-radius:12px;background:var(--white);border:1px solid rgba(8,28,64,0.08)"><div class="svc-delivery-mode-icon" style="width:44px;height:44px;border-radius:10px;background:rgba(8,28,64,0.06);display:flex;align-items:center;justify-content:center;flex-shrink:0"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:22px;height:22px;color:var(--navy)"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg></div><div class="svc-delivery-mode-text"><strong style="display:block;font-family:var(--sans);font-size:15px;font-weight:600;color:var(--navy);margin-bottom:3px">Global</strong><span style="font-family:var(--sans);font-size:13.5px;font-weight:300;color:#5a6b82">Serving families worldwide</span></div></div>
        </div>
      </div>
      <div class="svc-delivery-cta reveal reveal-delay-2">
        <div class="svc-delivery-cta-card" style="background:var(--white);border-radius:16px;padding:40px 36px;border:1px solid rgba(8,28,64,0.08);text-align:center">
          <div class="svc-delivery-cta-icon" style="width:56px;height:56px;border-radius:14px;background:rgba(201,168,76,0.12);display:flex;align-items:center;justify-content:center;margin:0 auto 20px"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:26px;height:26px;color:var(--gold)"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.22 1.18 2 2 0 012.22 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.08 6.08l1.27-.66a2 2 0 012.11.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
          <h3 style="font-family:var(--serif);font-size:24px;font-weight:600;color:var(--navy);margin-bottom:12px">Get Started</h3>
          <p style="font-family:var(--sans);font-size:15px;font-weight:300;color:#5a6b82;line-height:1.7;margin-bottom:20px">Contact us to discuss how this service can be tailored to your needs.</p>
          <a href="tel:+447961663116" style="display:block;font-family:var(--sans);font-size:18px;font-weight:600;color:var(--navy);text-decoration:none;margin-bottom:20px">+44 (0) 79 6166 3116</a>
          <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-primary" style="display:inline-flex">Enquire Now<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="mission-banner">
  <div class="mission-bg"></div>
  <div class="mission-overlay"></div>
  <div class="container">
    <div class="mission-inner reveal">
      <blockquote>"Our mission is to apply science in practical, everyday ways to improve the lives of individuals with <em>Autism Spectrum Disorder</em> and other developmental disabilities — delivering high-quality, tailored services with a strong focus on <em>Applied Behaviour Analysis</em>."</blockquote>
      <div class="mission-divider"></div>
      <cite>ACS Mission Statement</cite>
    </div>
  </div>
</div>

<?php get_footer(); ?>

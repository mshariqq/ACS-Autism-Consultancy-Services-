<?php
/**
 * Template Name: School-Based ABA Programmes
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
      <span>School-Based ABA</span>
    </div>
    <h1 class="page-title">School-Based <em>ABA Programmes</em></h1>
    <p class="page-subtitle">Collaborative ABA programmes supporting children with ASD and related conditions within their educational settings.</p>
  </div>
</section>
<section class="svc-overview-section" style="background:var(--cream);padding:100px 0">
  <div class="container">
    <div class="svc-overview-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center">
      <div class="svc-overview-content reveal">
        <div class="eyebrow">Our Approach</div>
        <h2 class="section-title">Supporting <em>Educational Success</em></h2>
        <p class="svc-overview-body" style="font-family:var(--sans);font-size:16px;font-weight:300;color:#4a5a72;line-height:1.85;margin-bottom:20px">Across education today, more children with special educational needs (SEN) are thriving within mainstream school environments, with the right support in place. The ambition of SEN and Disability Division is that every child with SEN reaches their full potential in whichever learning environment they may be.</p>
        <p class="svc-overview-body" style="font-family:var(--sans);font-size:16px;font-weight:300;color:#4a5a72;line-height:1.85;margin-bottom:20px">We are committed to this goal. Our school-based ABA programmes provide collaborative, evidence-based support designed to help children succeed in the classroom, build meaningful relationships with peers, and access the full curriculum.</p>
        <p class="svc-overview-body" style="font-family:var(--sans);font-size:16px;font-weight:300;color:#4a5a72;line-height:1.85;margin-bottom:20px">We work closely with school staff, SENCOs, and teaching assistants to ensure strategies are seamlessly integrated into the school day — creating a consistent approach that benefits the child and the whole classroom.</p>
      </div>
      <div class="svc-overview-visual reveal reveal-delay-2" style="position:relative">
        <div class="svc-overview-image-frame" style="border-radius:20px;overflow:hidden;aspect-ratio:3/4"><img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=800&q=80&fit=crop" alt="School-based ABA session" style="width:100%;height:100%;object-fit:cover"></div>
        <div class="svc-overview-badge" style="position:absolute;bottom:-20px;right:-20px;background:var(--navy);border-radius:14px;padding:20px 24px;display:flex;align-items:center;gap:14px"><div class="svc-overview-badge-icon" style="width:40px;height:40px;border-radius:10px;background:rgba(201,168,76,0.12);display:flex;align-items:center;justify-content:center;flex-shrink:0"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;color:var(--gold)"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg></div><div class="svc-overview-badge-text"><strong style="display:block;font-family:var(--sans);font-size:15px;font-weight:600;color:var(--white)">School-Based Programmes</strong><span style="font-family:var(--sans);font-size:11.5px;color:var(--text-muted)">Collaborative ABA in education settings</span></div></div>
      </div>
    </div>
  </div>
</section>
<section class="svc-included-section" style="background:var(--white);padding:100px 0">
  <div class="container">
    <div class="services-header reveal">
      <div class="eyebrow">Service Components</div>
      <h2 class="section-title">What Our School-Based <em>Programmes Include</em></h2>
      <p class="section-lead">Tailored support designed to work within your school's existing structure, values, and curriculum.</p>
    </div>
    <div class="svc-included-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px">
      <?php
      $components = array(
        array('School & Classroom Assessment', 'Comprehensive observation and assessment to understand the child\'s needs within the educational context.', '<path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2M9 12l2 2 4-4"/>'),
        array('BCBA-D Programme Design & Supervision', 'Programme designed and overseen by a Board Certified Behaviour Analyst at Doctoral Level.', '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>'),
        array('Staff Training & Capacity Building', 'Training for teachers, SENCOs, and teaching assistants to build confidence and capability in ABA-informed strategies.', '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>'),
        array('Individualised Support Plans', 'Detailed support plans with clear, measurable goals aligned to the child\'s educational objectives.', '<path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/>'),
        array('Progress Monitoring & Reports', 'Ongoing data collection, analysis, and regular reports for schools and families.', '<path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path d="M12 6v6l4 2"/>'),
        array('Family-School Liaison', 'Strong communication between school, family, and the ACS team ensures everyone works together effectively.', '<path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/>'),
      );
      foreach ($components as $i => $c) {
        $delay = $i % 4 === 0 ? '' : ' reveal-delay-' . ($i % 4);
      ?>
      <div class="svc-included-card reveal<?php echo $delay; ?>" style="border:1px solid rgba(8,28,64,0.08);border-radius:16px;padding:36px 32px;transition:all 0.3s ease;position:relative;overflow:hidden">
        <div class="svc-included-card-icon" style="width:52px;height:52px;border-radius:12px;background:var(--cream);display:flex;align-items:center;justify-content:center;margin-bottom:24px"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:24px;height:24px;color:var(--navy)"><?php echo $c[2]; ?></svg></div>
        <h3 style="font-family:var(--serif);font-size:20px;font-weight:600;color:var(--navy);margin-bottom:12px;line-height:1.25"><?php echo esc_html($c[0]); ?></h3>
        <p style="font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82;line-height:1.7"><?php echo esc_html($c[1]); ?></p>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<section class="svc-delivery-section" style="background:var(--cream);padding:100px 0">
  <div class="container">
    <div class="svc-delivery-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center">
      <div class="svc-delivery-content reveal">
        <div class="eyebrow">Consultation</div>
        <h2 class="section-title">Enquire About <em>School-Based ABA</em></h2>
        <p class="svc-delivery-body" style="font-family:var(--sans);font-size:16px;font-weight:300;color:#4a5a72;line-height:1.8;margin-bottom:24px">ACS is always happy to hear from schools, local authorities and parents about how we can help. We'll set up an initial meeting to discuss the child, the school environment, and what support would be most beneficial.</p>
      </div>
      <div class="svc-delivery-cta reveal reveal-delay-2">
        <div class="svc-delivery-cta-card" style="background:var(--white);border-radius:16px;padding:40px 36px;border:1px solid rgba(8,28,64,0.08);text-align:center">
          <div class="svc-delivery-cta-icon" style="width:56px;height:56px;border-radius:14px;background:rgba(201,168,76,0.12);display:flex;align-items:center;justify-content:center;margin:0 auto 20px"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:26px;height:26px;color:var(--gold)"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.22 1.18 2 2 0 012.22 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.08 6.08l1.27-.66a2 2 0 012.11.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
          <h3 style="font-family:var(--serif);font-size:24px;font-weight:600;color:var(--navy);margin-bottom:12px">Get in Touch</h3>
          <p style="font-family:var(--sans);font-size:15px;font-weight:300;color:#5a6b82;line-height:1.7;margin-bottom:20px">Contact us to discuss how our school-based ABA programmes could support your school community.</p>
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

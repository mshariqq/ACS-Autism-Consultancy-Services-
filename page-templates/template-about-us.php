<?php
/**
 * Template Name: About Us
 */

get_header(); ?>

<section class="page-hero">
  <div class="page-hero-bg"></div>
  <div class="page-hero-glow"></div>
  <div class="page-hero-inner">
    <div class="breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 2l4 4-4 4"/></svg>
      <span>About Us</span>
    </div>
    <h1 class="page-title">About <em>ACS</em></h1>
    <p class="page-subtitle">Autism Consultancy Services Ltd — bringing science into everyday practice for over 28 years.</p>
  </div>
</section>

<section class="who-section" style="background:var(--cream);padding:100px 0">
  <div class="container">
    <div class="who-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center">
      <div class="who-content reveal">
        <div class="eyebrow">About ACS</div>
        <h2 class="section-title">Who <em>We Are</em></h2>
        <p class="who-body" style="font-family:var(--sans);font-size:16.5px;font-weight:300;color:#4a5a72;line-height:1.85;margin-bottom:20px">Autism Consultancy Services (ACS) Ltd is a specialist consultancy providing world-class <strong>Applied Behaviour Analysis (ABA)</strong> therapy, assessment, training, and supervision services to individuals with Autism Spectrum Disorder (ASD) and other developmental disabilities.</p>
        <p class="who-body" style="font-family:var(--sans);font-size:16.5px;font-weight:300;color:#4a5a72;line-height:1.85;margin-bottom:20px">Our services are delivered both in-person and via TeleHealth, making expert ABA support accessible across the UK, Europe, Australia, the Middle East, and many other countries worldwide.</p>
        <a href="<?php echo esc_url(home_url('/about-christos-and-associates/')); ?>" class="btn-navy">Meet Dr. Christos<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
      </div>
      <div class="who-visual reveal reveal-delay-2" style="position:relative">
        <div class="who-image-frame" style="border-radius:20px;overflow:hidden;aspect-ratio:4/3">
          <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=800&q=80&fit=crop" alt="ACS team" style="width:100%;height:100%;object-fit:cover">
        </div>
        <div class="who-badge" style="position:absolute;bottom:-20px;left:-20px;background:var(--navy);border-radius:14px;padding:20px 24px;display:flex;align-items:center;gap:14px;min-width:180px">
          <div class="who-badge-icon" style="width:40px;height:40px;border-radius:10px;background:rgba(201,168,76,0.12);display:flex;align-items:center;justify-content:center;flex-shrink:0"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;color:var(--gold)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
          <div class="who-badge-text"><strong style="display:block;font-family:var(--sans);font-size:15px;font-weight:600;color:var(--white)">Est. 2007</strong><span style="font-family:var(--sans);font-size:11.5px;color:var(--text-muted)">Over 28 years of excellence</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="values-section" style="background:var(--white);padding:100px 0">
  <div class="container">
    <div class="services-header reveal">
      <div class="eyebrow">Our Core Values</div>
      <h2 class="section-title">What <em>Drives Us</em></h2>
      <p class="section-lead">Every decision we make is guided by our commitment to science, compassion, and the individuals and families we serve.</p>
    </div>
    <div class="values-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px">
      <div class="value-card reveal" style="border:1px solid rgba(8,28,64,0.08);border-radius:16px;padding:36px 32px;position:relative;overflow:hidden;transition:all 0.3s ease;cursor:default">
        <div class="value-num" style="font-family:var(--serif);font-size:32px;font-weight:300;color:rgba(201,168,76,0.2);line-height:1;margin-bottom:8px">01</div>
        <div class="value-icon" style="width:48px;height:48px;border-radius:12px;background:var(--cream);display:flex;align-items:center;justify-content:center;margin-bottom:20px"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:22px;height:22px;color:var(--navy)"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
        <h3 style="font-family:var(--serif);font-size:20px;font-weight:600;color:var(--navy);margin-bottom:10px;line-height:1.25">Evidence-Based Practice</h3>
        <p style="font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82;line-height:1.7">Every intervention is grounded in peer-reviewed research and proven behavioural science — ensuring the highest standard of care.</p>
      </div>
      <div class="value-card reveal reveal-delay-1" style="border:1px solid rgba(8,28,64,0.08);border-radius:16px;padding:36px 32px;position:relative;overflow:hidden;transition:all 0.3s ease;cursor:default">
        <div class="value-num" style="font-family:var(--serif);font-size:32px;font-weight:300;color:rgba(201,168,76,0.2);line-height:1;margin-bottom:8px">02</div>
        <div class="value-icon" style="width:48px;height:48px;border-radius:12px;background:var(--cream);display:flex;align-items:center;justify-content:center;margin-bottom:20px"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:22px;height:22px;color:var(--navy)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <h3 style="font-family:var(--serif);font-size:20px;font-weight:600;color:var(--navy);margin-bottom:10px;line-height:1.25">Individualised Care</h3>
        <p style="font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82;line-height:1.7">No two individuals are the same. We tailor every programme to the unique strengths, needs, and goals of each person.</p>
      </div>
      <div class="value-card reveal reveal-delay-2" style="border:1px solid rgba(8,28,64,0.08);border-radius:16px;padding:36px 32px;position:relative;overflow:hidden;transition:all 0.3s ease;cursor:default">
        <div class="value-num" style="font-family:var(--serif);font-size:32px;font-weight:300;color:rgba(201,168,76,0.2);line-height:1;margin-bottom:8px">03</div>
        <div class="value-icon" style="width:48px;height:48px;border-radius:12px;background:var(--cream);display:flex;align-items:center;justify-content:center;margin-bottom:20px"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:22px;height:22px;color:var(--navy)"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg></div>
        <h3 style="font-family:var(--serif);font-size:20px;font-weight:600;color:var(--navy);margin-bottom:10px;line-height:1.25">Family-Centred Approach</h3>
        <p style="font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82;line-height:1.7">We work hand-in-hand with families, caregivers, and educators — because lasting change happens when everyone is involved.</p>
      </div>
      <div class="value-card reveal reveal-delay-3" style="border:1px solid rgba(8,28,64,0.08);border-radius:16px;padding:36px 32px;position:relative;overflow:hidden;transition:all 0.3s ease;cursor:default">
        <div class="value-num" style="font-family:var(--serif);font-size:32px;font-weight:300;color:rgba(201,168,76,0.2);line-height:1;margin-bottom:8px">04</div>
        <div class="value-icon" style="width:48px;height:48px;border-radius:12px;background:var(--cream);display:flex;align-items:center;justify-content:center;margin-bottom:20px"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:22px;height:22px;color:var(--navy)"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg></div>
        <h3 style="font-family:var(--serif);font-size:20px;font-weight:600;color:var(--navy);margin-bottom:10px;line-height:1.25">International Standards</h3>
        <p style="font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82;line-height:1.7">Our practice aligns with global regulatory frameworks, including BACB® and EABA® guidelines for behaviour analysis.</p>
      </div>
      <div class="value-card reveal reveal-delay-4" style="border:1px solid rgba(8,28,64,0.08);border-radius:16px;padding:36px 32px;position:relative;overflow:hidden;transition:all 0.3s ease;cursor:default">
        <div class="value-num" style="font-family:var(--serif);font-size:32px;font-weight:300;color:rgba(201,168,76,0.2);line-height:1;margin-bottom:8px">05</div>
        <div class="value-icon" style="width:48px;height:48px;border-radius:12px;background:var(--cream);display:flex;align-items:center;justify-content:center;margin-bottom:20px"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:22px;height:22px;color:var(--navy)"><path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></div>
        <h3 style="font-family:var(--serif);font-size:20px;font-weight:600;color:var(--navy);margin-bottom:10px;line-height:1.25">Ethical Excellence</h3>
        <p style="font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82;line-height:1.7">We uphold the highest ethical standards in everything we do — prioritising dignity, respect, and the well-being of every individual.</p>
      </div>
    </div>
  </div>
</section>

<section class="meet-section" style="background:var(--cream);padding:100px 0">
  <div class="container">
    <div class="meet-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center">
      <div class="meet-img-col reveal">
        <div class="meet-img-frame" style="border-radius:20px;overflow:hidden;aspect-ratio:3/4"><img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?w=800&q=80&fit=crop" alt="Dr. Christos Nikopoulos" style="width:100%;height:100%;object-fit:cover"></div>
      </div>
      <div class="meet-content reveal reveal-delay-2">
        <div class="eyebrow">Leadership</div>
        <h2 class="section-title">Meet <em>Dr. Christos Nikopoulos</em></h2>
        <p class="meet-body" style="font-family:var(--sans);font-size:16px;font-weight:300;color:#4a5a72;line-height:1.85;margin-bottom:20px">ACS is directed by <strong>Dr Christos Nikopoulos BCBA-D, GMBPsS, CSci, FHEA</strong> — former director of both the BACB® and EABA®, with more than 29 years of clinical and research excellence in autism and related developmental conditions.</p>
        <p class="meet-body" style="font-family:var(--sans);font-size:16px;font-weight:300;color:#4a5a72;line-height:1.85;margin-bottom:20px">His leadership ensures that every ACS programme meets the highest international standards of behaviour analysis, grounded in decades of hands-on clinical practice, academic teaching, and published research.</p>
        <a href="<?php echo esc_url(home_url('/about-christos-and-associates/')); ?>" class="btn-navy">Full Biography<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
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

<section class="about-cta-section" style="background:var(--navy-deep);padding:100px 0">
  <div class="container">
    <div class="about-cta-inner reveal" style="max-width:680px;margin:0 auto;text-align:center">
      <div class="eyebrow" style="color:var(--gold);justify-content:center">Get in Touch</div>
      <h2 class="section-title" style="text-align:center">Let's Start the <em>Conversation</em></h2>
      <p class="about-cta-text" style="font-family:var(--sans);font-size:16px;font-weight:300;color:rgba(255,255,255,0.55);line-height:1.75;margin-bottom:36px">Whether you're a family seeking support, a professional looking for training, or an organisation exploring partnership — we're here to help.</p>
      <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-primary" style="display:inline-flex;margin:0 auto">Contact Us Today<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
    </div>
  </div>
</section>

<?php get_footer(); ?>

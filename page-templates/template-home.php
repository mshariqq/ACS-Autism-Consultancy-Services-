<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

<!-- HERO -->
<section class="hero" id="hero">
  <div class="hero-bg-grid"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow2"></div>
  <div class="hero-shape hero-shape-1"></div>
  <div class="hero-shape hero-shape-2"></div>
  <div class="hero-shape hero-shape-3"></div>

  <div class="hero-inner">
    <div class="hero-left">
      <div class="hero-eyebrow hero-animate">World-Leading ABA Expertise</div>
      <h1 class="hero-animate hero-delay-1">Transforming Lives<br><em>Through Science</em></h1>
      <p class="hero-quote hero-animate hero-delay-2">"Hope Is A Waking Dream" — Aristotle</p>
      <p class="hero-desc hero-animate hero-delay-3">
        Autism Consultancy Services (ACS) delivers world-class ABA therapy, assessment, and training for individuals with Autism Spectrum Disorder — in-person and via TeleHealth across the UK, Europe, Middle East, and globally.
      </p>
      <div class="hero-actions hero-animate hero-delay-4">
        <a href="<?php echo esc_url(home_url('/assessment-and-evaluation/')); ?>" class="btn-primary">
          Explore Services
          <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-ghost">Book a Consultation</a>
      </div>
    </div>
    <div class="hero-right">
      <div class="hero-img-slider">
        <div class="hero-img-slide active">
          <div class="hero-float-tag">29+ Years of Excellence</div>
          <img src="https://darkseagreen-stinkbug-382389.hostingersite.com/wp-content/uploads/2026/06/Home-1-scaled.webp" alt="Child engaged in ABA learning activity" loading="lazy">
          <div class="hero-img-badge">
            <div class="hero-img-badge-name">Autism Consultancy Services</div>
            <div class="hero-img-badge-title">Evidence-Based ABA Since 2007</div>
            <div class="hero-img-badge-creds">BCBA-D Leadership · UK &amp; Global Reach · TeleHealth Available</div>
          </div>
        </div>
        <div class="hero-img-slide">
          <div class="hero-float-tag">UK &amp; Global Reach</div>
          <img src="https://darkseagreen-stinkbug-382389.hostingersite.com/wp-content/uploads/2026/06/Home-2-scaled.webp" alt="Therapy session with a child" loading="lazy">
          <div class="hero-img-badge">
            <div class="hero-img-badge-name">ACS Worldwide</div>
            <div class="hero-img-badge-title">In-Person &amp; TeleHealth</div>
            <div class="hero-img-badge-creds">UK · Europe · Middle East · Global</div>
          </div>
        </div>
        <div class="hero-img-slide">
          <div class="hero-float-tag">BCBA-D Leadership</div>
          <img src="https://darkseagreen-stinkbug-382389.hostingersite.com/wp-content/uploads/2026/06/Home-3-scaled.webp" alt="Professional consultation setting" loading="lazy">
          <div class="hero-img-badge">
            <div class="hero-img-badge-name">ACS Leadership</div>
            <div class="hero-img-badge-title">Dr Christos Nikopoulos BCBA-D</div>
            <div class="hero-img-badge-creds">29+ Years · BACB® &amp; EABA® Leadership</div>
          </div>
        </div>
      </div>
      <button class="hero-img-arrow hero-img-arrow-prev" aria-label="Previous image">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 18l-6-6 6-6"/></svg>
      </button>
      <button class="hero-img-arrow hero-img-arrow-next" aria-label="Next image">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
      </button>
      <div class="hero-img-dots">
        <button class="hero-img-dot active" aria-label="Image 1"></button>
        <button class="hero-img-dot" aria-label="Image 2"></button>
        <button class="hero-img-dot" aria-label="Image 3"></button>
      </div>
    </div>
  </div>
</section>

<!-- STATS -->
<section class="stats-section section">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-card reveal">
        <div class="stat-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        </div>
        <div class="stat-number">29+</div>
        <div class="stat-label">Years of Experience</div>
      </div>
      <div class="stat-card reveal reveal-delay-1">
        <div class="stat-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg>
        </div>
        <div class="stat-number">UK &amp; Global</div>
        <div class="stat-label">Service Reach</div>
      </div>
      <div class="stat-card reveal reveal-delay-2">
        <div class="stat-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div class="stat-number">BCBA-D</div>
        <div class="stat-label">Board Certified</div>
      </div>
      <div class="stat-card reveal reveal-delay-3">
        <div class="stat-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
        </div>
        <div class="stat-number">3</div>
        <div class="stat-label">Delivery Modes</div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="section services-section">
  <div class="container">
    <div class="services-header reveal">
      <div class="eyebrow">What We Offer</div>
      <h2 class="section-title">Comprehensive <em>ABA Programmes</em></h2>
      <p class="section-lead">Evidence-based support delivered by certified professionals across multiple settings — home, school, clinic, and online.</p>
    </div>
    <div class="services-grid">
      <div class="service-card reveal reveal-delay-1">
        <div class="service-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2M9 12l2 2 4-4"/></svg>
        </div>
        <h3>Assessment &amp; Evaluation</h3>
        <p>Comprehensive behavioural assessments to identify needs and design evidence-based ABA interventions with clear, measurable goals.</p>
        <a href="<?php echo esc_url(home_url('/assessment-and-evaluation/')); ?>" class="service-link">Learn More<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
      </div>
      <div class="service-card reveal reveal-delay-2">
        <div class="service-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
        </div>
        <h3>Training &amp; Workshops</h3>
        <p>Professional CPD training for therapists, educators, and organisations — building confidence and expertise in ABA practice.</p>
        <a href="<?php echo esc_url(home_url('/training-and-workshops/')); ?>" class="service-link">Learn More<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
      </div>
      <div class="service-card reveal reveal-delay-3">
        <div class="service-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg>
        </div>
        <h3>Home-Based ABA</h3>
        <p>Individualised ABA programmes delivered in the comfort and familiarity of your home — personalised to your child's unique needs.</p>
        <a href="<?php echo esc_url(home_url('/home-based-aba-programmes/')); ?>" class="service-link">Learn More<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
      </div>
      <div class="service-card reveal reveal-delay-1">
        <div class="service-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>
        </div>
        <h3>School-Based ABA</h3>
        <p>Collaborative programmes helping children with ASD thrive within their educational settings, fully aligned with the school team.</p>
        <a href="<?php echo esc_url(home_url('/school-based-aba-programmes/')); ?>" class="service-link">Learn More<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
      </div>
      <div class="service-card reveal reveal-delay-2">
        <div class="service-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
        </div>
        <h3>TeleHealth ABA</h3>
        <p>Expert ABA support delivered remotely — accessible anywhere in the UK, Europe, Middle East, and beyond.</p>
        <a href="<?php echo esc_url(home_url('/telehealth-aba-programmes/')); ?>" class="service-link">Learn More<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
      </div>
      <div class="service-card reveal reveal-delay-3">
        <div class="service-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
        </div>
        <h3>For Parents</h3>
        <p>Practical guidance and tools to help families understand ABA, support their child at home, and collaborate effectively with professionals.</p>
        <a href="<?php echo esc_url(home_url('/for-parents/')); ?>" class="service-link">Learn More<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
      </div>
    </div>
  </div>
</section>

<!-- WHY ACS -->
<section class="section why-acs-section">
  <div class="container">
    <div class="services-header reveal">
      <div class="eyebrow">Why ACS</div>
      <h2 class="section-title">Evidence-Based Care, <em>Global Reach</em></h2>
      <p class="section-lead">For over 29 years, ACS has been a trusted provider of ABA therapy — delivering science-backed, individualised support across the UK and around the world.</p>
    </div>
    <div class="why-acs-grid" style="display:grid;grid-template-columns:repeat(4,1fr);gap:24px;margin-top:48px">
      <div class="service-card reveal" style="cursor:default;text-align:center;padding:40px 24px">
        <div class="service-icon" style="margin:0 auto 20px"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:28px;height:28px"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <h3 style="font-family:var(--serif);font-size:20px;font-weight:600;color:var(--navy);margin-bottom:8px">BCBA-D Leadership</h3>
        <p style="font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82;line-height:1.7;margin:0">Directed by a Board Certified Behaviour Analyst with global regulatory leadership experience.</p>
      </div>
      <div class="service-card reveal reveal-delay-1" style="cursor:default;text-align:center;padding:40px 24px">
        <div class="service-icon" style="margin:0 auto 20px"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:28px;height:28px"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
        <h3 style="font-family:var(--serif);font-size:20px;font-weight:600;color:var(--navy);margin-bottom:8px">Evidence-Based Practice</h3>
        <p style="font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82;line-height:1.7;margin:0">Every programme is grounded in peer-reviewed research and proven behavioural science.</p>
      </div>
      <div class="service-card reveal reveal-delay-2" style="cursor:default;text-align:center;padding:40px 24px">
        <div class="service-icon" style="margin:0 auto 20px"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:28px;height:28px"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg></div>
        <h3 style="font-family:var(--serif);font-size:20px;font-weight:600;color:var(--navy);margin-bottom:8px">Three Delivery Modes</h3>
        <p style="font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82;line-height:1.7;margin:0">In-person home and school programmes, plus TeleHealth — reaching families wherever they are.</p>
      </div>
      <div class="service-card reveal reveal-delay-3" style="cursor:default;text-align:center;padding:40px 24px">
        <div class="service-icon" style="margin:0 auto 20px"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:28px;height:28px"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg></div>
        <h3 style="font-family:var(--serif);font-size:20px;font-weight:600;color:var(--navy);margin-bottom:8px">UK &amp; Global Reach</h3>
        <p style="font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82;line-height:1.7;margin:0">Serving families across the UK, Europe, Middle East, and beyond — in-person and online.</p>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT / LEADERSHIP -->
<section class="section about-section">
  <div class="container">
    <div class="about-grid">
      <div class="about-img-col reveal">
        <div class="about-img-frame">
          <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?w=800&q=80&fit=crop" alt="Dr. Christos Nikopoulos">
        </div>
        <div class="about-credentials">
          <div class="about-cred-item">
            <div class="about-cred-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
            <div class="about-cred-text"><strong>BCBA-D Certified</strong><span>Board Certified Behaviour Analyst</span></div>
          </div>
          <div class="about-cred-item">
            <div class="about-cred-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg></div>
            <div class="about-cred-text"><strong>UK &amp; Global Practice</strong><span>In-person &amp; TeleHealth worldwide</span></div>
          </div>
          <div class="about-cred-item">
            <div class="about-cred-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
            <div class="about-cred-text"><strong>Former BACB® Director</strong><span>European &amp; global leadership</span></div>
          </div>
        </div>
      </div>
      <div class="about-content reveal reveal-delay-2">
        <div class="eyebrow">Meet Our Founder</div>
        <h2 class="section-title">World-Class Leadership in <em>Behaviour Analysis</em></h2>
        <p class="about-body">ACS is directed by <strong>Dr Christos Nikopoulos BCBA-D, GMBPsS, CSci, FHEA</strong> — former director of both the BACB® and EABA®, with more than 29 years of clinical and research excellence in autism and related developmental conditions.</p>
        <p class="about-body">ACS brings science into everyday practice, providing high-standard, individualised therapy and education programmes focused on Verbal Behaviour — helping every individual reach their full potential.</p>
        <div class="about-quote"><p>"To bring science into everyday practice — enhancing the quality of life of individuals with Autism Spectrum Disorder and other developmental disabilities."</p></div>
        <div class="about-tags">
          <span class="tag">Applied Behaviour Analysis</span>
          <span class="tag">Verbal Behaviour</span>
          <span class="tag">Evidence-Based Practice</span>
          <span class="tag">Autism Spectrum Disorder</span>
        </div>
        <a href="<?php echo esc_url(home_url('/about-christos-and-associates/')); ?>" class="btn-navy">Full Biography<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
      </div>
    </div>
  </div>
</section>

<!-- SCIENCE STORY -->
<section class="scroll-story" id="scienceStory">
  <div class="scroll-story-track">
    <div class="scroll-bg">
      <div class="scroll-bg-slide active" style="background-image:url('https://images.unsplash.com/photo-1579165466741-7f35e4755660?w=1600&q=80&fit=crop')"></div>
      <div class="scroll-bg-slide" style="background-image:url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=1600&q=80&fit=crop')"></div>
      <div class="scroll-bg-slide" style="background-image:url('https://images.unsplash.com/photo-1577896851231-70acf6940f1b?w=1600&q=80&fit=crop')"></div>
      <div class="scroll-bg-overlay"></div>
    </div>
    <div class="scroll-tab-bar">
      <div class="scroll-tab-pills">
        <button class="scroll-tab-pill active" data-goto="0">Understanding ASD</button>
        <button class="scroll-tab-pill" data-goto="1">Applied Behaviour Analysis</button>
        <button class="scroll-tab-pill" data-goto="2">Our Approach</button>
      </div>
    </div>
    <div class="scroll-progress-dots" aria-hidden="true">
      <div class="scroll-dot active" data-goto="0"></div>
      <div class="scroll-dot" data-goto="1"></div>
      <div class="scroll-dot" data-goto="2"></div>
    </div>
    <div class="scroll-progress-bar" id="sciProgressBar"></div>
    <div class="scroll-hint" id="sciScrollHint">
      <div class="scroll-hint-mouse"></div>
      <span>Scroll to explore</span>
    </div>
    <div class="scroll-panels">
      <div class="scroll-panel active" data-panel="0">
        <div>
          <div class="sp-eyebrow">The Science</div>
          <h2 class="sp-title">Understanding <em>Autism Spectrum Disorder</em></h2>
          <p class="sp-body">ASD is a neurodevelopmental condition described in the latest clinical guidelines. Children and young people with ASD may experience differences in how they communicate, interact socially, and build relationships — including challenges with social communication, understanding nonverbal cues, and patterns of repetitive behaviours or focused interests.</p>
          <p class="sp-body">ASD is a lifelong condition, though the support needs of each individual can change over time. With the right guidance and intervention, many individuals make meaningful progress and may reduce or transition out of certain services as they grow and develop.</p>
          <p class="sp-body">Every child with ASD is unique, with their own strengths, needs, and learning style. Effective support is always personalised, grounded in research, and built around close collaboration with families and schools.</p>
        </div>
        <div>
          <ul class="sp-principles">
            <li class="sp-pi"><div class="sp-pi-num">01</div><div class="sp-pi-text"><strong>Individualised Support</strong><span>Every programme is designed around the unique strengths, needs, and goals of each child.</span></div></li>
            <li class="sp-pi"><div class="sp-pi-num">02</div><div class="sp-pi-text"><strong>Evidence-Based Practice</strong><span>Strategies grounded in scientific research and proven methods, ensuring high-quality support.</span></div></li>
            <li class="sp-pi"><div class="sp-pi-num">03</div><div class="sp-pi-text"><strong>Clear Goals &amp; Measurable Progress</strong><span>Skills broken into achievable steps, with progress carefully tracked to guide ongoing support.</span></div></li>
            <li class="sp-pi"><div class="sp-pi-num">04</div><div class="sp-pi-text"><strong>Positive Reinforcement</strong><span>Encouraging and rewarding progress helps children build confidence and strengthen new skills.</span></div></li>
            <li class="sp-pi"><div class="sp-pi-num">05</div><div class="sp-pi-text"><strong>Focus on Meaningful Skills</strong><span>Programmes prioritise communication, social interaction, independence, and learning readiness.</span></div></li>
            <li class="sp-pi"><div class="sp-pi-num">06</div><div class="sp-pi-text"><strong>Consistency Across Environments</strong><span>Skills taught to transfer successfully at home, in school, and in everyday life.</span></div></li>
            <li class="sp-pi"><div class="sp-pi-num">07</div><div class="sp-pi-text"><strong>Collaboration with Families &amp; Schools</strong><span>Close partnership with parents, caregivers, and educators ensures a consistent approach.</span></div></li>
            <li class="sp-pi"><div class="sp-pi-num">08</div><div class="sp-pi-text"><strong>Ongoing Review &amp; Adaptation</strong><span>Programmes are regularly reviewed and adjusted to reflect each child's evolving needs.</span></div></li>
          </ul>
        </div>
      </div>
      <div class="scroll-panel" data-panel="1">
        <div>
          <div class="sp-eyebrow">The Method</div>
          <h2 class="sp-title">Applied <em>Behaviour Analysis</em></h2>
          <p class="sp-body">ABA is a well-established scientific approach that focuses on understanding and improving behaviour in meaningful, practical ways. By carefully analysing how learning happens, ABA helps create supportive environments that encourage positive development and lasting change.</p>
          <p class="sp-body">ABA is widely recognised as the leading evidence-based approach for supporting individuals with ASD. Decades of research have shown its effectiveness — endorsed by the American Academy of Pediatrics, the American Academy of Child and Adolescent Psychiatry, and the National Institute of Mental Health.</p>
          <p class="sp-body">At its core, ABA recognises that behaviour is shaped by a person's experiences and environment. Progress is encouraged through clear goals, consistent practice, and positive reinforcement — helping children succeed across home, school, and the wider community.</p>
        </div>
        <div>
          <ul class="sp-principles">
            <li class="sp-pi"><div class="sp-pi-num">01</div><div class="sp-pi-text"><strong>Clear Goals &amp; Measurable Progress</strong><span>Skills are broken down into achievable steps, with progress carefully tracked to guide ongoing support.</span></div></li>
            <li class="sp-pi"><div class="sp-pi-num">02</div><div class="sp-pi-text"><strong>Focus on Meaningful Skills</strong><span>Programmes focus on communication, social interaction, independence, and learning readiness.</span></div></li>
            <li class="sp-pi"><div class="sp-pi-num">03</div><div class="sp-pi-text"><strong>Consistency Across Environments</strong><span>Skills taught to transfer successfully at home, school, and everyday life.</span></div></li>
            <li class="sp-pi"><div class="sp-pi-num">04</div><div class="sp-pi-text"><strong>Positive Reinforcement at Every Step</strong><span>Celebrating progress encourages children to build on their strengths and grow in confidence.</span></div></li>
            <li class="sp-pi"><div class="sp-pi-num">05</div><div class="sp-pi-text"><strong>Family &amp; Educator Partnership</strong><span>ABA works best when everyone in a child's life is involved, informed, and supported.</span></div></li>
            <li class="sp-pi"><div class="sp-pi-num">06</div><div class="sp-pi-text"><strong>Ongoing Review &amp; Adaptation</strong><span>Programmes regularly reviewed and adjusted to reflect each child's progress and evolving needs.</span></div></li>
          </ul>
        </div>
      </div>
      <div class="scroll-panel" data-panel="2">
        <div>
          <div class="sp-eyebrow">Our Philosophy</div>
          <h2 class="sp-title">Our Approach <em>at ACS</em></h2>
          <p class="sp-body">ACS is committed to improving the lives of individuals with ASD and related conditions through high-quality education, innovative research, and the use of technology — grounded in the principles of Applied Behaviour Analysis.</p>
          <p class="sp-body">Our practice is built on a compassionate, person-centred approach that places the individual at the heart of everything we do.</p>
          <div class="sp-note">
            <div class="sp-note-label">We also support individuals presenting characteristics of:</div>
            <div class="sp-tags">
              <span class="sp-tag">ADHD</span>
              <span class="sp-tag">Down's Syndrome</span>
              <span class="sp-tag">Dyslexia</span>
              <span class="sp-tag">Dyspraxia</span>
              <span class="sp-tag">Fragile X Syndrome</span>
              <span class="sp-tag">Learning Disabilities</span>
              <span class="sp-tag">Social Communication Disorder</span>
            </div>
          </div>
        </div>
        <div>
          <ul class="sp-principles">
            <li class="sp-pi"><div class="sp-pi-num">01</div><div class="sp-pi-text"><strong>Objective Assessment &amp; Measurement</strong><span>We carefully assess each individual by observing how their environment influences their behaviour, using clear and reliable data to guide our understanding.</span></div></li>
            <li class="sp-pi"><div class="sp-pi-num">02</div><div class="sp-pi-text"><strong>Understanding the Whole Child</strong><span>We consider not only the behaviour itself, but also its context and meaning for the individual, their family, and their wider community.</span></div></li>
            <li class="sp-pi"><div class="sp-pi-num">03</div><div class="sp-pi-text"><strong>Respect &amp; Dignity</strong><span>We place the individual at the centre of all we do, promoting dignity, respect, and a person-centred approach at every stage.</span></div></li>
            <li class="sp-pi"><div class="sp-pi-num">04</div><div class="sp-pi-text"><strong>Skill Development &amp; Independence</strong><span>Using proven behavioural strategies, we support the development of essential skills that enhance health, independence, confidence, and quality of life.</span></div></li>
            <li class="sp-pi"><div class="sp-pi-num">05</div><div class="sp-pi-text"><strong>Data-Driven Decision Making</strong><span>We continuously monitor progress through ongoing data collection and analysis, ensuring interventions remain effective and responsive.</span></div></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="scroll-story-spacer" aria-hidden="true"></div>
</section>

<!-- GLOBAL REACH -->
<section class="section reach-section">
  <div class="container">
    <div class="reach-grid">
      <div class="reach-visual reveal">
        <div class="reach-map-placeholder">
          <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?w=800&q=80&fit=crop" alt="Global reach map">
          <div class="reach-tag" style="top:22%;left:15%">United Kingdom</div>
          <div class="reach-tag" style="top:38%;left:52%">Dubai</div>
          <div class="reach-tag" style="top:62%;left:62%">Saudi Arabia</div>
          <div class="reach-tag" style="top:28%;right:8%">India</div>
        </div>
        <div class="reach-countries">
          <span class="reach-country">United Kingdom</span>
          <span class="reach-country">Republic of Ireland</span>
          <span class="reach-country">Europe</span>
          <span class="reach-country">Australia</span>
          <span class="reach-country">Dubai</span>
          <span class="reach-country">Saudi Arabia</span>
          <span class="reach-country">India</span>
          <span class="reach-country">+ Many More</span>
        </div>
      </div>
      <div class="reach-content reveal reveal-delay-2">
        <div class="eyebrow">Global Reach</div>
        <h2 class="section-title">Wherever You Are, <em>We're There</em></h2>
        <p class="section-lead">ACS provides ABA services either in-person or remotely across multiple countries and regions worldwide.</p>
        <div class="reach-modes">
          <div class="mode-card">
            <div class="mode-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg></div>
            <div class="mode-text"><strong>In-Person Sessions</strong><span>Home-based and school-based programmes across the UK</span></div>
          </div>
          <div class="mode-card">
            <div class="mode-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
            <div class="mode-text"><strong>TeleHealth</strong><span>Remote ABA support accessible anywhere in the world</span></div>
          </div>
          <div class="mode-card">
            <div class="mode-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
            <div class="mode-text"><strong>Training &amp; Workshops</strong><span>Delivered internationally for professionals and organisations</span></div>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="reach-cta">Get in Touch<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
      </div>
    </div>
  </div>
</section>

<!-- MISSION BANNER -->
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

<!-- CONTACT -->
<section class="section" style="background:var(--navy-deep);padding:100px 0">
  <div class="container">
    <div class="reveal" style="text-align:center;max-width:700px;margin:0 auto">
      <div class="eyebrow" style="color:var(--gold);justify-content:center">Get in Touch</div>
      <h2 class="section-title" style="color:var(--white)">Let's Start the <em style="color:var(--gold-light)">Conversation</em></h2>
      <p style="font-family:var(--sans);font-size:16px;font-weight:300;color:rgba(255,255,255,0.55);line-height:1.75;margin-bottom:48px">Whether you're a family seeking support, a professional looking for training, or an organisation exploring partnership — we're here to help.</p>
      <div class="contact-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;text-align:center;margin-bottom:48px">
        <div style="background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06);border-radius:14px;padding:28px 20px">
          <div style="width:48px;height:48px;border-radius:12px;background:rgba(201,168,76,0.12);display:flex;align-items:center;justify-content:center;margin:0 auto 16px"><svg viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.75" style="width:22px;height:22px"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.22 1.18 2 2 0 012.22 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.08 6.08l1.27-.66a2 2 0 012.11.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
          <div style="font-family:var(--sans);font-size:14px;font-weight:500;color:var(--white);margin-bottom:4px">Call Us</div>
          <a href="tel:+447961663116" style="font-family:var(--sans);font-size:15px;font-weight:300;color:var(--gold-light);text-decoration:none">+44 (0) 79 6166 3116</a>
        </div>
        <div style="background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06);border-radius:14px;padding:28px 20px">
          <div style="width:48px;height:48px;border-radius:12px;background:rgba(201,168,76,0.12);display:flex;align-items:center;justify-content:center;margin:0 auto 16px"><svg viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.75" style="width:22px;height:22px"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <div style="font-family:var(--sans);font-size:14px;font-weight:500;color:var(--white);margin-bottom:4px">Visit Us</div>
          <span style="font-family:var(--sans);font-size:14px;font-weight:300;color:rgba(255,255,255,0.55);line-height:1.5;display:block">2 Aspen Road<br>High Wycombe, HP10 9FA</span>
        </div>
        <div style="background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06);border-radius:14px;padding:28px 20px">
          <div style="width:48px;height:48px;border-radius:12px;background:rgba(201,168,76,0.12);display:flex;align-items:center;justify-content:center;margin:0 auto 16px"><svg viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.75" style="width:22px;height:22px"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg></div>
          <div style="font-family:var(--sans);font-size:14px;font-weight:500;color:var(--white);margin-bottom:4px">Online</div>
          <a href="https://autismconsultancyservices.co.uk" target="_blank" style="font-family:var(--sans);font-size:14px;font-weight:300;color:var(--gold-light);text-decoration:none">autismconsultancy<br>services.co.uk</a>
        </div>
      </div>
      <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-primary" style="display:inline-flex">Send Us a Message<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
    </div>
  </div>
</section>

<?php get_footer(); ?>

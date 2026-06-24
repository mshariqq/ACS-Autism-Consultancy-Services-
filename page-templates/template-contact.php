<?php
/**
 * Template Name: Contact Us
 */

get_header(); ?>

<section class="contact-hero" style="min-height:70vh;background:var(--navy);display:flex;align-items:center;position:relative;overflow:hidden;padding-top:104px">
  <div class="contact-hero-bg-grid" style="position:absolute;inset:0;background-image:linear-gradient(rgba(201,168,76,0.04) 1px,transparent 1px),linear-gradient(90deg,rgba(201,168,76,0.04) 1px,transparent 1px);background-size:60px 60px"></div>
  <div class="contact-hero-glow" style="position:absolute;top:-100px;right:-100px;width:700px;height:700px;background:radial-gradient(ellipse,rgba(201,168,76,0.12) 0%,transparent 70%);pointer-events:none"></div>
  <div class="contact-hero-glow2" style="position:absolute;bottom:-150px;left:-100px;width:600px;height:600px;background:radial-gradient(ellipse,rgba(13,42,94,0.8) 0%,transparent 70%);pointer-events:none"></div>
  <div class="contact-hero-inner" style="max-width:1200px;margin:0 auto;padding:80px 40px;position:relative;z-index:2;width:100%">
    <div class="contact-hero-breadcrumb hero-animate" style="display:flex;align-items:center;gap:8px;font-family:var(--sans);font-size:13px;font-weight:400;color:rgba(255,255,255,0.4);margin-bottom:28px"><a href="<?php echo esc_url(home_url('/')); ?>" style="color:rgba(255,255,255,0.4);text-decoration:none">Home</a><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5" style="width:12px;height:12px;opacity:0.4"><path d="M4 2l4 4-4 4"/></svg><span>Contact Us</span></div>
    <h1 class="contact-hero-title hero-animate hero-delay-1" style="font-family:var(--serif);font-size:clamp(42px,5vw,68px);font-weight:300;line-height:1.08;color:var(--white);letter-spacing:-0.02em;margin-bottom:12px">Get in <em style="font-style:italic;color:var(--gold-light)">Touch</em></h1>
    <p class="contact-hero-sub hero-animate hero-delay-2" style="font-family:var(--sans);font-size:18px;font-weight:300;color:rgba(255,255,255,0.6);line-height:1.6;max-width:600px;margin-bottom:32px">We'd love to hear from you — whether you're a family seeking support, a professional looking for training, or an organisation exploring partnership.</p>
    <div class="contact-hero-actions hero-animate hero-delay-3" style="display:flex;gap:14px;flex-wrap:wrap">
      <a href="#contactForm" class="btn-primary">Send a Message<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
      <a href="tel:+447961663116" class="btn-ghost"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.22 1.18 2 2 0 012.22 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.08 6.08l1.27-.66a2 2 0 012.11.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>+44 (0) 79 6166 3116</a>
    </div>
  </div>
</section>

<section class="contact-main" id="contactForm" style="padding:100px 0;background:var(--cream)">
  <div class="container">
    <div class="contact-main-grid" style="display:grid;grid-template-columns:1.2fr 1fr;gap:80px;align-items:start">
      <div class="contact-form-col reveal">
        <div class="contact-form-header">
          <div class="eyebrow">Get in Touch</div>
          <h2 class="section-title">Send Us a <em>Message</em></h2>
          <p class="contact-form-intro" style="font-family:var(--sans);font-size:16px;font-weight:300;color:#5a6b82;line-height:1.7;margin-bottom:32px">Complete the form below and a member of our team will respond within 24 hours.</p>
        </div>
        <form class="cform" action="#" method="POST">
          <div class="cform-row" style="display:grid;grid-template-columns:1fr 1fr;gap:20px">
            <div class="cform-group"><div class="cform-input-wrap" style="position:relative"><input type="text" id="cFullName" name="fullName" required class="cform-input" placeholder=" " style="width:100%;padding:16px 18px;border:1.5px solid rgba(8,28,64,0.12);border-radius:10px;font-family:var(--sans);font-size:15px;color:var(--navy);background:var(--white);outline:none;transition:border-color 0.2s"><label for="cFullName" class="cform-label" style="position:absolute;left:18px;top:16px;font-family:var(--sans);font-size:15px;font-weight:400;color:var(--text-muted);pointer-events:none;transition:all 0.2s">Full Name <span class="cform-req" style="color:var(--gold)">*</span></label></div></div>
            <div class="cform-group"><div class="cform-input-wrap" style="position:relative"><input type="email" id="cEmail" name="email" required class="cform-input" placeholder=" " style="width:100%;padding:16px 18px;border:1.5px solid rgba(8,28,64,0.12);border-radius:10px;font-family:var(--sans);font-size:15px;color:var(--navy);background:var(--white);outline:none;transition:border-color 0.2s"><label for="cEmail" class="cform-label" style="position:absolute;left:18px;top:16px;font-family:var(--sans);font-size:15px;font-weight:400;color:var(--text-muted);pointer-events:none;transition:all 0.2s">Email Address <span class="cform-req" style="color:var(--gold)">*</span></label></div></div>
          </div>
          <div class="cform-row" style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:20px">
            <div class="cform-group"><div class="cform-input-wrap" style="position:relative"><input type="tel" id="cPhone" name="phone" class="cform-input" placeholder=" " style="width:100%;padding:16px 18px;border:1.5px solid rgba(8,28,64,0.12);border-radius:10px;font-family:var(--sans);font-size:15px;color:var(--navy);background:var(--white);outline:none;transition:border-color 0.2s"><label for="cPhone" class="cform-label" style="position:absolute;left:18px;top:16px;font-family:var(--sans);font-size:15px;font-weight:400;color:var(--text-muted);pointer-events:none;transition:all 0.2s">Phone <span class="cform-opt" style="color:var(--text-muted);font-size:12px">(optional)</span></label></div></div>
            <div class="cform-group"><div class="cform-input-wrap" style="position:relative"><select id="cService" name="service" class="cform-input" style="width:100%;padding:16px 18px;border:1.5px solid rgba(8,28,64,0.12);border-radius:10px;font-family:var(--sans);font-size:15px;color:var(--navy);background:var(--white);outline:none;transition:border-color 0.2s;-webkit-appearance:none;appearance:none"><option value="" selected disabled hidden></option><option value="assessment">Assessment &amp; Evaluation</option><option value="training">Training &amp; Workshops</option><option value="homebased">Home-Based ABA</option><option value="schoolbased">School-Based ABA</option><option value="telehealth">TeleHealth ABA</option><option value="parents">For Parents</option><option value="other">Other</option></select><label for="cService" class="cform-label" style="position:absolute;left:18px;top:16px;font-family:var(--sans);font-size:15px;font-weight:400;color:var(--text-muted);pointer-events:none;transition:all 0.2s">Service of Interest <span class="cform-opt" style="color:var(--text-muted);font-size:12px">(optional)</span></label></div></div>
          </div>
          <div class="cform-group cform-group-full" style="margin-top:20px">
            <div class="cform-input-wrap" style="position:relative"><textarea id="cMessage" name="message" rows="5" required class="cform-input cform-textarea" placeholder=" " style="width:100%;padding:16px 18px;border:1.5px solid rgba(8,28,64,0.12);border-radius:10px;font-family:var(--sans);font-size:15px;color:var(--navy);background:var(--white);outline:none;transition:border-color 0.2s;resize:vertical"></textarea><label for="cMessage" class="cform-label" style="position:absolute;left:18px;top:16px;font-family:var(--sans);font-size:15px;font-weight:400;color:var(--text-muted);pointer-events:none;transition:all 0.2s">Message <span class="cform-req" style="color:var(--gold)">*</span></label></div>
          </div>
          <button type="submit" class="btn-primary" style="border:none;cursor:pointer;width:100%;justify-content:center;padding:16px 30px;margin-top:24px">Send Message<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg></button>
        </form>
      </div>
      <div class="contact-info-col reveal reveal-delay-2">
        <div class="contact-image-frame" style="border-radius:20px;overflow:hidden;aspect-ratio:16/10;position:relative;margin-bottom:24px"><img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&q=80&fit=crop" alt="ACS office" style="width:100%;height:100%;object-fit:cover"><div class="contact-image-overlay" style="position:absolute;top:20px;left:20px"><div class="contact-image-badge" style="background:var(--navy);border-radius:8px;padding:10px 16px;display:flex;align-items:center;gap:8px"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;color:var(--gold)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><span style="font-family:var(--sans);font-size:12px;font-weight:500;color:var(--white)">Trusted Since 2007</span></div></div></div>
        <div class="contact-info-cards" style="display:flex;flex-direction:column;gap:12px;margin-bottom:24px">
          <a href="tel:+447961663116" class="contact-info-card" style="display:flex;align-items:center;gap:16px;padding:18px 20px;background:var(--white);border:1px solid rgba(8,28,64,0.08);border-radius:12px;text-decoration:none;transition:all 0.2s"><div class="contact-info-icon" style="width:44px;height:44px;border-radius:10px;background:rgba(201,168,76,0.12);display:flex;align-items:center;justify-content:center;flex-shrink:0"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:20px;height:20px;color:var(--gold)"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.22 1.18 2 2 0 012.22 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.08 6.08l1.27-.66a2 2 0 012.11.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div><div class="contact-info-text"><strong style="display:block;font-family:var(--sans);font-size:14px;font-weight:600;color:var(--navy)">Phone</strong><span style="font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82">+44 (0) 79 6166 3116</span></div></a>
          <div class="contact-info-card" style="display:flex;align-items:center;gap:16px;padding:18px 20px;background:var(--white);border:1px solid rgba(8,28,64,0.08);border-radius:12px"><div class="contact-info-icon" style="width:44px;height:44px;border-radius:10px;background:rgba(201,168,76,0.12);display:flex;align-items:center;justify-content:center;flex-shrink:0"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:20px;height:20px;color:var(--gold)"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div class="contact-info-text"><strong style="display:block;font-family:var(--sans);font-size:14px;font-weight:600;color:var(--navy)">Address</strong><span style="font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82">2 Aspen Road, High Wycombe, HP10 9FA, UK</span></div></div>
          <a href="https://autismconsultancyservices.co.uk" target="_blank" rel="noopener" class="contact-info-card" style="display:flex;align-items:center;gap:16px;padding:18px 20px;background:var(--white);border:1px solid rgba(8,28,64,0.08);border-radius:12px;text-decoration:none;transition:all 0.2s"><div class="contact-info-icon" style="width:44px;height:44px;border-radius:10px;background:rgba(201,168,76,0.12);display:flex;align-items:center;justify-content:center;flex-shrink:0"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:20px;height:20px;color:var(--gold)"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg></div><div class="contact-info-text"><strong style="display:block;font-family:var(--sans);font-size:14px;font-weight:600;color:var(--navy)">Website</strong><span style="font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82">autismconsultancyservices.co.uk</span></div></a>
        </div>
        <div class="contact-hours-card" style="background:var(--white);border:1px solid rgba(8,28,64,0.08);border-radius:14px;padding:24px 28px">
          <div class="contact-hours-header" style="display:flex;align-items:center;gap:10px;margin-bottom:16px"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:20px;height:20px;color:var(--gold)"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg><span style="font-family:var(--sans);font-size:15px;font-weight:600;color:var(--navy)">Working Hours</span></div>
          <div class="contact-hours-row" style="display:flex;justify-content:space-between;padding:8px 0;border-bottom:1px solid rgba(8,28,64,0.06)"><span class="contact-hours-day" style="font-family:var(--sans);font-size:14px;font-weight:400;color:#5a6b82">Monday – Friday</span><span class="contact-hours-time" style="font-family:var(--sans);font-size:14px;font-weight:500;color:var(--navy)">9:00 AM – 5:30 PM</span></div>
          <div class="contact-hours-row" style="display:flex;justify-content:space-between;padding:8px 0;border-bottom:1px solid rgba(8,28,64,0.06)"><span class="contact-hours-day" style="font-family:var(--sans);font-size:14px;font-weight:400;color:#5a6b82">Saturday</span><span class="contact-hours-time contact-hours-time-alt" style="font-family:var(--sans);font-size:14px;font-weight:500;color:var(--gold)">By Appointment</span></div>
          <div class="contact-hours-row" style="display:flex;justify-content:space-between;padding:8px 0"><span class="contact-hours-day" style="font-family:var(--sans);font-size:14px;font-weight:400;color:#5a6b82">Sunday</span><span class="contact-hours-time contact-hours-time-closed" style="font-family:var(--sans);font-size:14px;font-weight:500;color:#d9534f">Closed</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-location" style="padding:100px 0;background:var(--white)">
  <div class="container">
    <div class="services-header reveal">
      <div class="eyebrow">Our Location</div>
      <h2 class="section-title">Find Us in <em>High Wycombe</em></h2>
      <p class="section-lead">Conveniently located with easy access from London and the Home Counties. We also provide services worldwide via TeleHealth.</p>
    </div>
  </div>
  <div class="contact-map-wrap reveal" style="max-width:1200px;margin:48px auto 0;padding:0 40px">
    <div class="contact-map-placeholder" style="border-radius:20px;overflow:hidden;aspect-ratio:21/9;position:relative">
      <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?w=1600&q=80&fit=crop" alt="Map" style="width:100%;height:100%;object-fit:cover">
      <div class="contact-map-overlay" style="position:absolute;bottom:28px;left:28px;right:28px">
        <div class="contact-map-card" style="background:var(--navy);border-radius:12px;padding:16px 20px;display:inline-flex;align-items:center;gap:12px"><div class="contact-map-card-icon" style="width:36px;height:36px;border-radius:8px;background:rgba(201,168,76,0.12);display:flex;align-items:center;justify-content:center;flex-shrink:0"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="width:16px;height:16px;color:var(--gold)"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div class="contact-map-card-text"><strong style="display:block;font-family:var(--sans);font-size:14px;font-weight:600;color:var(--white)">Autism Consultancy Services Ltd</strong><span style="font-family:var(--sans);font-size:12px;color:var(--text-muted)">2 Aspen Road, High Wycombe, HP10 9FA, UK</span></div></div>
      </div>
    </div>
  </div>
</section>

<section class="contact-global" style="background:var(--navy-deep);padding:100px 0;position:relative;overflow:hidden">
  <div style="content:'';position:absolute;inset:0;background-image:linear-gradient(rgba(201,168,76,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(201,168,76,0.03) 1px,transparent 1px);background-size:80px 80px"></div>
  <div class="container" style="position:relative;z-index:2">
    <div class="contact-global-inner reveal">
      <div class="eyebrow" style="justify-content:center;color:var(--gold-light)">Worldwide</div>
      <h2 class="section-title" style="color:var(--white);text-align:center">Serving Families <em style="color:var(--gold-light)">Globally</em></h2>
      <p style="font-family:var(--sans);font-size:16px;font-weight:300;color:rgba(255,255,255,0.55);line-height:1.75;text-align:center;max-width:600px;margin:0 auto 48px">In-person support across the UK, plus TeleHealth ABA services available anywhere in the world.</p>
      <div class="contact-global-tags" style="display:flex;flex-wrap:wrap;gap:12px;justify-content:center">
        <?php $regions = array('United Kingdom','Republic of Ireland','Europe','Dubai','Saudi Arabia','India','Australia'); foreach ($regions as $r) echo '<span class="contact-global-tag" style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.1);font-family:var(--sans);font-size:14px;font-weight:500;color:rgba(255,255,255,0.8);padding:10px 22px;border-radius:100px">' . esc_html($r) . '</span>'; ?>
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

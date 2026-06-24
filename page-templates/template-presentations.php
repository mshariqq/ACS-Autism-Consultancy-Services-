<?php
/**
 * Template Name: PowerPoint Presentations
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
      <span>Presentations</span>
    </div>
    <h1 class="page-title">PowerPoint <em>Presentations</em></h1>
    <p class="page-subtitle">Educational and training presentations on ABA, autism, and related topics by Dr. Christos Nikopoulos.</p>
  </div>
</section>
<section class="pres-table-section" style="background:var(--cream);padding:100px 0">
  <div class="container">
    <div class="services-header reveal">
      <div class="eyebrow">Presentations</div>
      <h2 class="section-title">Conference <em>&amp; Training Materials</em></h2>
      <p class="section-lead">Downloadable presentations from international conferences and training events. Links will open in a new tab.</p>
    </div>
    <div class="pub-table-wrap reveal" style="background:var(--white);border-radius:16px;border:1px solid rgba(8,28,64,0.08);overflow:hidden">
      <table class="pub-table" style="width:100%;border-collapse:collapse">
        <thead>
          <tr style="background:var(--navy);color:var(--white)">
            <th style="padding:16px 20px;font-family:var(--sans);font-size:13px;font-weight:600;text-align:left">Year</th>
            <th style="padding:16px 20px;font-family:var(--sans);font-size:13px;font-weight:600;text-align:left">Title</th>
            <th style="padding:16px 20px;font-family:var(--sans);font-size:13px;font-weight:600;text-align:left">Venue</th>
            <th style="padding:16px 20px;font-family:var(--sans);font-size:13px;font-weight:600;text-align:left">Download</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $presentations = array(
            array('2025', 'ABA in Clinical and Educational Settings', 'International ABA Conference – Online Keynote', 'https://autismconsultancyservices.co.uk/wp-content/uploads/2025/01/aba-clinical-educational-settings.pdf'),
            array('2025', 'Understanding and Dealing with Challenging Behaviour', 'University of Roehampton – Invited Talk', 'https://autismconsultancyservices.co.uk/wp-content/uploads/2025/02/challenging-behaviour-roehampton.pdf'),
            array('2024', 'Verbal Behaviour Approach: From Assessment to Intervention', '5th Panhellenic Scientific Conference', 'https://autismconsultancyservices.co.uk/wp-content/uploads/2024/11/verbal-behaviour-approach-panhellenic.pdf'),
            array('2024', 'Teaching Methods and Decision-Making in Special Education', 'KENTABA Conference London', 'https://autismconsultancyservices.co.uk/wp-content/uploads/2024/09/teaching-methods-special-education.pdf'),
            array('2023', 'RBT Training and Accreditation', 'University of Kent Workshop', 'https://autismconsultancyservices.co.uk/wp-content/uploads/2023/11/rbt-training-accreditation.pdf'),
            array('2023', 'ABA Interventions for Children with ASD', 'University of Kent Keynote', 'https://autismconsultancyservices.co.uk/wp-content/uploads/2023/10/aba-interventions-asd-kent.pdf'),
            array('2022', 'VB-MAPP Workshop', 'Training Workshop – Qatar', '#'),
            array('2021', 'Forensic Behaviour Analysis', '2nd Scientific Conference Cyprus', '#'),
            array('2019', 'Systematic Review of Video Modelling', 'International ABA Conference', '#'),
          );
          foreach ($presentations as $p) {
          ?>
          <tr style="border-bottom:1px solid rgba(8,28,64,0.06)">
            <td style="padding:16px 20px;font-family:var(--sans);font-size:14px;font-weight:600;color:var(--gold)"><?php echo esc_html($p[0]); ?></td>
            <td style="padding:16px 20px;font-family:var(--sans);font-size:14px;font-weight:400;color:var(--navy);line-height:1.5"><?php echo esc_html($p[1]); ?></td>
            <td style="padding:16px 20px;font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82"><?php echo esc_html($p[2]); ?></td>
            <td style="padding:16px 20px"><a href="<?php echo esc_url($p[3]); ?>" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:6px;font-family:var(--sans);font-size:13px;font-weight:500;color:var(--navy);text-decoration:none;padding:8px 14px;border-radius:8px;background:rgba(1,81,152,0.06);transition:all 0.2s">Download PDF <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px"><path d="M8 3v10M4 9l4 4 4-4"/></svg></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
<section class="pres-cta-section" style="background:var(--navy-deep);padding:100px 0">
  <div class="container">
    <div class="pres-cta-inner reveal" style="max-width:680px;margin:0 auto;text-align:center">
      <div class="eyebrow" style="color:var(--gold);justify-content:center">Need More?</div>
      <h2 class="section-title" style="color:var(--white)">Request <em style="color:var(--gold-light)">Additional Materials</em></h2>
      <p style="font-family:var(--sans);font-size:16px;font-weight:300;color:rgba(255,255,255,0.55);line-height:1.75;margin-bottom:36px">If you are looking for specific training materials or presentations not listed here, please get in touch and we'll be happy to help.</p>
      <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-primary" style="display:inline-flex;margin:0 auto">Contact Us<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
    </div>
  </div>
</section>
<?php get_footer(); ?>

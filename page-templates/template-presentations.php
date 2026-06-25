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
            array('2026', 'Dealing with Challenging Behaviours in Children and Adults with Autism', 'Austria', 'https://darkseagreen-stinkbug-382389.hostingersite.com/wp-content/uploads/2026/06/Dealing-with-Challenging-Behaviours-in-Children-and-Adults-with-Autism-Dr-C-Nikopoulos-Austria-_26.pdf'),
            array('2024', 'Understanding and Dealing with Challenging Behaviours in Autism', 'Iraq', 'https://darkseagreen-stinkbug-382389.hostingersite.com/wp-content/uploads/2026/06/Understanding-and-Dealing-with-Challenging-Behaviours-in-Autism-Dr-C-Nikopoulos-Iraq-_24.pdf'),
            array('2020', 'Video modelling in autism (+Italian)', 'AARBA – Italy', 'https://darkseagreen-stinkbug-382389.hostingersite.com/wp-content/uploads/2026/06/Video-modelling-in-autism-Dr-C-Nikopoulos-AARBA-_20-Italian.pdf'),
            array('2019', 'Video modelling for children with ASD (Turkish)', 'Istanbul, Turkey', 'https://darkseagreen-stinkbug-382389.hostingersite.com/wp-content/uploads/2026/06/Video-modelling-for-children-with-ASD-Dr-C-Nikopoulos-Istanbul-_19-Turkish.pdf'),
            array('2018', 'Structuring an ABA programme for children with ASD (Greek)', 'Cyprus', 'https://darkseagreen-stinkbug-382389.hostingersite.com/wp-content/uploads/2026/06/Structuring-an-ABA-programme-for-children-with-ASD-Dr-C-Nikopoulos-Cyprus-_18-Greek.pdf'),
            array('2018', 'How parents can help their children (Greek)', 'Cyprus', 'https://darkseagreen-stinkbug-382389.hostingersite.com/wp-content/uploads/2026/06/How-parents-can-help-their-children-Dr-C-Nikopoulos-Cyprus-_18-Greek.pdf'),
            array('2018', 'FBA and School-wide Behaviour Support Plans', 'Bucharest, Romania', 'https://darkseagreen-stinkbug-382389.hostingersite.com/wp-content/uploads/2026/06/FBA-and-School-wide-Behaviour-Support-Plans-Dr-C-Nikopoulos-Bucharest-_18-.pdf'),
            array('2018', 'An Introduction to ABA', 'Riyadh, Saudi Arabia', 'https://darkseagreen-stinkbug-382389.hostingersite.com/wp-content/uploads/2026/06/An-Introduction-to-ABA-Dr-C-Nikopoulos-Riyadh-_18.pdf'),
            array('2018', 'An Introduction to ABA & Video modelling', 'London, UK', 'https://darkseagreen-stinkbug-382389.hostingersite.com/wp-content/uploads/2026/06/An-Introduction-to-ABA-Video-modelling-Dr-C-Nikopoulos-London-_18.pdf'),
            array('2015', 'Technology-based interventions', 'Moscow, Russia', 'https://darkseagreen-stinkbug-382389.hostingersite.com/wp-content/uploads/2026/06/Technology-based-interventions-Dr-C-Nikopoulos-Moscow-_15.pdf'),
          );
          foreach ($presentations as $p) {
          ?>
          <tr style="border-bottom:1px solid rgba(8,28,64,0.06)">
            <td style="padding:16px 20px;font-family:var(--sans);font-size:14px;font-weight:600;color:var(--gold)"><?php echo esc_html($p[0]); ?></td>
            <td style="padding:16px 20px;font-family:var(--sans);font-size:14px;font-weight:400;color:var(--navy);line-height:1.5"><?php echo esc_html($p[1]); ?></td>
            <td style="padding:16px 20px;font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82"><?php echo esc_html($p[2]); ?></td>
            <td style="padding:16px 20px"><a href="<?php echo esc_url($p[3]); ?>" download="" style="display:inline-flex;align-items:center;gap:6px;font-family:var(--sans);font-size:13px;font-weight:500;color:var(--navy);text-decoration:none;padding:8px 14px;border-radius:8px;background:rgba(1,81,152,0.06);transition:all 0.2s">Download PDF <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px"><path d="M8 3v10M4 9l4 4 4-4"/></svg></a></td>
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

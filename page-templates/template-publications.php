<?php
/**
 * Template Name: List of Publications
 */
get_header(); ?>
<section class="page-hero">
  <div class="page-hero-bg"></div>
  <div class="page-hero-glow"></div>
  <div class="page-hero-inner">
    <div class="breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 2l4 4-4 4"/></svg>
      <a href="<?php echo esc_url(home_url('/about-us/')); ?>">About Us</a>
      <svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 2l4 4-4 4"/></svg>
      <span>List of Publications</span>
    </div>
    <h1 class="page-title">List of <em>Publications</em></h1>
    <p class="page-subtitle">Academic publications, books, and peer-reviewed articles by Dr. Christos Nikopoulos and ACS Associates.</p>
  </div>
</section>
<section class="pub-conference-section" style="background:var(--cream);padding:100px 0">
  <div class="container">
    <div class="services-header reveal">
      <div class="eyebrow">Conferences</div>
      <h2 class="section-title">International <em>Invited Addresses</em></h2>
      <p class="section-lead">Selected invited presentations at international conferences and institutions.</p>
    </div>
    <div class="pub-table-wrap reveal" style="background:var(--white);border-radius:16px;border:1px solid rgba(8,28,64,0.08);overflow:hidden">
      <table class="pub-table" style="width:100%;border-collapse:collapse">
        <thead>
          <tr style="background:var(--navy);color:var(--white)">
            <th style="padding:16px 20px;font-family:var(--sans);font-size:13px;font-weight:600;text-align:left">Year</th>
            <th style="padding:16px 20px;font-family:var(--sans);font-size:13px;font-weight:600;text-align:left">Title</th>
            <th style="padding:16px 20px;font-family:var(--sans);font-size:13px;font-weight:600;text-align:left">Venue</th>
            <th style="padding:16px 20px;font-family:var(--sans);font-size:13px;font-weight:600;text-align:left">Authors</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $conferences = array(
            array('2026', 'Dealing With Challenging Behaviour: Evidence-Based Assessment and Intervention for Behaviour Analysts', 'University of Roehampton, UK', 'Nikopoulos, C.'),
            array('2025', 'Forensic Behaviour Analysis: Assessment and Intervention for Criminal Behaviour', 'Keynote Speaker, 2nd Scientific Conference, Cyprus', 'Nikopoulos, C.'),
            array('2025', 'Verbal Behaviour Approach in Clinical and Educational Settings: From Assessment to Treatment', 'Online Keynote, International Virtual ABA Conference', 'Nikopoulos, C.'),
            array('2024', 'Teaching methods and decision-making in special education', 'Keynote Speaker, 5th Panhellenic Scientific Conference, Greece', 'Nikopoulos, C.'),
            array('2024', 'A systematic approach for understanding and dealing with challenging behaviour in education', 'Invited Presentation, KENTABA, London, UK', 'Nikopoulos, C.'),
            array('2023', 'RBT Training & Accreditation: The BACB Pathway in the UK and Europe', 'Invited Workshop, University of Kent, UK', 'Nikopoulos, C.'),
            array('2023', 'ABA and Verbal Behaviour Interventions for children with Autism Spectrum Disorder', 'Keynote Speaker, University of Kent, UK', 'Nikopoulos, C.'),
            array('2022', 'VB-MAPP Workshop', 'Training Workshop, Qatar', 'Nikopoulos, C.'),
          );
          foreach ($conferences as $c) {
          ?>
          <tr style="border-bottom:1px solid rgba(8,28,64,0.06)">
            <td style="padding:16px 20px;font-family:var(--sans);font-size:14px;font-weight:600;color:var(--gold)"><?php echo esc_html($c[0]); ?></td>
            <td style="padding:16px 20px;font-family:var(--sans);font-size:14px;font-weight:400;color:var(--navy);line-height:1.5"><?php echo esc_html($c[1]); ?></td>
            <td style="padding:16px 20px;font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82;line-height:1.5"><?php echo esc_html($c[2]); ?></td>
            <td style="padding:16px 20px;font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82"><?php echo esc_html($c[3]); ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
<section class="pub-publications-section" style="background:var(--white);padding:100px 0">
  <div class="container">
    <div class="services-header reveal">
      <div class="eyebrow">Publications</div>
      <h2 class="section-title">Books &amp; Peer-Reviewed <em>Articles</em></h2>
      <p class="section-lead">Selected works by Dr. Christos Nikopoulos and colleagues, spanning behaviour analysis, autism intervention, and special education.</p>
    </div>
    <div class="pub-table-wrap reveal" style="background:var(--cream);border-radius:16px;border:1px solid rgba(8,28,64,0.08);overflow:hidden">
      <table class="pub-table" style="width:100%;border-collapse:collapse">
        <thead>
          <tr style="background:var(--navy);color:var(--white)">
            <th style="padding:16px 20px;font-family:var(--sans);font-size:13px;font-weight:600;text-align:left">Year</th>
            <th style="padding:16px 20px;font-family:var(--sans);font-size:13px;font-weight:600;text-align:left">Title</th>
            <th style="padding:16px 20px;font-family:var(--sans);font-size:13px;font-weight:600;text-align:left">Journal / Publisher</th>
            <th style="padding:16px 20px;font-family:var(--sans);font-size:13px;font-weight:600;text-align:left">Authors</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $publications = array(
            array('2025', 'Book: Forensic Behaviour Analysis (in preparation)', 'Wiley-Blackwell', 'Nikopoulos, C.'),
            array('2023', 'Book: Verbal Behaviour Approach in Clinical and Educational Practice (in preparation)', 'Academic Press', 'Nikopoulos, C.'),
            array('2022', 'Book: School-Based Behavioural Interventions (in preparation)', 'Routledge', 'Nikopoulos, C.'),
            array('2021', 'Preventing Challenging Behaviours in Children with ASD: A Systematic Approach', 'International Journal of Positive Behavioural Support', 'Nikopoulos, C.'),
            array('2020', 'The Verbal Behaviour Approach: From Assessment to Intervention', 'European Journal of Behavior Analysis', 'Nikopoulos, C.'),
            array('2019', 'A Systematic Review of Video Modelling for Individuals with Autism', 'Journal of Autism and Developmental Disorders', 'Nikopoulos, C. & Keenan, M.'),
            array('2018', 'Behavioural Interventions in Educational Settings: A Review of Best Practices', 'Educational Psychology in Practice', 'Nikopoulos, C.'),
            array('2016', 'Video Modelling and Social Skills in Children with ASD', 'Journal of Applied Behavior Analysis', 'Nikopoulos, C. & Keenan, M.'),
            array('2015', 'Book: Video Modelling and Behaviour Analysis – A Guide for Teaching Social Skills to Children with Autism (2nd ed.)', 'Jessica Kingsley Publishers', 'Nikopoulos, C. & Keenan, M.'),
            array('2013', 'Book: Video Modelling and Behaviour Analysis – A Guide for Teaching Social Skills to Children with Autism (1st ed.)', 'Jessica Kingsley Publishers', 'Nikopoulos, C. & Keenan, M.'),
            array('2007', 'Effects of Video Modelling on the Social Skills of Children with Autism', 'Journal of Autism and Developmental Disorders', 'Nikopoulos, C. & Keenan, M.'),
          );
          foreach ($publications as $p) {
          ?>
          <tr style="border-bottom:1px solid rgba(8,28,64,0.06)">
            <td style="padding:16px 20px;font-family:var(--sans);font-size:14px;font-weight:600;color:var(--gold)"><?php echo esc_html($p[0]); ?></td>
            <td style="padding:16px 20px;font-family:var(--sans);font-size:14px;font-weight:400;color:var(--navy);line-height:1.5"><em><?php echo esc_html($p[1]); ?></em></td>
            <td style="padding:16px 20px;font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82;line-height:1.5"><?php echo esc_html($p[2]); ?></td>
            <td style="padding:16px 20px;font-family:var(--sans);font-size:14px;font-weight:300;color:#5a6b82"><?php echo esc_html($p[3]); ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
<?php get_footer(); ?>

<footer>
  <div class="container footer-top">
    <div class="footer-grid">
      <div class="footer-brand">
        <?php if (has_custom_logo()) {
            the_custom_logo();
        } else { ?>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
            <img src="https://darkseagreen-stinkbug-382389.hostingersite.com/wp-content/uploads/2026/06/ACS-768x426.png" alt="Autism Consultancy Services Ltd" style="height:64px;width:auto;filter:brightness(0) invert(1)">
          </a>
        <?php } ?>
        <p class="footer-tagline">Science into Everyday Practice</p>
        <p class="footer-brand-desc">Bringing science into everyday practice to enhance quality of life for individuals with Autism Spectrum Disorder and related developmental disabilities.</p>
        <div class="footer-social">
          <a href="#" class="social-btn" aria-label="Facebook">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
          </a>
          <a href="https://www.linkedin.com/in/bcba-aba-autism-uk-saudi/" class="social-btn" target="_blank" rel="noopener" aria-label="LinkedIn">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
          </a>
          <a href="#" class="social-btn" aria-label="X (Twitter)">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
          </a>
          <a href="#" class="social-btn" aria-label="ResearchGate">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><circle cx="12" cy="12" r="10"/><path d="M9 9h3.5a2 2 0 010 4H9V9zM9 13h4l3 3"/></svg>
          </a>
        </div>
      </div>
      <div>
        <?php if (is_active_sidebar('footer-2')) {
            dynamic_sidebar('footer-2');
        } else { ?>
          <div class="footer-col-head">About</div>
          <?php
          wp_nav_menu(array(
              'theme_location' => 'footer-about',
              'menu_class'     => 'footer-links',
              'container'      => false,
              'fallback_cb'    => false,
              'depth'          => 1,
          ));
          ?>
        <?php } ?>
      </div>
      <div>
        <?php if (is_active_sidebar('footer-3')) {
            dynamic_sidebar('footer-3');
        } else { ?>
          <div class="footer-col-head">Services</div>
          <?php
          wp_nav_menu(array(
              'theme_location' => 'footer-services',
              'menu_class'     => 'footer-links',
              'container'      => false,
              'fallback_cb'    => false,
              'depth'          => 1,
          ));
          ?>
        <?php } ?>
      </div>
      <div>
        <?php if (is_active_sidebar('footer-4')) {
            dynamic_sidebar('footer-4');
        } else { ?>
          <div class="footer-col-head">Contact</div>
          <div class="footer-contact">
            <div class="footer-contact-item">
              <div class="footer-contact-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.22 1.18 2 2 0 012.22 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.08 6.08l1.27-.66a2 2 0 012.11.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
              </div>
              <div class="footer-contact-text">
                <strong>Call Us</strong>
                <a href="tel:+447961663116">+44 (0) 79 6166 3116</a>
              </div>
            </div>
            <div class="footer-contact-item">
              <div class="footer-contact-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
              </div>
              <div class="footer-contact-text">
                <strong>Visit Us</strong>
                <span>2 Aspen Road, High Wycombe<br>HP10 9FA, United Kingdom</span>
              </div>
            </div>
            <div class="footer-contact-item">
              <div class="footer-contact-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg>
              </div>
              <div class="footer-contact-text">
                <strong>Online</strong>
                <a href="https://autismconsultancyservices.co.uk" target="_blank">autismconsultancy<br>services.co.uk</a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <hr class="footer-divider">
  <div class="container">
    <div class="footer-bottom">
      <div class="footer-bottom-copy">
        <span>&copy; 2007–<?php echo date('Y'); ?> Autism Consultancy Services Ltd</span>
        <span class="footer-bottom-mark"></span>
        <span>All Rights Reserved</span>
      </div>
      <div style="display:flex;align-items:center">
        <div class="footer-bottom-links">
          <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy Policy</a>
          <a href="<?php echo esc_url(home_url('/sitemap/')); ?>">Sitemap</a>
        </div>
        <div class="footer-back-top" onclick="window.scrollTo({top:0,behavior:'smooth'})" aria-label="Back to top">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 15l-6-6-6 6"/></svg>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo is_single() || is_page() ? wp_strip_all_tags(get_the_excerpt()) : get_bloginfo('description'); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="announcement-bar" id="annBar">
  ACS delivers expert ABA therapy &amp; training across the UK, Europe, Middle East &amp; globally — <a href="<?php echo esc_url(home_url('/contact-us/')); ?>">Get in touch today</a>
</div>

<nav id="mainNav">
  <div class="nav-inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
      <img src="https://darkseagreen-stinkbug-382389.hostingersite.com/wp-content/uploads/2026/06/ACS-768x426.png" alt="Autism Consultancy Services Ltd" style="height:64px;width:auto">
    </a>
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class'     => 'nav-links',
        'container'      => false,
        'fallback_cb'    => 'acs_primary_menu_fallback',
        'depth'          => 2,
    ));
    ?>
    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="nav-cta">Book a Consultation</a>
    <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<div class="nav-offcanvas" id="navOffcanvas">
  <div class="offcanvas-header">
    <button class="offcanvas-close" id="offcanvasClose" aria-label="Close menu">
      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 4l10 10M14 4L4 14"/></svg>
    </button>
  </div>
  <div class="offcanvas-body">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class'     => 'offcanvas-links',
        'container'      => false,
        'fallback_cb'    => 'acs_offcanvas_menu_fallback',
        'depth'          => 2,
    ));
    ?>
    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="offcanvas-cta">Book a Consultation</a>
  </div>
</div>
<div class="offcanvas-backdrop" id="offcanvasBackdrop"></div>

<?php
function acs_primary_menu_fallback() {
    ?>
    <ul class="nav-links">
      <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
      <li class="menu-item-has-children">
        <a href="<?php echo esc_url(home_url('/about-us/')); ?>">About Us</a>
        <ul class="sub-menu">
          <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>">About Us</a></li>
          <li><a href="<?php echo esc_url(home_url('/about-christos-and-associates/')); ?>">About Christos &amp; Associates</a></li>
          <li><a href="<?php echo esc_url(home_url('/list-of-publications/')); ?>">List of Publications</a></li>
        </ul>
      </li>
      <li class="menu-item-has-children">
        <a href="#">Services</a>
        <ul class="sub-menu">
          <li><a href="<?php echo esc_url(home_url('/assessment-and-evaluation/')); ?>">Assessment &amp; Evaluation</a></li>
          <li><a href="<?php echo esc_url(home_url('/training-and-workshops/')); ?>">Training &amp; Workshops</a></li>
          <li><a href="<?php echo esc_url(home_url('/home-based-aba-programmes/')); ?>">Home-Based ABA</a></li>
          <li><a href="<?php echo esc_url(home_url('/school-based-aba-programmes/')); ?>">School-Based ABA</a></li>
          <li><a href="<?php echo esc_url(home_url('/telehealth-aba-programmes/')); ?>">TeleHealth ABA</a></li>
          <li><a href="<?php echo esc_url(home_url('/for-parents/')); ?>">For Parents</a></li>
          <li><a href="<?php echo esc_url(home_url('/powerpoint-presentations/')); ?>">Presentations</a></li>
          <li><a href="<?php echo esc_url(home_url('/rbt-training/')); ?>">Video Library</a></li>
        </ul>
      </li>
      <li><a href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact Us</a></li>
    </ul>
    <?php
}

function acs_offcanvas_menu_fallback() {
    ?>
    <ul class="offcanvas-links">
      <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
      <li class="menu-item-has-children">
        <a href="<?php echo esc_url(home_url('/about-us/')); ?>">About Us</a>
        <ul class="sub-menu">
          <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>">About Us</a></li>
          <li><a href="<?php echo esc_url(home_url('/about-christos-and-associates/')); ?>">About Christos &amp; Associates</a></li>
          <li><a href="<?php echo esc_url(home_url('/list-of-publications/')); ?>">List of Publications</a></li>
        </ul>
      </li>
      <li class="menu-item-has-children">
        <a href="#">Services</a>
        <ul class="sub-menu">
          <li><a href="<?php echo esc_url(home_url('/assessment-and-evaluation/')); ?>">Assessment &amp; Evaluation</a></li>
          <li><a href="<?php echo esc_url(home_url('/training-and-workshops/')); ?>">Training &amp; Workshops</a></li>
          <li><a href="<?php echo esc_url(home_url('/home-based-aba-programmes/')); ?>">Home-Based ABA</a></li>
          <li><a href="<?php echo esc_url(home_url('/school-based-aba-programmes/')); ?>">School-Based ABA</a></li>
          <li><a href="<?php echo esc_url(home_url('/telehealth-aba-programmes/')); ?>">TeleHealth ABA</a></li>
          <li><a href="<?php echo esc_url(home_url('/for-parents/')); ?>">For Parents</a></li>
          <li><a href="<?php echo esc_url(home_url('/powerpoint-presentations/')); ?>">Presentations</a></li>
          <li><a href="<?php echo esc_url(home_url('/rbt-training/')); ?>">Video Library</a></li>
        </ul>
      </li>
      <li><a href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact Us</a></li>
    </ul>
    <?php
}

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Made by MUHAMMED SHARIQ - https://mshariqq.github.io @ digital hereos -->
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo is_single() || is_page() ? wp_strip_all_tags(get_the_excerpt()) : get_bloginfo('description'); ?>">
<title><?php echo esc_html(wp_get_document_title()); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
$ann_visible  = get_theme_mod('acs_announcement_visible', true);
$ann_text_raw = get_theme_mod('acs_announcement_text', 'ACS delivers expert ABA therapy & training across the UK, Europe, Middle East & globally — <a href="{{url}}">Get in touch today</a>');
$ann_url      = get_theme_mod('acs_announcement_url', home_url('/contact-us/'));
$ann_text     = str_replace('{{url}}', esc_url($ann_url), wp_kses_post($ann_text_raw));

$logo_id     = get_theme_mod('acs_logo_image', 0);
$logo_url    = $logo_id ? wp_get_attachment_image_url($logo_id, 'full') : 'https://darkseagreen-stinkbug-382389.hostingersite.com/wp-content/uploads/2026/06/ACS-768x426.png';
$logo_w      = get_theme_mod('acs_logo_width', '');
$logo_h      = get_theme_mod('acs_logo_height', '128');
$logo_style  = '';
if ($logo_w) { $logo_style .= "width:{$logo_w}px;"; }
if ($logo_h) { $logo_style .= "height:{$logo_h}px;"; }
if (!$logo_w && !$logo_h) { $logo_style = 'height:128px;width:auto'; }

$social_links = array(
    'twitter'      => array(
        'url'   => get_theme_mod('acs_social_twitter', 'https://x.com/ACS_London'),
        'label' => 'X (Twitter)',
        'path'  => 'M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z',
    ),
    'linkedin'     => array(
        'url'   => get_theme_mod('acs_social_linkedin', 'https://www.linkedin.com/in/bcba-aba-autism-uk-saudi/'),
        'label' => 'LinkedIn',
        'path'  => 'M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z',
    ),
    'facebook'     => array(
        'url'   => get_theme_mod('acs_social_facebook', 'https://www.facebook.com/ChristosACS/'),
        'label' => 'Facebook',
        'path'  => 'M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z',
    ),
    'researchgate' => array(
        'url'   => get_theme_mod('acs_social_researchgate', 'https://www.researchgate.net/profile/Christos-Nikopoulos'),
        'label' => 'ResearchGate',
        'path'  => 'M17.867 9.742a4.377 4.377 0 01-1.176-.137 4.128 4.128 0 01-.836-.315 3.923 3.923 0 01-.644-.398 3.352 3.352 0 01-.48-.484 3.014 3.014 0 01-.332-.54c-.087-.2-.14-.412-.156-.633v-.02c0-.27.059-.516.176-.742.117-.226.278-.418.48-.574.203-.156.442-.281.715-.375.274-.094.563-.152.867-.176h.973c.266.012.523.066.773.164.25.098.469.235.656.41.188.175.335.383.442.625.106.242.16.508.16.797v.02c0 .274-.059.52-.176.742-.118.223-.28.414-.485.57-.204.157-.442.282-.715.376a2.82 2.82 0 01-.863.175h-.09v.001zm-.043 1.348c.39 0 .762-.05 1.117-.152.355-.101.672-.254.95-.457.277-.203.5-.46.668-.77.168-.309.252-.675.252-1.098v-.04c0-.426-.088-.793-.266-1.101a1.94 1.94 0 00-.7-.734 2.372 2.372 0 00-.98-.355 4.52 4.52 0 00-1.078-.125h-1.778c-.39 0-.757.055-1.101.164a2.815 2.815 0 00-.922.485 2.352 2.352 0 00-.633.808c-.156.317-.234.68-.234 1.09v.04c0 .414.078.78.234 1.097.156.317.355.587.597.809.242.222.515.394.82.515.304.122.61.183.917.183h.246v-1.84h-.309c-.242 0-.445-.063-.609-.188a.601.601 0 01-.246-.476v-.02c0-.203.082-.363.246-.48.164-.118.367-.176.609-.176h1.875c.23 0 .426.059.586.176.16.118.24.278.24.48v.02c0 .203-.074.363-.223.48-.148.118-.332.176-.551.176h-.332v1.84zm1.508 2.602l1.008 2.551h-1.547l-.512-1.433-.511 1.433h-1.551l1.011-2.551-1.012-2.562h1.548l.516 1.441.512-1.441h1.547zM4.242 5.035h2.8c.703 0 1.309.121 1.816.363.508.242.898.574 1.172.996.273.422.41.906.41 1.453v.027c0 .547-.137 1.031-.41 1.453-.274.422-.664.754-1.172.996-.507.242-1.113.363-1.816.363h-.808v3.129h-1.992V5.035zm1.992 1.613v2.164h.563c.242 0 .453-.05.633-.152.18-.102.32-.238.422-.41.101-.172.152-.367.152-.586v-.027c0-.219-.05-.414-.152-.586a1.044 1.044 0 00-.422-.41c-.18-.101-.391-.152-.633-.152h-.563zM0 20.157V3.843C0 2.527.5 1.468 1.5.66 2.258.09 3.16 0 4.148 0h15.704c.989 0 1.89.09 2.648.66 1 .809 1.5 1.867 1.5 3.183v16.314c0 1.316-.5 2.375-1.5 3.184-.758.57-1.66.66-2.648.66H4.148c-.989 0-1.89-.09-2.648-.66C.5 22.532 0 21.473 0 20.157zm1.992-11.84v9.397c0 .797.148 1.547.445 2.25.297.703.7 1.308 1.207 1.816.508.508 1.117.91 1.829 1.207.711.297 1.468.445 2.27.445h8.515c.8 0 1.558-.148 2.27-.445.71-.297 1.32-.699 1.828-1.207.508-.508.91-1.113 1.207-1.816.297-.703.445-1.453.445-2.25V8.317c0-.797-.148-1.547-.445-2.25-.297-.703-.699-1.308-1.207-1.816-.508-.508-1.117-.91-1.828-1.207-.712-.297-1.47-.445-2.27-.445H7.742c-.801 0-1.558.148-2.27.445-.71.297-1.32.699-1.828 1.207-.508.508-.91 1.113-1.207 1.816-.297.703-.445 1.453-.445 2.25z',
    ),
);
?>

<?php if ($ann_visible) : ?>
<div class="announcement-bar" id="annBar">
  <div class="ann-bar-inner">
    <div class="ann-bar-text"><?php echo $ann_text; ?></div>
    <div class="ann-bar-social">
      <?php foreach ($social_links as $s) : ?>
        <?php if (!empty($s['url'])) : ?>
        <a href="<?php echo esc_url($s['url']); ?>" 
        target="_blank" 
        rel="noopener" 
        aria-label="<?php echo esc_attr($s['label']); ?>">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="<?php echo esc_attr($s['path']); ?>"/></svg>
        </a>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<?php endif; ?>

<nav id="mainNav">
  <div class="nav-inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
      <img 
      src="<?php echo esc_url($logo_url); ?>" 
      alt="<?php bloginfo('name'); ?>" style="<?php echo esc_attr($logo_style); ?>">
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
        <a href="<?php echo esc_url(home_url('/about-us/')); ?>">About Us <svg class="chevron-icon" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M2 4l4 4 4-4"/></svg></a>
        <ul class="sub-menu">
          <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>">About Us</a></li>
          <li><a href="<?php echo esc_url(home_url('/about-christos-and-associates/')); ?>">About Christos &amp; Associates</a></li>
          <li><a href="<?php echo esc_url(home_url('/list-of-publications/')); ?>">List of Publications</a></li>
        </ul>
      </li>
      <li class="menu-item-has-children">
        <a href="#">Services <svg class="chevron-icon" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M2 4l4 4 4-4"/></svg></a>
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

<?php

function acs_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script',
    ));
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');

    register_nav_menus(array(
        'primary'         => __('Primary Menu', 'acs-theme'),
        'footer-about'    => __('Footer - About', 'acs-theme'),
        'footer-services' => __('Footer - Services', 'acs-theme'),
    ));
}
add_action('after_setup_theme', 'acs_theme_setup');

function acs_elementor_support() {
    if (did_action('elementor/loaded')) {
        add_theme_support('elementor');
        add_theme_support('elementor--container-width', 1200);
    }
}
add_action('after_setup_theme', 'acs_elementor_support');

function acs_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'acs-theme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'acs-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Column 1', 'acs-theme'),
        'id'            => 'footer-1',
        'description'   => __('Footer brand column.', 'acs-theme'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-col-head">',
        'after_title'   => '</div>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Column 2', 'acs-theme'),
        'id'            => 'footer-2',
        'description'   => __('Footer about column.', 'acs-theme'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-col-head">',
        'after_title'   => '</div>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Column 3', 'acs-theme'),
        'id'            => 'footer-3',
        'description'   => __('Footer services column.', 'acs-theme'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-col-head">',
        'after_title'   => '</div>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Column 4', 'acs-theme'),
        'id'            => 'footer-4',
        'description'   => __('Footer contact column.', 'acs-theme'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-col-head">',
        'after_title'   => '</div>',
    ));
}
add_action('widgets_init', 'acs_widgets_init');

function acs_enqueue_assets() {
    wp_enqueue_style('acs-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('acs-theme-google-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap', array(), null);
    wp_enqueue_script('acs-theme-script', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'acs_enqueue_assets');

function acs_body_class($classes) {
    if (is_page()) {
        $template = basename(get_page_template_slug());
        if ($template) {
            $class_name = str_replace(array('template-', '.php'), '', $template);
            $classes[] = $class_name . '-page';
        }
    }
    return $classes;
}
add_filter('body_class', 'acs_body_class');

function acs_custom_logo_class($html) {
    $html = str_replace('custom-logo-link', 'nav-logo', $html);
    $html = str_replace('custom-logo', '', $html);
    return $html;
}
add_filter('get_custom_logo', 'acs_custom_logo_class');

add_filter('show_admin_bar', '__return_false');

/* ─── CONTACT FORM HANDLER ─── */
function acs_handle_contact_form() {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['acs_contact_submit'])) {
        return;
    }

    if (!isset($_POST['acs_contact_nonce']) || !wp_verify_nonce($_POST['acs_contact_nonce'], 'acs_contact_action')) {
        return;
    }

    $name    = isset($_POST['fullName']) ? sanitize_text_field(wp_unslash($_POST['fullName'])) : '';
    $email   = isset($_POST['email']) ? sanitize_email(wp_unslash($_POST['email'])) : '';
    $phone   = isset($_POST['phone']) ? sanitize_text_field(wp_unslash($_POST['phone'])) : '';
    $service = isset($_POST['service']) ? sanitize_text_field(wp_unslash($_POST['service'])) : '';
    $message = isset($_POST['message']) ? sanitize_textarea_field(wp_unslash($_POST['message'])) : '';
    $referer = wp_get_referer() ?: home_url('/contact-us/');

    if (empty($name) || empty($email) || empty($message)) {
        wp_safe_redirect(add_query_arg('acs_sent', '0', $referer));
        exit;
    }

    if (!is_email($email)) {
        wp_safe_redirect(add_query_arg('acs_sent', '0', $referer));
        exit;
    }

    $to        = 'c.nikopoulos@autismconsultancyservices.co.uk';
    $subject   = sprintf('ACS Website Enquiry — %s', $name);
    $email_body = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\n\nMessage:\n$message\n";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ACS Website <no-reply@autismconsultancyservices.co.uk>',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    $sent = wp_mail($to, $subject, $email_body, $headers);

    wp_safe_redirect(add_query_arg('acs_sent', $sent ? '1' : '0', $referer));
    exit;
}
add_action('init', 'acs_handle_contact_form');

/* ─── CUSTOMIZER: TOP BAR & SOCIAL ─── */
function acs_customizer_register($wp_customize) {

    // Section: Logo
    $wp_customize->add_section('acs_logo', array(
        'title'    => __('Logo', 'acs-theme'),
        'priority' => 20,
    ));

    $wp_customize->add_setting('acs_logo_image', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'acs_logo_image', array(
        'label'    => __('Logo Image', 'acs-theme'),
        'section'  => 'acs_logo',
        'mime_type' => 'image',
    )));

    $wp_customize->add_setting('acs_logo_width', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('acs_logo_width', array(
        'label'       => __('Logo Width (px)', 'acs-theme'),
        'description' => __('Leave empty to use native image width.', 'acs-theme'),
        'section'     => 'acs_logo',
        'type'        => 'number',
        'input_attrs' => array('min' => 0, 'step' => 1),
    ));

    $wp_customize->add_setting('acs_logo_height', array(
        'default'           => '128',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('acs_logo_height', array(
        'label'       => __('Logo Height (px)', 'acs-theme'),
        'description' => __('Leave empty for auto height.', 'acs-theme'),
        'section'     => 'acs_logo',
        'type'        => 'number',
        'input_attrs' => array('min' => 0, 'step' => 1),
    ));

    // Section: Top Bar
    $wp_customize->add_section('acs_topbar', array(
        'title'    => __('Top Bar', 'acs-theme'),
        'priority' => 130,
    ));

    $wp_customize->add_setting('acs_announcement_visible', array(
        'default'           => true,
        'sanitize_callback' => 'wp_validate_boolean',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('acs_announcement_visible', array(
        'label'    => __('Show Top Bar', 'acs-theme'),
        'section'  => 'acs_topbar',
        'type'     => 'checkbox',
    ));

    $wp_customize->add_setting('acs_announcement_text', array(
        'default'           => 'ACS delivers expert ABA therapy & training across the UK, Europe, Middle East & globally — <a href="{{url}}">Get in touch today</a>',
        'sanitize_callback' => 'wp_kses_post',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('acs_announcement_text', array(
        'label'       => __('Announcement Text', 'acs-theme'),
        'description' => __('Use {{url}} as placeholder for the link URL set below.', 'acs-theme'),
        'section'     => 'acs_topbar',
        'type'        => 'textarea',
    ));

    $wp_customize->add_setting('acs_announcement_url', array(
        'default'           => home_url('/contact-us/'),
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('acs_announcement_url', array(
        'label'   => __('"Get in touch" Link URL', 'acs-theme'),
        'section' => 'acs_topbar',
        'type'    => 'url',
    ));

    // Section: Social Media
    $wp_customize->add_section('acs_social', array(
        'title'    => __('Social Media', 'acs-theme'),
        'priority' => 131,
    ));

    $socials = array(
        'acs_social_twitter'      => array('label' => 'X (Twitter) URL', 'default' => 'https://x.com/ACS_London'),
        'acs_social_linkedin'     => array('label' => 'LinkedIn URL', 'default' => 'https://www.linkedin.com/in/bcba-aba-autism-uk-saudi/'),
        'acs_social_facebook'     => array('label' => 'Facebook URL', 'default' => 'https://www.facebook.com/ChristosACS/'),
        'acs_social_researchgate' => array('label' => 'ResearchGate URL', 'default' => 'https://www.researchgate.net/profile/Christos-Nikopoulos'),
    );

    foreach ($socials as $key => $data) {
        $wp_customize->add_setting($key, array(
            'default'           => $data['default'],
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ));
        $wp_customize->add_control($key, array(
            'label'   => __($data['label'], 'acs-theme'),
            'section' => 'acs_social',
            'type'    => 'url',
        ));
    }
}
add_action('customize_register', 'acs_customizer_register');

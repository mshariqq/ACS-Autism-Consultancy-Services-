<?php

function acs_theme_setup() {
    add_theme_support('title-tag');
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

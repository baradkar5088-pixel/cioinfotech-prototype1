<?php
if (!defined('ABSPATH')) exit;

function cioinfotech_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 120, 'width' => 300,
        'flex-height' => true, 'flex-width' => true
    ));
    add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption','style','script'));
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'cioinfotech'),
        'footer' => __('Footer Menu', 'cioinfotech')
    ));
}
add_action('after_setup_theme', 'cioinfotech_theme_setup');

function cioinfotech_enqueue_assets() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('cioinfotech-main', get_template_directory_uri() . '/assets/css/main.css', array(), $version);
    wp_enqueue_script('cioinfotech-main', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
}
add_action('wp_enqueue_scripts', 'cioinfotech_enqueue_assets');

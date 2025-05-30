<?php

// Load styles and scripts
function exu_base_enqueue_scripts() {
  // Main stylesheet
  wp_enqueue_style('exu-base-style', get_stylesheet_uri());

  // Optional: Custom CSS
  wp_enqueue_style('exu-base-custom', get_template_directory_uri() . '/assets/css/custom.css');

  // Optional: Custom JS
  wp_enqueue_script('exu-base-script', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'exu_base_enqueue_scripts');

// Theme features
function exu_tier1_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  add_theme_support('custom-logo');

  register_nav_menus(array(
    'main-menu' => __('Main Menu', 'exu-tier1'),
  ));
}
add_action('after_setup_theme', 'exu_tier1_theme_setup');


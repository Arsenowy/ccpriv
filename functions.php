<?php

function ccpriv_theme_support()
{
  // adds dynamic title tag support
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'ccpriv_theme_support');


function ccpriv_menus()
{
  $locations = array(
    'primary' => "Desktop Primary Menu",
    'footer' => "Footer small menu"
  );
  register_nav_menus($locations);
}
add_action('init', 'ccpriv_menus');

// add favicon
function ccpriv_add_favicon()
{
  echo '<link rel="shortcut icon" type="image/png" href="' . get_template_directory_uri() . '/assets/favicon.png" />';
}
add_action('wp_head', 'ccpriv_add_favicon');

// adds dynamic css suport
function ccpriv_register_styles()
{
  $version = wp_get_Theme()->get('Version');
  wp_enqueue_style('ccpriv-style', get_template_directory_uri() . "/style.css", array('ccpriv-bootstrap'), $version, 'all');
  wp_enqueue_style('ccpriv-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css", array(), '5.0.3', 'all');
  wp_enqueue_style('ccpriv-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
  wp_enqueue_style('ccpriv-customCss', get_template_directory_uri() . "/assets/css/main.css", '', $version, 'all');
}
add_action('wp_enqueue_scripts', 'ccpriv_register_styles');

// adds dynamic js suport
function ccpriv_register_scripts()
{
  wp_enqueue_script('ccpriv-jquery', 'https://code.jquery.com/jquery-3.6.0.slim.min.js', array(), '3.6.0', true);
  wp_enqueue_script('ccpriv-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', array(), '1', true);
  wp_enqueue_script('ccpriv-script', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'ccpriv_register_scripts');

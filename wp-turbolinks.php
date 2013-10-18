<?php
/*
 * Plugin Name: Turbolinks for WordPress
 */

// Enqueue turbolinks
function wpt_enqueue_turbolinks() {
  $js_file = 'wp-turbolinks.min.js';
  if (WP_DEBUG)
    $js_file = 'wp-turbolinks.js';

  wp_enqueue_script( 'wp-turbolinks', plugin_dir_url(__FILE__) . '/js/' . $js_file, array(), '1.0.0' );
}

// Make sure the turbolinks javascript is enqueued last.
add_action( 'wp_enqueue_scripts', 'wpt_enqueue_turbolinks', 999 );

// Enqueue jquery.turbolinks
// See: https://github.com/kossnocorp/jquery.turbolinks
function wpt_enqueue_jquery_turbolinks() {
  $js_file = 'jquery.turbolinks.min.js';
  if (WP_DEBUG)
    $js_file = 'jquery.turbolinks.js';

  wp_enqueue_script( 'jquery.turbolinks', plugin_dir_url(__FILE__) . '/js/' . $js_file, array( 'jquery' ), '2.1.0' );
}

add_action( 'wp_enqueue_scripts', 'wpt_enqueue_jquery_turbolinks', 1 );

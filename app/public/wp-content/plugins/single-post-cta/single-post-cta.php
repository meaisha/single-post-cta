<?php
/**
* Plugin name: Single Post CTA
* Plugin URI: https://github.com/meaisha/single-post-cta
* Description: Adds sidebar (widget area) to single posts
* Version: 0.1
* Author: Carrie Dils
* License: GPL v2+
* Text Domain: spc 
*/

//If this file is called directly, abort
if ( !defined( 'ABSPATH' ) ) {
  die;
}

/**
 * Load stylesheet
 */
function spc_load_stylesheet() {
  wp_enqueue_style( 'spc-stylesheet', plugin_dir_url(__FILE__) .'spc-styles.css' );
}


// Hook stylesheet
add_action( 'wp_enqueue_scripts', 'spc_load_stylesheet' );
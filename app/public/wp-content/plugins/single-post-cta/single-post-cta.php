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
  if( apply_filters( 'spc_load_styles', true )) {
    if( is_single() )
      p_enqueue_style( 'spc-stylesheet', plugin_dir_url(__FILE__) .'spc-styles.css' );
  }
  
}

// Uncomment the following line to disable stylesheet
//add_filter( 'spc_load_styles', __return_false);


// Hook stylesheet
add_action( 'wp_enqueue_scripts', 'spc_load_stylesheet' );

function spc_register_sidebar() {
  register_sidebar( array(
    'name'          => __( 'Single Post CTA Sidebar', 'spc' ),
    'id'            => 'spc-sidebar',
    'description'   => __( 'Displays widget area on sigle posts', 'spc' ),
    'before_widget' => '<div class="widget spc">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle spc-title">',
    'after_title'   => '</h2>',
  ) );
}

// Hook sidebar
add_action( 'widgets_init', 'spc_register_sidebar' );

// Display sidebar on sigle posts
function spc_display_sidebar( $content ) {
  if( is_single() ) {
    dynamic_sidebar( 'spc-sidebar' );
  }
  return $content;
}

// Add dynamic sidebar
add_filter( 'the_content', 'spc_display_sidebar' );
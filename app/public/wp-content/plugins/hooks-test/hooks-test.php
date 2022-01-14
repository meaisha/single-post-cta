<?php
/**
 * Plugin Name: Hooks Test
 * 
 */

 function hello_world() {
   if( is_admin() )
    echo "Howdy Admin!";
   else
    echo "Hello World!";
 }

 add_action('login_header', 'hello_world');
 add_action('admin_notices', 'hello_world');



 function change_headerurl( $url ) {
  $url = "https://aisha.com";
  return $url;
 }

 add_filter( 'login_headerurl', 'change_headerurl' );
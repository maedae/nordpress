<?php  
  /* Add bootstrap support to the Wordpress theme*/
   
  function theme_add_bootstrap() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/toolkit-minimal.css' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/toolkit.min.js', array(), '3.3.6', true );
  }
   
  add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

?>
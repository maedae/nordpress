<?php  
  /* Add bootstrap support to the Wordpress theme*/
   
  function theme_add_bootstrap() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/toolkit-minimal.css' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'application-script', get_template_directory_uri() . '/js/application.js', array( 'jquery' ));
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array( 'jquery' ) );
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/js/toolkit.js', array( 'jquery' ) );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap-js');
  }
   
  add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );


function register_my_menus() {
  register_nav_menus( array(
    'site-menu' => __( 'Site Menu' ),
    'home-menu' => __( 'Home Menu' ),
    'about-menu' => __( 'About Menu' ),
    'work-menu' => __( 'Work Menu' ),
  ) );
}
add_action( 'init', 'register_my_menus' );
?>
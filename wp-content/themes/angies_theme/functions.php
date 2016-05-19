<?php  
  /* Add bootstrap support to the Wordpress theme*/
   
  function theme_add_bootstrap() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/toolkit-minimal.css' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/js/toolkit.js', array( 'jquery' ) );
    wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery.min.js', array( '' ) );
    wp_register_script( 'application-script', get_template_directory_uri() . '/js/application.min.js', array( '' ));
    wp_enqueue_script( 'bootstrap-js');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'application-script' );
  }
   
  add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );


  if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget' => '</li>',
  'before_title' => '<h2 class="widgettitle">',
  'after_title' => '</h2>',
  ));
  }

  function register_my_menu() {
    register_nav_menu('header-menu',__( 'site_menu' ));
  }
  add_action( 'init', 'register_my_menu' );

?>


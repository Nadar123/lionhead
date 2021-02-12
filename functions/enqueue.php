<?php

  function twentytwenty_child_css() {
    $directory_uri = esc_url( get_stylesheet_directory_uri() );

    wp_deregister_style( 'styles-child' );
    wp_deregister_style( 'wp-block-library' );
    wp_deregister_style( 'twentytwenty-print-style' );

    wp_register_style( 'main-style-child', esc_url( get_stylesheet_directory_uri() ) . '/build/css/style.css', array(),time() );
    wp_enqueue_style( 'main-style-child' );

    wp_register_style( 'lu_animate', $directory_uri. '/assets/css/animate.css', array(), time());
    wp_enqueue_style( 'lu_animate' );

     wp_register_style( 'lu_bulma',  $directory_uri. '/assets/css/bulma/css/bulma.min.css');
    wp_enqueue_style( 'lu_bulma' );


    wp_register_style( 'lu_font_awesome', $directory_uri. '/assets/css/font-awesome.min.css');
    wp_enqueue_style( 'lu_font_awesome' );
    
    wp_register_style( 'lu_lato_font', "https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap");
    wp_enqueue_style( 'lu_lato_font' );

    wp_register_style( 'slick_css', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css");
    wp_enqueue_style( 'slick_css' );
  
  }

  add_action( 'wp_enqueue_scripts', 'twentytwenty_child_css', 1001 );

  function load_js () {

    wp_register_script('slick_js', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" , array('jquery'), '1.0.0', true);
    wp_enqueue_script('slick_js');

    wp_register_script('custom', esc_url( get_stylesheet_directory_uri() ) . '/assets/js/app.js', array('jquery'), '1.0.0', true);
    $site_settings = array(
      'ajaxurl' => admin_url( 'admin-ajax.php' ),
      'page_id' => get_the_ID()
    );
    wp_localize_script( 'custom', 'site_settings', $site_settings );
    wp_enqueue_script('custom');

    wp_register_script('jquery-validate-min', esc_url( get_stylesheet_directory_uri() ) . '/assets/js/jquery.validate.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('jquery-validate-min');
  }
  
  add_action('wp_enqueue_scripts', 'load_js');
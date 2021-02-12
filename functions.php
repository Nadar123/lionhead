<?php
  define('LH_DEV_MODE', true);
  get_template_part('functions/enqueue');
  get_template_part('functions/child_helper');
  get_template_part('functions/ajax');


  add_action('after_setup_theme', 'lh_setup_theme');

  function lh_setup_theme () {
    register_nav_menu('main_menu', __('Main Menu', 'lionhead') );
  }
//great
  function custom_class_body ($class) {
    if(site_url('') ){
      $class[] = 'nadar';
    }
    return $class;
  }
  add_filter('body_class', 'custom_class_body');

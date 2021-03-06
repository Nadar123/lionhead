<?php

add_action('wp_ajax_nopriv_handle_ajax_form', 'handle_ajax_form');
add_action('wp_ajax_handle_ajax_form','handle_ajax_form');

function handle_ajax_form(){
  $response = array( 'msg' => array() );

  if( empty( $_POST['first_name']) ){
    $response['msg'][] = 'First Name is required';
  } 
  if( empty( $_POST['last_name']) ){
    $response['msg'][] = 'Last name is required';
  }
  if(empty( $_POST['email']) || ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $response['msg'][] = 'Email is required';
  }
  else{
    $response['msg'][] = "Thank you Plz wait..."; 
    $response['redirect'] = 'https://google.co.il';
  } 
  wp_send_json($response);
}
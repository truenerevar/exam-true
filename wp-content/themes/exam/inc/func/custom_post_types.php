<?php

/**
 * Register custom post types.
 */

function register_welcome() {
  $args = array(
    'public' => true,
    'label'  => 'Welcome',
    'menu_icon' => 'dashicons-editor-paste-word',
    'supports' => array( 'title', 'editor', 'thumbnail' )
  );
  register_post_type( 'welcome', $args );
}
add_action( 'init', 'register_welcome' );

function register_about() {
  $args = array(
    'public' => true,
    'label'  => 'About',
    'menu_icon' => 'dashicons-editor-textcolor',
    'supports' => array( 'title', 'editor', 'thumbnail' )
  );
  register_post_type( 'about', $args );
}
add_action( 'init', 'register_about' );


function register_clients_slider() {
  $args = array(
    'public' => true,
    'label'  => 'Clients-slider',
    'menu_icon' => 'dashicons-images-alt',
    'supports' => array( 'title', 'thumbnail' )
  );
  register_post_type( 'clients_slider', $args );
}
add_action( 'init', 'register_clients_slider' );

function register_services() {
  $args = array(
    'public' => true,
    'label'  => 'Services',
    'menu_icon' => 'dashicons-admin-generic',
    'supports' => array( 'title', 'editor', 'thumbnail' )
  );
  register_post_type( 'services', $args );
}
add_action( 'init', 'register_services' );

function register_portfolio() {
  $args = array(
    'public' => true,
    'label'  => 'Portfolio',
    'menu_icon' => 'dashicons-portfolio',
    'supports' => array( 'title', 'thumbnail' )
  );
  register_post_type( 'portfolio', $args );
}
add_action( 'init', 'register_portfolio' );
?>
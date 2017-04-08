<?php

/**
 * Register customize color scheme.
 */


/**
 *  Register customize section to control display main sections.
 */
add_action('customize_register', function($customizer){
  $customizer->add_section(
    'display_controls',
    array(
      'title' => __('Displayed sections'),
      'description' => __('Select displayed sections'),
      'priority' => 11,
      )
    );

  // Welcome section
  $customizer->add_setting('display_welcome_section');
  $customizer->add_control(
    'display_welcome_section',
    array(
      'type' => 'checkbox',
      'label' => __('Welcome'),
      'section' => 'display_controls',
      'priority' => 1
    )
  );

  // Call to action section
  $customizer->add_setting('display_about');
  $customizer->add_control(
    'display_about_section',
    array(
      'type' => 'checkbox',
      'label' => __('About'),
      'section' => 'display_controls',
      'priority' => 2
    )
  );

  // Team section
  $customizer->add_setting('display_offering_section');
  $customizer->add_control(
    'display_offering_section',
    array(
      'type' => 'checkbox',
      'label' => __('Offring'),
      'section' => 'display_controls',
      'priority' => 3
    )
  );

  // Service section
  $customizer->add_setting('display_portfolio_section');
  $customizer->add_control(
    'display_portfolio_section',
    array(
      'type' => 'checkbox',
      'label' => __('Portfolio'),
      'section' => 'display_controls',
      'priority' => 4
    )
  );
});


?>
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

  // About section
  $customizer->add_setting('display_about_section');
  $customizer->add_control(
    'display_about_section',
    array(
      'type' => 'checkbox',
      'label' => __('About us'),
      'section' => 'display_controls',
      'priority' => 1
    )
  );

  // Call to action section
  $customizer->add_setting('display_services_section');
  $customizer->add_control(
    'display_services_section',
    array(
      'type' => 'checkbox',
      'label' => __('Services'),
      'section' => 'display_controls',
      'priority' => 2
    )
  );

  // Team section
  $customizer->add_setting('display_clients_section');
  $customizer->add_control(
    'display_clients_section',
    array(
      'type' => 'checkbox',
      'label' => __('Clients'),
      'section' => 'display_controls',
      'priority' => 3
    )
  );

  // Service section
  $customizer->add_setting('display_service_section');
  $customizer->add_control(
    'display_service_section',
    array(
      'type' => 'checkbox',
      'label' => __('Service'),
      'section' => 'display_controls',
      'priority' => 4
    )
  );

  // News section
  $customizer->add_setting('display_news_section');
  $customizer->add_control(
    'display_news_section',
    array(
      'type' => 'checkbox',
      'label' => __('News'),
      'section' => 'display_controls',
      'priority' => 5
    )
  );

  // Partners section
  $customizer->add_setting('display_partners_section');
  $customizer->add_control(
    'display_partners_section',
    array(
      'type' => 'checkbox',
      'label' => __('Partners'),
      'section' => 'display_controls',
      'priority' => 6
    )
  );

});

/**
 * Register header settings.
 */

add_action('customize_register', function($customizer){
  $customizer->add_section(
      'sourced_data',
      array(
          'title' => 'Main info',
          'priority' => 12,
      )
  );

  // Add a telephones
  $customizer->add_setting(
      'telephones',
      array('default' => '+#### #### ###')
  );

  $customizer->add_control(
      'telephones',
      array(
          'label' => 'Telephone',
          'section' => 'sourced_data',
          'type' => 'text',
      )
  );

  // Add a facebook link
  $customizer->add_setting(
      'facebook_link',
      array('default' => 'http://facebook.com/')
  );

  $customizer->add_control(
      'facebook_link',
      array(
          'label' => 'Facebook',
          'section' => 'sourced_data',
          'type' => 'text',
      )
  );

  // Add a google link
  $customizer->add_setting(
      'google_link',
      array('default' => 'http://google.com/')
  );

  $customizer->add_control(
      'google_link',
      array(
          'label' => 'Google+',
          'section' => 'sourced_data',
          'type' => 'text',
      )
  );

  // Add a twitter link
  $customizer->add_setting(
      'twitter_link',
      array('default' => 'http://twitter.com/')
  );

  $customizer->add_control(
      'twitter_link',
      array(
          'label' => 'Twitter',
          'section' => 'sourced_data',
          'type' => 'text',
      )
  );

  // Add a linkedin link
  $customizer->add_setting(
      'linkedin_link',
      array('default' => 'http://linkedin.com/')
  );

  $customizer->add_control(
      'linkedin_link',
      array(
          'label' => 'Linkedin',
          'section' => 'sourced_data',
          'type' => 'text',
      )
  );
});


?>
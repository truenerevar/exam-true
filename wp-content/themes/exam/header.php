<?php
/**
 * The header for theme-template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-template
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">

  <title><?php the_title()?></title>
  <meta name="description" content="">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="shortcut icon" href="<?php echo (get_template_directory_uri()); ?>/assets/img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php echo (get_template_directory_uri()); ?>/assets/img/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo (get_template_directory_uri()); ?>/assets/img/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo (get_template_directory_uri()); ?>/assets/img/favicon/apple-touch-icon-114x114.png">

  <?php wp_head(); ?>
</head>
<header class="main-header">
  <div class="container clearfix media-indent">
    <a class="logo" href="#"><img src="<?php echo (get_template_directory_uri()); ?>/assets/img/logo.png" alt="logo"></a>
    <nav class="primary-nav">
      <i class="menu-toggle fa fa-bars fa-2x" aria-hidden="true"></i>
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary' ) ); ?>
    </nav>
  </div>
</header>
<body>
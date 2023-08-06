<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="/~gcheng/mmda324/final/wp-content/themes/final_theme/images/favicon.ico">
    <?php wp_head(); ?>  
</head>
<body <?php body_class(); ?>>
  <header>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sara-dubler-Koei.jpeg" alt="Shangri-La Resort">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="Shangri-La Resort">
    <?php get_search_form(); ?>
    <?php wp_nav_menu(array('theme_location' => 'header-menu','container' => 'nav','container_id'=> 'main-navigation'));?>
  </header>
  <main>
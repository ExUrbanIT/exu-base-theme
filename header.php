<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <h1><a href="<?php echo home_url(); ?>">ExUrban Base Theme</a></h1>
  <nav>
    <?php
      wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'container' => false
      ));
    ?>
  </nav>
</header>

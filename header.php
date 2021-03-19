<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">



<?php wp_head(); ?>
  <title><?php get_bloginfo(); ?></title>
</head>

<body <?php body_class(); ?>>

  <div class="main-container">

    <div class="header-container">
      
      <div class="logo"><?php the_custom_logo(); ?></div>
      <div class="nav-container">
        <a href="#" id="menu-icon"></a>
        <!-- <ul class="nav__list">
          <li class="main-nav__item main-nav_-curent">
            <a href="#" class="main-nav__link">Our Company</a>
          </li>
          <li class="main-nav__item">
            <a href="#" class="main-nav__link">Locations</a>
          </li>
          <li class="main-nav__item">
            <a href="#" class="main-nav__link">Contact</a>
          </li>
        </ul> -->
        <?php wp_nav_menu( array (
          'theme_location' => 'header-menu',
          'container_class' => 'nav'
        )); 

        if ( function_exists('has_nav_menu') && has_nav_menu('mobile-menu') ) {
          wp_nav_menu( array(
            'depth' => 6,
            'sort_column' => 'menu_order',
            'container' => 'ul',
            'menu_id' => 'main-nav',
            'menu_class' => 'nav mobile-menu',
            'theme_location' => 'mobile-menu'
          ) );
          } else {
             echo "<ul class='nav mobile-menu'> <font style='color:red'>Mobile Menu has not been set</font> </ul>";
      }
        ?>
      </div>
    </div>
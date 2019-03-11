<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <a href="#" class="logo">
        <img src="#" alt="logo">
    </a>
    <nav class="menu">
        <div class="menu__icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu',
                                  'menu_class' => 'menu__links',
                                    'container' => 'false',

            ) ); ?>
        <!--<ul class="menu__links">
            <li class="links-block"><a class="menu__links-item_home menu__links-item" href="<?php /*echo get_home_url() */?>">головна</a></li>
            <li class="links-block"><a class="menu__links-item_service menu__links-item" href="<?php /*echo get_permalink(63) */?>">блог</a></li>
            <li class="links-block"><a class="menu__links-item_about menu__links-item" href="">About</a></li>
            <li class="links-block"><a class="menu__links-item_work menu__links-item" href="">Work</a></li>
            <li class="links-block"><a class="menu__links-item_contact menu__links-item" href="">Contacts</a></li>
        </ul>-->
    </nav>
</header>
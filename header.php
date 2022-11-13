<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <title><?php bloginfo("name"); ?>, <?php bloginfo("language"); ?></title> -->
    <title><?php wp_title(); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- styles -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header">
    <div class="header__info">
        <div class="header__icon">
            <ion-icon name="call-outline"></ion-icon>
        </div>
        <span class="info__text">+38 (067) 38-347-38</span>
    </div>
    <img src="<?php echo get_option('logotype_image'); ?>" class="header__logo">
    <div class="header__info">
        <div class="header__icon">
            <ion-icon name="mail-outline"></ion-icon>
        </div>
        <span class="info__text">shevchuk.ria@gmail.com</span>
    </div>
</header>
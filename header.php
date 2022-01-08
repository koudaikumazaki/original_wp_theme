<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '|', true, 'right' );?><?php bloginfo('name'); ?></title>
        
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" >
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skeleton.css" >
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" >
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/original-portforio.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="logoHamburger">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/sp_logo.png" alt="トップページへ戻る"></a>
                </div>
                <div class="hamburgerMenu">
                    <span class="hamburger__line hamburger__line--1"></span>
                    <span class="hamburger__line hamburger__line--2"></span>
                    <span class="hamburger__line hamburger__line--3"></span>
                </div>
            </div>
            <nav class="spNavi">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
                    <li><a href="<?php echo esc_url(home_url('/profile/')); ?>">PROFILE</a></li>
                    <li><a href="<?php echo esc_url(home_url('/work/')); ?>">WORK</a></li>
                    <li><a href="<?php echo esc_url(home_url('/skill/')); ?>">SKILL</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">BLOG</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a></li>
                </ul>
            </nav>
            
        </header>
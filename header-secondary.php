<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo('charset');?>">
    <title><?php wp_title('')?></title>
    <meta name="description" content="Sistema Integrado de Control de Estudios WEB 2.0 para Unidades Educativas y Universidad">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="application-name" content="Rodolfo Rivera">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-TileColor" content="#4080ff">
    <meta name="msapplication-TileImage" content="images/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#4080ff">
    <meta name="description" content="">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <noscript>
      <!-- Redirect to another page -->
      <h2>Este sitio web necesita tener activado Javascript,</h2>
    </noscript>
    <!-- Open graph -->
    <style>

        :root{
          --Amarillo: #FFBE00;
          --Azul: #007FFF;
          --Blanco: #FFBE00;
          --Negro: #242437;
        }


         .custom-logo{
            position: absolute;
            vertical-align: middle;
            left: 10%;
            margin-top: -10px;
            max-width: 50px;
            border-radius: 50%;
        }
        body{
            background-image: url("<?php echo get_template_directory_uri() . '/assets/img/bg.svg'?>");
        }
    </style>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head() ?>
</head>
<body>
	<header class="header">
        <div class="hamburger-container">
            <div id="hamburger-menu" class="hamburger-menu left-side">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
        </div>

        <?php if ( has_nav_menu( 'main' ) ) : ?>
            <nav class="header-menu" aria-label="<?php esc_attr_e( 'Menu Principal', 'rodolfo_rivera' ); ?>">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main',
                            'menu_class'     => 'menu',
                            'depth'          => 2
                        )
                    );
                ?>
            </nav><!-- .footer-navigation -->
        <?php endif; ?>

	</header>

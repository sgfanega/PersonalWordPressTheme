<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Steve Fanega II <?php wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class();?>>

    <header>
        <!-- This is the main-navigation -->
        <div class="container d-flex justify-content-center">
            <?php 
                if (has_nav_menu('top-menu')) {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                            'menu_class' => 'top-menu'
                        )
                    );
                }
            ?>
        </div>
        
        <!-- This is the responsive-menu-navigation -->      
        <nav class="navbar navbar-expand-lg  d-flex justify-content-start">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-content">
                <?php
                    if (has_nav_menu('mobile-menu')) {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'mobile-menu',
                                'menu_class' => 'mobile-menu'
                            )
                        );
                    }
                ?>
        </nav>
    </header>

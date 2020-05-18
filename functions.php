<?php

    function load_stylesheets()
    {
        wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
        wp_enqueue_style('stylesheet');

        wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all');
        wp_enqueue_style('custom');
    }
    add_action('wp_enqueue_scripts', 'load_stylesheets');
    
    function load_javascript()
    {
        wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
        wp_enqueue_script('custom');

    }
    add_action('wp_enqueue_scripts', 'load_javascript');

    // Add Menus
    add_theme_support('menu');

    // Register Menu
    register_nav_menus(
        [
            'top-menu' => 'Top Menu',
            'footer-menu' => 'Footer Menu',
            'mobile-menu' => 'Mobile Menu'
        ]
    );

    // Add Custom-Background
    add_theme_support('custom-background', [
        'default-image'             => '',
        'default-preset'            => 'default',
        'default-position-x'        => 'left',
        'default-position-y'        => 'top',
        'default-size'              => 'auto',
        'default-repeat'            => 'no-repeat',        
        'default-color'             => '#fff',
        'default-filter'            => 'brightness(50%)',
        'wp-head-callback'          => '_custom_background_cb',
        'admin-head-callback'       => '',
        'admin-preview-callback'    => ''
        ]
    );
    
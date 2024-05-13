<?php

/**
 * Support
 */
function douille_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}

/**
 * Précise ce qu'on rajoute 
 */
function douille_register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

/**
 * 
 */
function douille_menu_class($classes): array
{
    $classes[] = 'nav-item';
    return $classes;
}

/**
 * 
 */
function douille_menu_link_class($attrs): array
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}

add_action('wp_enqueue_scripts', 'douille_register_assets');
add_action('after_setup_theme', 'douille_theme_support');

add_filter('nav_menu_css_class', 'douille_menu_class');
add_filter('nav_menu_link_attributes', 'douille_menu_link_class');

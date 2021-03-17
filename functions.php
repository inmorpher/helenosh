<?php

add_action('wp_enqueue_scripts', 'helenosh_scripts');
add_action('after_setup_theme', 'helenosh_setup');
add_action('init', 'helenosh_post_types');
add_filter('script_loader_tag', 'mihdan_add_async_attribute', 10, 2);
add_image_size('avatar_thumb', 50, 50, false);


function helenosh_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js');
}

function helenosh_setup()
{
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['script', 'style']);
    register_nav_menu('main-menu', 'Меню');
}

function mihdan_add_async_attribute($tag, $handle)
{
    if ('script' !== $handle) {
        return $tag;
    }
    return str_replace(' src', ' defer="defer" src', $tag);
}

function helenosh_post_types()
{
    $masterLabels = array(
        'name' => _x('Мастер', 'post type general name'),
        'singular_name' => _x('Мастер', 'post type singular name')
    );

    $equipmentLabels = array(
        'name' => _x('Аппарат', 'post type general name'),
        'singular_name' => _x('Аппарат', 'post type general name')
    );

    $reviewLabels = array(
        'name' => _x('Обзор', 'post type general name'),
        'singular_name' => _x('Обзор', 'post type general name')
    );

    $commentsLabels = array(
        'name' => _x('Отзывы', 'post type general name'),
        'singular_name' => _x('Отзывы', 'post type general name')
    );


    $masterArgs = array(
        'labels' => $masterLabels,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-users',
        'description' => 'Master post type',
        'public' => true,
        'show_in_admin_bar' => true,
        'supports' => array('title', 'editor')
    );

    $equipmentArgs = array(
        'labels' => $equipmentLabels,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-generic',
        'description' => 'Master post type',
        'public' => true,
        'show_in_admin_bar' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    );

    $reviewArgs = array(
        'labels' => $reviewLabels,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-format-aside',
        'description' => 'Master post type',
        'public' => true,
        'show_in_admin_bar' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    );

    $commentsArgs = array(
        'labels' => $commentsLabels,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-admin-comments',
        'description' => 'Master post type',
        'public' => true,
        'show_in_admin_bar' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('master', $masterArgs);
    register_post_type('equipment', $equipmentArgs);
    register_post_type('review', $reviewArgs);
    register_post_type('comments', $commentsArgs);
}

<?php

/**
 * Agloma Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package agloma
 * @since 1.0.0
*/

function enqueue_styles_and_scripts()
{
    wp_register_style('child-style-wpk', get_stylesheet_directory_uri() . '/assets/css/build/main.min.css', false, '1.0.0');
    wp_enqueue_style('child-style-wpk');

    wp_register_script(
        'site-main-js-wpk',
        get_stylesheet_directory_uri() . '/assets/js/build/app.min.js',
        array('jquery'),
        null,
        true
    );
    $translation_array = array();
    wp_localize_script('site-main-js-wpk', 'frontend_fields', $translation_array);
    wp_enqueue_script('site-main-js-wpk');
}
add_action('wp_enqueue_scripts', 'enqueue_styles_and_scripts', 100);

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
  
function fix_svg() {
    echo '<style type="text/css">
    .attachment-266x266, .thumbnail img {
        width: 100% !important;
        height: auto !important;
    }
    </style>';
}
add_action('admin_head', 'fix_svg');

function create_activitats_cpt() {
    $labels = array(
        'name' => _x('Activitats', 'Post Type General Name', 'textdomain'),
        'singular_name' => _x('Activitat', 'Post Type Singular Name', 'textdomain'),
        'menu_name' => __('Activitats', 'textdomain'),
        'name_admin_bar' => __('Activitat', 'textdomain'),
        'archives' => __('Archivo de Activitats', 'textdomain'),
        'attributes' => __('Atributos de Activitat', 'textdomain'),
        'parent_item_colon' => __('Actividad principal:', 'textdomain'),
        'all_items' => __('Todas las Activitats', 'textdomain'),
        'add_new_item' => __('Añadir nueva Activitat', 'textdomain'),
        'add_new' => __('Añadir nueva', 'textdomain'),
        'new_item' => __('Nueva Activitat', 'textdomain'),
        'edit_item' => __('Editar Activitat', 'textdomain'),
        'update_item' => __('Actualizar Activitat', 'textdomain'),
        'view_item' => __('Ver Activitat', 'textdomain'),
        'view_items' => __('Ver Activitats', 'textdomain'),
        'search_items' => __('Buscar Activitat', 'textdomain'),
        'not_found' => __('No se encontraron Activitats', 'textdomain'),
        'not_found_in_trash' => __('No se encontraron Activitats en la papelera', 'textdomain'),
        'featured_image' => __('Imagen destacada', 'textdomain'),
        'set_featured_image' => __('Establecer imagen destacada', 'textdomain'),
        'remove_featured_image' => __('Eliminar imagen destacada', 'textdomain'),
        'use_featured_image' => __('Usar como imagen destacada', 'textdomain'),
        'insert_into_item' => __('Insertar en la Activitat', 'textdomain'),
        'uploaded_to_this_item' => __('Subido a esta Activitat', 'textdomain'),
        'items_list' => __('Lista de Activitats', 'textdomain'),
        'items_list_navigation' => __('Navegación de la lista de Activitats', 'textdomain'),
        'filter_items_list' => __('Filtrar lista de Activitats', 'textdomain'),
    );
    $args = array(
        'label' => __('Activitat', 'textdomain'),
        'description' => __('Custom Post Type para Activitats', 'textdomain'),
        'labels' => $labels,
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies' => array('category', 'post_tag'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('activitats', $args);
}

add_action('init', 'create_activitats_cpt', 0);
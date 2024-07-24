<?php
/*
 activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
//  lien pour lier le css enfant//
 wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
// code pour ciblé avec un hook//
function ajouter_lien_admin($items, $args) {
    if (is_user_logged_in() && $args->theme_location == 'primary') {
        $items .= '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'ajouter_lien_admin', 10, 2);

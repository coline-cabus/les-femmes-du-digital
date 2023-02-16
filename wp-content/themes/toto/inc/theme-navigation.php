<?php

function toto_create_menu()
{
    register_nav_menus([
        'primary' => __('top menu', 'toto'),
    ]);
}

add_action('init', 'toto_create_menu');


function toto_navigation_walker()
{
    if ( ! file_exists( get_template_directory() . '/walkers/class-wp-bootstrap-navwalker.php' ) ) {
        return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
    } else {
        require_once get_template_directory() . '/walkers/class-wp-bootstrap-navwalker.php';
    }

    if ( ! file_exists( get_template_directory() . '/walkers/class-wp-stripe-menu-walker.php' ) ) {
        return new WP_Error( 'class-wp-stripe-menu-walker-missing', __( 'It appears the class-wp-stripe-menu-walker.php file may be missing.', 'class-wp-stripe-menu-walker' ) );
    } else {
        require_once get_template_directory() . '/walkers/class-wp-stripe-menu-walker.php';
    }
}

add_action('init', 'toto_navigation_walker');

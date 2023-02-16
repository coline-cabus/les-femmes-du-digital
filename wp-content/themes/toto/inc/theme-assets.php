<?php

function toto_scripts()
{
    $version =  wp_get_theme()['Version'];

    wp_enqueue_style('app-css', get_template_directory_uri() . '/assets/css/app.css');
    wp_enqueue_script('vendor-js', get_template_directory_uri() . '/assets/js/vendor.js#asyncload', array(), $version, true);
    wp_enqueue_script('manifest-js', get_template_directory_uri() . '/assets/js/manifest.js#asyncload', array(), $version, true);
    wp_enqueue_script('app-js', get_template_directory_uri() . '/assets/js/app.js#asyncload', array(), time(), true);
}

add_action('wp_enqueue_scripts', 'toto_scripts');
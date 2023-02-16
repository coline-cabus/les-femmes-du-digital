<?php


function toto_setup_theme_supported_features()
{
    add_theme_support('align-wide');

    add_theme_support('editor-styles');

    add_editor_style( 'style-editor.css' );

    add_editor_style( 'assets/css/app.css' );
}

add_action('after_setup_theme', 'toto_setup_theme_supported_features');

function toto_register_acf_blocks() {

    register_block_type( get_template_directory() . '/template-parts/blocks/hero' );
}
add_action( 'init', 'toto_register_acf_blocks' );

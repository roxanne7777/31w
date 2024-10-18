<?php

function ajouter_style()
{

    wp_enqueue_style(
        'mon_style',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    );
}

add_action('wp_enqueue_scripts', 'ajouter_style');
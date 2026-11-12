<?php
function radio_enqueue_scripts_styles()
{
    wp_enqueue_style("main", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "radio_enqueue_scripts_styles");

function radio_setup_theme()
{
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");

    //Ajout d'un custom header
    add_theme_support("custom-header", [
        'width' => 1920,
        'height' => 1080,
        'flex-width' => true,
        'flex-height' => true
    ]);

    //Ajout d'un custom logo
    add_theme_support("custom-logo", [
        'width' => 532,
        'height' => 532,
        'flex-width' => true,
        'flex-height' => true,
        'unlink-homepage-logo' => true
    ]);

    add_theme_support("html5", [
        "search-form",
        "style",
        "script",
        "meta"
    ]);

    //Enregistrer un Menu
    register_nav_menu("main-menu", _("Menu principal"));
}
add_action("after_setup_theme", "radio_setup_theme");

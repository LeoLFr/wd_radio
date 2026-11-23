<?php

function radio_enqueue_scripts_styles()
{
    wp_enqueue_style(
        "main",
        get_stylesheet_uri(),
        [],
        filemtime(get_stylesheet_directory() . "/style.css")
    );

    $gsap_version = "3.13.0";
    $gsap_cdn = "https://cdn.jsdelivr.net/npm/gsap@" . $gsap_version . "/dist/";

    // GSAP
    wp_enqueue_script("gsap", $gsap_cdn . "gsap.min.js", [], null, true);

    // ScrollTrigger
    wp_enqueue_script("gsap-scrolltrigger", $gsap_cdn . "ScrollTrigger.min.js", ["gsap"], null, true);

    // SplitText
    wp_enqueue_script("gsap-splittext", $gsap_cdn . "SplitText.min.js", ["gsap"], null, true);

    // Custom Ease
    wp_enqueue_script("gsap-customease", $gsap_cdn . "CustomEase.min.js", ["gsap"], null, true);

    wp_enqueue_script(
        "slider",
        get_template_directory_uri() . "/assets/scripts/slider.js",
        ["gsap", "gsap-scrolltrigger", "gsap-splittext"],
        filemtime(get_template_directory() . "/assets/scripts/slider.js"),
        true
    );

    wp_enqueue_script(
        "menu",
        get_template_directory_uri() . "/assets/scripts/menu.js",
        ["gsap", "gsap-splittext", "gsap-customease"],
        filemtime(get_template_directory() . "/assets/scripts/menu.js"),
        true
    );

    wp_enqueue_script(
        "carrousel",
        get_template_directory_uri() . "/assets/scripts/carrousel.js",
        filemtime(get_template_directory() . "/assets/scripts/carrousel.js"),
        true
    );
}

add_action("wp_enqueue_scripts", "radio_enqueue_scripts_styles");

function radio_setup_theme()
{
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");

    // Ajout d'un custom header
    add_theme_support("custom-header", [
        'width' => 1920,
        'height' => 1080,
        'flex-width' => true,
        'flex-height' => true
    ]);

    // Ajout d'un custom logo
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

    register_nav_menu("main-menu", __("Menu principal"));
}
add_action("after_setup_theme", "radio_setup_theme");
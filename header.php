<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<header class="fixed z-99 top-0 w-full">

    <div class="relative z-10 flex justify-between py-3 container">

        <div class="flex items-center">
            <div class="h-12 w-19 object-cover flex items-center bg-beige rounded-lg px-1 py-3 cursor-pointer">
                <?php if (has_custom_logo()) { the_custom_logo(); } ?>
            </div>
        </div>

        <div class="flex gap-5">

            <div>
                <?php get_search_form(); ?>
            </div>

            <div class="bg-beige px-1 py-3 flex rounded-lg h-12 items-center gap-5 cursor-pointer menu-JS transition-all duration-500">

            <div class="ml-3 font-semibold menu-label">Menu</div>
                <div class="flex gap-0.5 bg-black rounded-md h-10 w-10 items-center justify-center">
                    <span class="bg-beige h-4 w-0.5 menu-icone-1-JS"></span>
                    <span class="bg-beige h-5 w-0.5 menu-icone-2-JS"></span>
                    <span class="bg-beige h-2 w-0.5 menu-icone-3-JS"></span>
                </div>
            </div>
        </div>

    </div>

    <div class="menu-overlay invisible fixed inset-0 bg-purple text-white">
        <div class="container pt-32">
            <?php wp_nav_menu([
                'menu_class' => 'flex flex-col gap-4 text-2xl uppercase',
                'container'  => false,
            ]); ?>
        </div>
    </div>

    <script>
        if (sessionStorage.getItem("menuOuvert")) {
            document.querySelector(".menu-overlay").style.visibility = "visible";
        }
    </script>

</header>

<body>

<main class="min-h-screen">
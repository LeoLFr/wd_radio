<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<header class="w-full">
    <div class="fixed z-99 bg-amber-50 py-3 flex flex-col justify-end items-end">

        <?php wp_nav_menu([

            'menu' => 'main-menu',
            'menu_class' => 'flex flex-col md:flex-row px-10 gap-5 items-center main-menu',
            'container' => 'nav',
            'container_class' => ' flex justify-center md:justify-end main-nav',

        ])?>

    </div>
</header>

<body>

<main class="min-h-screen"
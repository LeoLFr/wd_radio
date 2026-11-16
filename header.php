<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<header class="fixed z-99 bg-red-500">
    <div class="text-white">

        <?php wp_nav_menu([

            'menu' => '',
            'menu_class' => '',
            'container' => '',
            'container_class' => '',

        ])?>                                                                                                                                                                                                                                                                                                                                        

    </div>
</header>

<body>

<main class="min-h-screen"
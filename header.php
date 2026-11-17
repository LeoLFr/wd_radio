<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<header class="fixed z-99 top-0 w-full">

    <div class="flex justify-between py-3 container z-99">

        <div class="flex items-center">
            <div class="">Logo</div>
        </div>

        <div class="flex gap-5">

            <!-- Barre de recherche en placeholder a date -->
            <div class="bg-white py-3 px-1 flex rounded-lg items-center w-70 h-12">
                <div class="flex gap-0.5 bg-black rounded-md h-10 w-10 items-center justify-center">
                    
                </div>
                <div class="opacity-50 ml-3">Faire une recherche</div>
            </div>

            <!-- Menu burger -->
            <div class="bg-white px-1 py-3 flex rounded-lg h-12 items-center gap-5 cursor-pointer menu-JS">
                <div class="ml-3 font-semibold">Menu</div>
                <div class="flex gap-0.5 bg-black rounded-md h-10 w-10 items-center justify-center">
                    <span class="bg-white h-4 w-0.5"></span>
                    <span class="bg-white h-5 w-0.5"></span>
                    <span class="bg-white h-2 w-0.5"></span>
                </div>
            </div>
        </div>
        
    </div>

    <div class="menu-overlay invisible fixed inset-0  bg-green-300 text-white pt-32">
        <div class="container">

        <div class="absolute top-0 right-25 py-3">
            <div class="bg-black rounded-lg h-12 w-12 flex flex-col items-center justify-center gap-1.25 cursor-pointer menu-close-JS">
                <span class="h-0.5 w-6 bg-white translate-y-[3.5px] rotate-45 scale-x-75"></span>
                <span class="h-0.5 w-6 bg-white translate-y-[-3.5px] -rotate-45 scale-x-75"></span>
            </div>
        </div>

            <?php wp_nav_menu([

                'menu' => '',
                'menu_class' => 'flex flex-col gap-4 text-2xl uppercase',
                'container' => 'false',
                'container_class' => '',

            ])?>                                                                                                                                                                                                                                                                                                                                        

        </div>
    </div>

    </div>

</header>

<body>

<main class="min-h-screen"
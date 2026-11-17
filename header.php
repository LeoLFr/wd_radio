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
            <div class="h-12 w-17 object-cover flex items-center bg-white rounded-lg px-1 py-3 cursor-pointer">
                <?php if (has_custom_logo()) { the_custom_logo(); }?>
            </div>
        </div>

        <div class="flex gap-5">

            <!-- Barre de recherche en placeholder a date -->
            <div class="">
                <?php echo get_search_form(); ?>
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

    <div class="menu-overlay invisible fixed inset-0  bg-purple text-white">
        <div class="container">

        <div class="relative top-3">
            <div class="bg-white px-1 py-3 flex rounded-lg h-12 items-center gap-5 cursor-pointer menu-close-JS absolute top-0 right-0">
                <div class="ml-3 font-semibold text-black">Fermer</div>
                <div class="bg-black rounded-lg h-10 w-10 flex flex-col items-center justify-center gap-1.25 cursor-pointer">
                    <span class="h-0.5 w-6 bg-white translate-y-[3.5px] rotate-45 scale-x-75"></span>
                    <span class="h-0.5 w-6 bg-white translate-y-[-3.5px] -rotate-45 scale-x-75"></span>
                </div>
            </div>
        </div>


        <div class="pt-32">
            <?php wp_nav_menu([

                'menu' => '',
                'menu_class' => 'flex flex-col gap-4 text-2xl uppercase',
                'container' => 'false',
                'container_class' => '',

            ])?>                                                                                                                                                                                                                                                                                                                                        

        </div>



        </div>
    </div>

    </div>

</header>

<body>

<main class="min-h-screen"
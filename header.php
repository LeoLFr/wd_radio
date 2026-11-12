<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>

    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-5">
            <h1 class="text-2xl font-bold"><?php bloginfo('name'); ?></h1>
            <nav>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'flex space-x-4',
                ));
                ?>
            </nav>
        </div>
    </header>

</body>

</html>
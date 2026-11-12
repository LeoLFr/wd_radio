<?php



get_header();



if (have_posts()) :

    while (have_posts()) : the_post(); ?>



        <!-- Marge responsive -->

        <div class="w-full px-15 md:px-0 md:w-4/6 mx-auto">



            <!-- Titre de la page -->
            <h1><?php the_title(); ?></h1>



            <!-- Contenu de la page -->

            <div class="content">

                <?php the_content(); ?>

            </div>



        </div>

<?php

    endwhile;

endif;



get_footer();

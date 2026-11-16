<?php

/*

Template Name: À propos

*/

get_header();

?>



<!-- Ma section avec son container responsive -->

<section class="w-full px-5 md:px-0 md:w-4/6 mx-auto min-h-[65vh]">



    <!-- Titre de la page -->

    <h2 class="mb-2 font-bold text-xl mt-10"><?php the_title(); ?></h2>



    <!-- Contenu de la page -->

    <div class="border-amber-600 border-2 p-5 rounded-xl word-break break-word">

        <?php the_content(); ?>

    </div>




</section>



<?php get_footer(); ?>
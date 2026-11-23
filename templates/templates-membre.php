<?php

/*
Template Name: Devenir membre
*/

get_header();


?>

<?php if (has_post_thumbnail()) : ?>
    <section class="relative w-full h-[35vh] overflow-hidden">

        <div class="bg-black/30 absolute w-full h-[35vh] overflow-hidden pointer-events-none z-1"></div>

        <?php the_post_thumbnail('full', [
            'class' => 'absolute inset-0 w-full h-full object-cover object-center z-0',
            'alt' => get_the_title()
        ]); ?>

        <div class="relative z-10 h-full flex items-center px-[5%]">

            <h1 class="text-white text-4xl md:text-5xl font-bold uppercase m-0">
                <?php the_title(); ?>
            </h1>

        </div>

    </section>
<?php endif; ?>


<section class="bg-beige container">

    <h2>test</h2>

</section>


<?php get_footer(); ?>

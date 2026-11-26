<?php get_header(); ?>


<section class="min-h-screen">
    <?php
    $lieux = get_field("lieux");
    ?>

    <article class="w-full">
        <div class="w-full h-[50vh] overflow-hidden">

            <?php the_post_thumbnail('large', [
                'class' => 'w-full h-full object-cover object-center'
            ]); ?>

        </div>
        <div class="container">
            <a class=" text-xl color border-3 rounded-xl rounded-tl-none bg-[#FF8600] p-2 mx-50 my-10 text-center border-b-9 border-r-9" href="./etat-des-routes">VOIR PLUS</a>

            <p class="text-4xl md:text-6xl font-bold uppercase m-0whitespace-nowrap mt-8"><?php the_title(); ?></p>
            <p class="text-lg opacity-60 font-semibold mt-3 mb-8"><?php echo esc_html(implode(', ', $lieux)); ?></p>

            <div class="pb-15">
                <div class="bg-(--color-beige) w-full rounded-md border-3 border-b-7 border-r-7 p-8">
                    <?php the_content(); ?>
                </div>
            </div>

        </div>

    </article>
</section>

<?php get_footer();

<?php

/*

Template Name: État des routes

*/

get_header();

?>

<?php if (has_post_thumbnail()) : ?>
    <section class="z-5 relative">

        <div class="fixed">
            <div class="bg-black/30 fixed w-full h-[30vh] overflow-hidden pointer-events-none z-3"></div>

            <?php the_post_thumbnail('full', [
                'class' => 'fixed inset-0 w-full h-[30vh] object-cover object-center z-2',
                'alt' => get_the_title()
            ]); ?>
        </div>

        <div class="absolute container bottom-0">
            <div class="relative "></div>

        </div>

    </section>
<?php endif; ?>

<div class="h-[30vh]"></div>

<section class="bg-beige container min-h-screen z-10 relative">

    <div class="h-[5vh]"></div>

    <h1 class="text-4xl md:text-6xl font-bold uppercase m-0">
        <?php the_title(); ?></h1>

    <div class="h-[5vh]"></div>

    <?php

    $args = [

        "post_type" => "post",

        "post_status" => "publish",

        "posts_per_page" => 12,

        "category_name" => "État des routes",

        "order" => "DESC",

        "orderby" => "ID"

    ];


    $query = new WP_Query($args);


    if ($query->have_posts()):

    ?>


        <div class="grid grid-cols-2 gap-12">

            <?php while ($query->have_posts()) : $query->the_post(); ?>

                <?php
                $lieux = get_field("lieux");
                ?>

                <article class="flex bg-amber-100 w-full rounded-md border-3 border-b-7 border-r-7">
                    <div class="mr-10 w-80 rounded-2xl">
                        <?php

                        the_post_thumbnail();

                        ?>
                    </div>
                    <div class="p-4">

                        <p class="text-2xl font-semibold w-1/2"><?php the_title(); ?></p>
                        <p class="opacity-60 font-semibold mb-5"><?php echo esc_html(implode(', ', $lieux)); ?></p>
                        <p> <?php echo esc_html(wp_trim_words(20, ' [...]')); ?></p>

                        <a href="<?php echo esc_url(get_permalink()) ?>" class="">Plus de détails</a>

                    </div>



                </article>



            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        </div>

    <?php endif; ?>





    </div>



    <?php get_footer();

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


        <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-15 xl:grid-cols-3 px-8 lg:px-0 pb-15">

            <?php while ($query->have_posts()) : $query->the_post(); ?>

                <?php
                $lieux = get_field("lieux");
                ?>

                <article class="bg-(--color-beige) w-full rounded-md border-3 border-b-7 border-r-7">
                    <div class="lg:mr-5 w-full object-cover rounded-2xl">
                        <?php

                        the_post_thumbnail();

                        ?>
                    </div>
                    <div class="m-6 justify-end">

                        <p class="text-2xl font-semibold md:w-3/4 md:whitespace-normal whitespace-nowrap"><?php the_title(); ?></p>
                        <p class="text-sm opacity-60 font-semibold mt-1 mb-2"><?php echo esc_html(implode(', ', $lieux)); ?></p>
                        <p class="mb-5"> <?php echo esc_html(wp_trim_words(get_the_excerpt(), 15, ' [...]')); ?></p>

                        <a href="<?php echo esc_url(get_permalink()) ?>" class="font-semibold text-end items-end ml-auto">Plus de détails</a>

                    </div>



                </article>



            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        </div>

    <?php endif; ?>





    </div>



    <?php get_footer();

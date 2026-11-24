<?php

/*

Template Name: État des routes

*/

get_header();

?>

<div>

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

        <?php while ($query->have_posts()) : $query->the_post(); ?>

            <article class="">

                <?php

                the_post_thumbnail();

                ?>

                <div class="content">

                    <p class="title"><?php the_title(); ?></p>

                    <p><?php the_excerpt(); ?></p>

                    <a href="<?php echo esc_url(get_permalink()) ?>" class="">Plus de détails</a>

                </div>



            </article>



        <?php

        endwhile;

        wp_reset_postdata();

        ?>

    <?php endif; ?>





</div>



<?php get_footer();

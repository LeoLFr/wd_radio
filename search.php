<?php get_header(); ?>

<div class="container " id="search-results">

    <h2>Résultats de la recherche</h2>

    <?php
    if (have_posts()):
        while (have_posts()): the_post() ?>

            <article class="">

                <?php the_post_thumbnail(); ?>

                <div class="">
                    <p class=""><?php the_title(); ?></p>

                    <a href="<?php echo esc_url(get_permalink()) ?>" class="">
                        En détails
                    </a>
                </div>

            </article>

        <?php
        endwhile;
    else: ?>
        <p>Aucun résultat</p>
    <?php
    endif;
    ?>

</div>

<?php get_footer(); ?>
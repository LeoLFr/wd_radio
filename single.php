<?php get_header(); ?>

<section>



    <section>

        <div class="">

            <?php
            $lieux = get_field("lieux");
            ?>

            <article class="w-full">
                <div class="w-full h-[50vh] overflow-hidden ">
                    <?php

                    the_post_thumbnail();

                    ?>
                </div>
                <div class="m-6 bg-amber-100 rounded-md border-3 border-b-7 border-r-7">

                    <p class="text-2xl font-semibold md:w-3/4 md:whitespace-normal whitespace-nowrap"><?php the_title(); ?></p>
                    <p class="text-sm opacity-60 font-semibold mt-1 mb-2"><?php echo esc_html(implode(', ', $lieux)); ?></p>
                    <p class="mb-5"> <?php echo esc_html(wp_trim_words(the_content())); ?></p>

                </div>



            </article>



        </div>



    </section>

</section>

<?php get_footer();

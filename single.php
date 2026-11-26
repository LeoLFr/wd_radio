<?php get_header(); ?>

<section>



    <section>

        <div class="">

            <?php
            $lieux = get_field("lieux");
            ?>

            <article class=" bg-amber-100 w-full rounded-md border-3 border-b-7 border-r-7 px-8 py-15">
                <div class="lg:mr-5 w-full object-cover rounded-2xl">
                    <?php

                    the_post_thumbnail();

                    ?>
                </div>
                <div class="m-6 justify-end">

                    <p class="text-2xl font-semibold md:w-3/4 md:whitespace-normal whitespace-nowrap"><?php the_title(); ?></p>
                    <p class="text-sm opacity-60 font-semibold mt-1 mb-2"><?php echo esc_html(implode(', ', $lieux)); ?></p>
                    <p class="mb-5"> <?php echo esc_html(wp_trim_words(the_content())); ?></p>

                </div>



            </article>



        </div>



    </section>

</section>

<?php get_footer();

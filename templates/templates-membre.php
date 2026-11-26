<?php

/*
Template Name: Devenir membre
*/

get_header();

$form_membre = get_field("form-membre");

$title_form_membre = $form_membre["form-title-membre"] ?? "";
$form_description_membre_rep = $form_membre["form-description-membre-rep"] ?? [];
$link_form_membre = $form_membre["link-form-membre"] ?? "";

$form_partenaire = get_field("form-partenaire");

$title_form_partenaire = $form_partenaire["form-title-partenaire"] ?? "";
$form_description_partenaire_rep = $form_partenaire["form-description-partenaire-rep"] ?? [];
$link_form_partenaire = $form_partenaire["link-form-partenaire"] ?? "";

?>


<?php if (has_post_thumbnail()) : ?>

    <section class="relative rounded-t-xl overflow-hidden">

        <?php
        the_post_thumbnail('full', [
            'class' => 'fixed top-0 left-0 w-full h-[30vh] object-cover object-[35%_65%] z-0',
            'alt'   => get_the_title()
        ]);
        ?>

        <div class="fixed inset-0 bg-black/30 pointer-events-none z-1 h-[30vh]"></div>

        <div class="relative h-[30vh] z-2">

            <div class="absolute bottom-0 container">

                <div class="relative w-fit">

                    <div class="absolute top-0 bottom-0 left-[-100vw] right-0 bg-beige
                        rounded-tr-xl
                        after:content-[''] after:absolute
                        after:bottom-0 after:-right-4
                        after:w-4 after:h-4
                        after:rounded-bl-xl
                        after:shadow-[-4px_4px_0_0_#FFFBEF]">
                    </div>

                    <div class="relative py-6 pr-6 lg:pr-12">

                        <h1 class="text-xl sm:text-3xl lg:text-5xl font-semibold uppercase">
                            <?php the_title(); ?>
                        </h1>

                    </div>
                </div>
            </div>
        </div>

    </section>

<?php endif; ?>

<section class="bg-beige container min-h-screen z-10 relative">

    <div class="h-[10vh]"></div>

    <div>
        <div>
            <h2 class="mb-4 font-bold text-xl text-dark">
                <?php echo esc_html($title_form_membre); ?>
            </h2>

            <?php if (!empty($form_description_membre_rep)) : ?>
                <?php foreach ($form_description_membre_rep as $description) : ?>

                    <p class="lg:w-2/3 w-full text-neutral-600 mt-1"><?php echo esc_html($description["form-description-membre"] ?? ""); ?></p>

                <?php endforeach; ?>
            <?php endif; ?>

            <?php if (!empty($link_form_membre)) : ?>

                <a href="<?php echo esc_url($link_form_membre["url"]); ?>" target="<?php echo esc_attr($link_form_membre["target"] ?: "_self"); ?>"
                    class="inline-block mt-10 color border-3 rounded-lg rounded-tl-none bg-beige p-2 my-10 text-center border-b-5 border-r-5"><?php echo esc_html($link_form_membre["title"]); ?> </a>

            <?php endif; ?>
        </div>

        <div class="mt-15">
            <h2 class="mb-4 font-bold text-xl text-dark">
                <?php echo esc_html($title_form_partenaire); ?>
            </h2>

            <?php if (!empty($form_description_partenaire_rep)) : ?>
                <?php foreach ($form_description_partenaire_rep as $description) : ?>

                    <p class="lg:w-2/3 w-full text-neutral-600 mt-1"><?php echo esc_html($description["form-description-partenaire"] ?? ""); ?></p>

                <?php endforeach; ?>
            <?php endif; ?>

            <?php if (!empty($link_form_partenaire)) : ?>

                <a href="<?php echo esc_url($link_form_partenaire["url"]); ?>" target="<?php echo esc_attr($link_form_partenaire["target"] ?: "_self"); ?>"
                    class="inline-block mt-10 color border-3 rounded-lg rounded-tl-none bg-beige p-2 my-10 text-center border-b-5 border-r-5"><?php echo esc_html($link_form_partenaire["title"]); ?> </a>

            <?php endif; ?>
        </div>
    </div>

</section>

<?php get_footer(); ?>
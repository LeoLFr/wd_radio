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
        <?php the_title(); ?>
    </h1>

    <div>
        <div>
            <h2 class="mb-4 font-bold text-xl text-dark">
                <?php echo esc_html($title_form_membre); ?>
            </h2>

            <?php if (!empty($form_description_membre_rep)) : ?>
                <?php foreach ($form_description_membre_rep as $description) : ?>

                    <p><?php echo esc_html($description["form-description-membre"] ?? ""); ?></p>

                <?php endforeach; ?>
            <?php endif; ?>

            <?php if (!empty($link_form_membre)) : ?>

                <a href="<?php echo esc_url($link_form_membre["url"]); ?>" target="<?php echo esc_attr($link_form_membre["target"] ?: "_self"); ?>"
                class="inline-block mt-5"><?php echo esc_html($link_form_membre["title"]); ?> </a>

            <?php endif; ?>
        </div>

        <div>
            <h2 class="mb-4 font-bold text-xl text-dark">
                <?php echo esc_html($title_form_partenaire); ?>
            </h2>

            <?php if (!empty($form_description_partenaire_rep)) : ?>
                <?php foreach ($form_description_partenaire_rep as $description) : ?>

                    <p><?php echo esc_html($description["form-description-partenaire"] ?? ""); ?></p>

                <?php endforeach; ?>
            <?php endif; ?>

            <?php if (!empty($link_form_partenaire)) : ?>

                <a href="<?php echo esc_url($link_form_partenaire["url"]); ?>" target="<?php echo esc_attr($link_form_partenaire["target"] ?: "_self"); ?>"
                class="inline-block mt-5"><?php echo esc_html($link_form_partenaire["title"]); ?> </a>
                
            <?php endif; ?>
        </div>
    </div>

</section>


<?php get_footer(); ?>
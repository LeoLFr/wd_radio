<?php

/*
Template Name: Devenir membre
*/

get_header();


$form_membre = get_field("form-membre");
$title_form_membre = $title_form_membre["form-title-membre"] ?? "";
$image_mission_1 = $["form-description-membre-rep"] ?? "";
$link_form_membre = $link_form_membre["link-form-membre"] ?? "";

$conseiladmin = get_field("conseil-admin");
$title_admin = $conseiladmin["title-admin"] ?? "";
$nom_admin = $conseiladmin["nom-admin"] ?? [];


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
            <h2></h2>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
        </div>

        <div>
            <h2></h2>
            <p></p>
            <p></p>
            <p></p>
        </div>
    </div>

</section>


<?php get_footer(); ?>
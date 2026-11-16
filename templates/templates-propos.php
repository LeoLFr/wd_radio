<?php

/*

Template Name: À propos


*/

get_header();
?>

<?php
$notremission = get_field("notre-mission");
$title = get_field("title-mission");
$description = get_sub_field("description-mission");

$image_1 = get_field("image-mission-1");
$image_2 = get_field("image-mission-2");

?>

<!-- Ma section avec son container responsive -->

<section class="w-full px-5 md:px-0 md:w-4/6 mx-auto min-h-[65vh]">

    <!-- Titre de la page -->

    <h2 class="mb-2 font-bold text-xl mt-10"><?php the_title(); ?></h2>

    <!-- Contenu de la page -->

    <div class="border-amber-600 border-2 p-5 rounded-xl word-break break-word">
    <h3><?php echo $title; ?></h3>
    <p><?php echo $description; ?></p>
    <img src="<?php echo $image_1; ?>" alt=""/>
    <img src="<?php echo $image_2; ?>" alt=""/>
    </div>

</section>

<?php get_footer(); ?>
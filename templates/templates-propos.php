<?php

/*

Template Name: À propos


*/

get_header();
?>

<?php
$notremission = get_field("notre-mission");
$title_mission = get_field("title-mission");
$description_mission = get_sub_field("description-mission");

$image_mission_1 = get_field("image-mission-1");
$image_mission_2 = get_field("image-mission-2");

?>

<!-- Ma section avec son container responsive -->

<section class="container">

    <!-- Titre de la page -->

    <h2 class="mb-2 font-bold text-xl mt-10"><?php the_title(); ?></h2>

    <!-- Contenu de la page -->

    <div class="">

        <h3><?php echo $title_mission; ?></h3>
        <p><?php echo $description_mission; ?></p>

        <div>
            <img src="<?php echo $image_mission_1; ?>" alt=""/>
            <img src="<?php echo $image_mission_2; ?>" alt=""/>
        </div>

    </div>

</section>

<?php get_footer(); ?>
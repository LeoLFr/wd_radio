<?php

/*
Template Name: À propos
*/

get_header();

// call pour récupérer les champs ACF de mission
$notremission = get_field("notre-mission");
$title_mission = $notremission["title-mission"] ?? "";
$image_mission_1 = $notremission["image-mission-1"] ?? "";
$image_mission_2 = $notremission["image-mission-2"] ?? "";


?>

<!-- Section : Notre mission -->

    <h2 class="mb-2 font-bold text-xl mt-10"><?php the_title(); ?></h2>

    <div class="flex flex-col gap-4 cols-2">

        <h3><?php echo esc_html($title_mission); ?></h3>

        <?php if (!empty($notremission["description-mission"])) : ?>

            <?php foreach ($notremission["description-mission"] as $description_mission) : ?>

                <p><?php echo esc_html($description_mission["description-mission"]); ?></p>

            <?php endforeach; ?>

        <?php endif; ?>

        <div class="flex flex-col md:flex-row gap-4 mt-4">
            <?php if (!empty($image_mission_1)) : ?>
                <img src="<?php echo esc_url($image_mission_1["url"] ?? $image_mission_1); ?>" alt="" class="w-120 h-120 rounded-sm object-cover">
            <?php endif; ?>

            <?php if (!empty($image_mission_2)) : ?>
                <img src="<?php echo esc_url($image_mission_2["url"] ?? $image_mission_2); ?>" alt="" class="w-120 h-120 rounded-sm object-cover">
            <?php endif; ?>
        </div>

    </div>

<!-- Section : Conseil d'administration -->

<?php get_footer(); ?>
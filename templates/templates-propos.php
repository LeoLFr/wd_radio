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

// call pour récupérer les champs ACF d'administration
$conseiladmin = get_field("conseil-admin");
$title_admin = $conseiladmin["title-admin"] ?? "";
$nom_admin = $conseiladmin["nom-admin"] ?? [];
$poste_admin = $conseiladmin["poste-admin"] ?? [];
$description_admin = $conseiladmin["description-admin"] ?? [];
$membre_admin_1 = $conseiladmin["membre-admin-1"] ?? "";
$membre_admin_2 = $conseiladmin["membre-admin-2"] ?? "";
$membre_admin_3 = $conseiladmin["membre-admin-3"] ?? "";
$membre_admin_4 = $conseiladmin["membre-admin-4"] ?? "";
$membre_admin_5 = $conseiladmin["membre-admin-5"] ?? "";
$poste_admin_1 = $conseiladmin["poste-admin-1"] ?? "";
$poste_admin_2 = $conseiladmin["poste-admin-2"] ?? "";
$poste_admin_3 = $conseiladmin["poste-admin-3"] ?? "";
$poste_admin_4 = $conseiladmin["poste-admin-4"] ?? "";
$poste_admin_5 = $conseiladmin["poste-admin-5"] ?? "";

// voir la structure
// var_dump($conseiladmin);
?>

<!-- header -->

<?php if (has_post_thumbnail()) : ?>
    <section class="relative w-full h-[215px] overflow-hidden">

        <?php the_post_thumbnail('full', [
            'class' => 'absolute inset-0 w-full h-full object-cover object-center',
            'alt' => get_the_title()
        ]); ?>

        <div class="relative z-10 h-full flex items-center px-[5%]">

            <h1 class="text-white text-4xl md:text-5xl font-bold uppercase m-0">
                <?php the_title(); ?>
            </h1>

        </div>

    </section>
<?php endif; ?>

<!-- section : notre mission -->

<section class="bg-beige container">

<div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

<div class="flex flex-col gap-4">

    <h2 class="mb-4 font-bold text-xl color-dark"><?php echo esc_html($title_mission); ?></h2>

        <?php if (!empty($notremission["description-mission"])) : ?>

            <?php foreach ($notremission["description-mission"] as $description_mission) : ?>

                <p><?php echo esc_html($description_mission["description-mission"]); ?></p>

            <?php endforeach; ?>

        <?php endif; ?>

        </div>

        <section class="bg-beige container">

<div class="grid grid-cols-1 md:grid-cols-2">

        <div class="flex flex-row gap-4 w-full">
            <?php if (!empty($image_mission_1)) : ?>
                <img src="<?php echo esc_url($image_mission_1["url"] ?? $image_mission_1); ?>" alt="" class="w-120 h-120 rounded-sm object-cover">
            <?php endif; ?>

            <?php if (!empty($image_mission_2)) : ?>
                <img src="<?php echo esc_url($image_mission_2["url"] ?? $image_mission_2); ?>" alt="" class="w-120 h-120 rounded-sm object-cover">
            <?php endif; ?>
        </div>
    </div>
</div>
</section>
</section>

<!-- section : conseil d'administration -->

<?php
$membres = [
    $membre_admin_1,
    $membre_admin_2,
    $membre_admin_3,
    $membre_admin_4,
    $membre_admin_5
];
?>

<section class="bg-beige container">
<h2 class="mb-2 font-bold text-xl mt-10 color-dark"><?php echo esc_html($title_admin); ?></h2>

<div class="flex flex-col md:flex-row gap-4 mt-4">

<?php foreach ($membres as $index => $membre) : ?>

    <div class="flex flex-col gap-2 items-center text-center">

        <?php if (!empty($membre)) : ?>
            <img 
                src="<?php echo esc_url($membre['url'] ?? $membre); ?>" 
                alt="" 
                class="w-120 h-120 rounded-sm object-cover"
            >
        <?php endif; ?>

        <h4 class="font-bold color-dark text-lg">
            <?php echo esc_html($nom_admin[$index]['nom-admin'] ?? ''); ?>
        </h4>

        <p class="text-sm italic">
            <?php echo esc_html($poste_admin[$index]['poste-admin'] ?? ''); ?>
        </p>

        <p>
            <?php echo esc_html($description_admin[$index]['description-admin'] ?? ''); ?>
        </p>

    </div>

<?php endforeach; ?>

</div>
</section>

<?php get_footer(); ?>
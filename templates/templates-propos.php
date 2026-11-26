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
    <section class="relative w-full h-[30vh] overflow-hidden">

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

<section class="bg-beige container py-[3vw]">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

        <div class="flex flex-col gap-4">

            <h2 class="mb-4 font-bold text-xl color-dark"><?php echo esc_html($title_mission); ?></h2>

            <?php if (!empty($notremission["description-mission"])) : ?>

                <?php foreach ($notremission["description-mission"] as $description_mission) : ?>

                    <p><?php echo esc_html($description_mission["description-mission"]); ?></p>

                <?php endforeach; ?>

            <?php endif; ?>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <?php if (!empty($image_mission_1)) : ?>
                <img src="<?php echo esc_url($image_mission_1["url"] ?? $image_mission_1); ?>" alt="" class="w-full h-60 rounded-sm object-cover">
            <?php endif; ?>

            <?php if (!empty($image_mission_2)) : ?>
                <img src="<?php echo esc_url($image_mission_2["url"] ?? $image_mission_2); ?>" alt="" class="w-full h-60 rounded-sm object-cover">
            <?php endif; ?>
        </div>

    </div>

</section>

<!-- section : conseil d'administration -->

<?php
$membres = [
    [
        'image' => $membre_admin_1,
        'nom' => $nom_admin[0]['nom-admin'] ?? '',
        'poste' => $poste_admin[0]['poste-admin'] ?? '',
        'description' => $description_admin[0]['description-admin'] ?? ''
    ],
    [
        'image' => $membre_admin_2,
        'nom' => $nom_admin[1]['nom-admin'] ?? '',
        'poste' => $poste_admin[1]['poste-admin'] ?? '',
        'description' => $description_admin[1]['description-admin'] ?? ''
    ],
    [
        'image' => $membre_admin_3,
        'nom' => $nom_admin[2]['nom-admin'] ?? '',
        'poste' => $poste_admin[2]['poste-admin'] ?? '',
        'description' => $description_admin[2]['description-admin'] ?? ''
    ],
    [
        'image' => $membre_admin_4,
        'nom' => $nom_admin[3]['nom-admin'] ?? '',
        'poste' => $poste_admin[3]['poste-admin'] ?? '',
        'description' => $description_admin[3]['description-admin'] ?? ''
    ],
    [
        'image' => $membre_admin_5,
        'nom' => $nom_admin[4]['nom-admin'] ?? '',
        'poste' => $poste_admin[4]['poste-admin'] ?? '',
        'description' => $description_admin[4]['description-admin'] ?? ''
    ]
];
?>

<section class="bg-beige container py-[3vw]">

    <h2 class="mb-10 font-bold text-xl color-dark">
        <?php echo esc_html($title_admin); ?>
    </h2>

    <?php if (!empty($membres)) : ?>

        <div class="max-w-6xl mx-auto" id="carrousel-membres">

            <div class="bg-amber-100 rounded-md border-3 border-b-7 border-r-7 grid">

                <?php foreach ($membres as $index => $membre) : ?>

                    <div class="membre-slide col-start-1 row-start-1 p-6 flex flex-col gap-6 items-center w-full md:flex-row md:gap-10 transition-opacity duration-500 <?php echo $index === 0 ? 'opacity-100' : 'opacity-0 pointer-events-none'; ?>" data-slide="<?php echo $index; ?>">

                        <div class="w-full md:w-1/2 membre-animation transition-all duration-500 ease-in-out">
                            <img src="<?php echo esc_url($membre['image']['url'] ?? $membre['image']); ?>" alt="<?php echo esc_attr($membre['nom']); ?>" class="w-full h-87 object-cover rounded-lg">
                        </div>

                        <div class="w-full md:w-1/2 flex flex-col gap-4 membre-animation transition-all duration-500 ease-in-out">

                            <h3 class="text-2xl md:text-xl font-bold color-dark">
                                <?php echo esc_html($membre['nom']); ?>
                            </h3>

                            <p class="text-lg italic color-dark">
                                <?php echo esc_html($membre['poste']); ?>
                            </p>

                            <div class="text-base leading-relaxed">
                                <?php echo wp_kses_post($membre['description']); ?>
                            </div>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

            <div class="flex justify-center items-center gap-6 mt-8">

                <button type="button" data-carousel-prev aria-label="Membre précédent" class="bg-white rounded-full w-10 h-10 flex items-center justify-center shadow hover:bg-gray-100 transition">&#8592;</button>

                <span class="text-sm color-dark" data-carousel-counter>1 / <?php echo count($membres); ?></span>

                <button type="button" data-carousel-next aria-label="Membre suivant" class="bg-white rounded-full w-10 h-10 flex items-center justify-center shadow hover:bg-gray-100 transition">&#8594;</button>

            </div>

        </div>

    <?php endif; ?>

</section>

<?php get_footer(); ?>
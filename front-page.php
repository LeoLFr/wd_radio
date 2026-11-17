<?php get_header(); ?>

<?php
$carrousel = get_field("carrousel");

$images = [
    $carrousel["image_1"] ?? null,
    $carrousel["image_2"] ?? null,
    $carrousel["image_3"] ?? null,
    $carrousel["image_4"] ?? null,
    $carrousel["image_5"] ?? null,
];
?>

<section class="relative w-full h-[70vh] overflow-hidden">

    <div class="absolute inset-0 overflow-hidden">

        <?php foreach ($images as $image): ?>
            <?php if ($image): ?>

                <div class="slide-JS absolute inset-0">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full h-[70vh] object-cover">
                </div>

            <?php endif; ?>
        <?php endforeach; ?>

    </div>

    <div class="absolute inset-0 bg-black/30 z-10 overflow-hidden"></div>

    <div class="relative z-20 h-[70vh] flex flex-col container mt-[10vh] mix-blend-difference">



        <div class="text-9xl text-white  flex flex-col uppercase">
            <h1 class="">Radio Communautaire</h1>
            <div class="flex flex-col justify-end items-end">
                <h1 class="">de la Matanie</h1>
            </div>
        </div>

        <div class="grid grid-cols-4 gap-2">
            <p class="col-start-3 text-white mt-20">
                <?php bloginfo('description'); ?>
            </p>
        </div>
        <div class="grid grid-cols-4 gap-2">
            <p class="col-start-4 text-white mt-5">
                L'initiative est portée par une équipe engagée et expérimentée, soutenue par l'implication de
                ses membres.
            </p>
        </div>

    </div>

</section>

<?php get_footer(); ?>
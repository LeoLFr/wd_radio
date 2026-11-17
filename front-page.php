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

    <div class="absolute inset-0 overflow-hidden h-800 brightness-70">

        <?php foreach ($images as $image): ?>
            <?php if ($image): ?>

                <div class="slide-JS absolute inset-0">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full h-[90vh] xl:h-[80vh] object-cover">
                </div>

            <?php endif; ?>
        <?php endforeach; ?>

    </div>



    <div class="relative z-20 h-[70vh] flex flex-col container mt-[10vh] mix-blend-difference">



        <div class="text-5xl md:text-7xl xl:text-9xl text-white  flex flex-col uppercase">
            <h1 class="">Radio Communautaire</h1>
            <div class="flex flex-col justify-end items-end">
                <h1 class="">de la Matanie</h1>
            </div>
        </div>

        <div class="mt-50 sm:mt-20 md:mt-0 md:grid md:grid-cols-2 w-2/3 md:w-full lg:grid-cols-4 gap-2">
            <p class="md:col-start-1 lg:col-start-3 text-white mt-20">
                <?php bloginfo('description'); ?>
            </p>
        </div>
        <div class="text-end ml-auto md:text-start w-2/3 md:w-full md:grid md:grid-cols-2 lg:grid-cols-4 gap-2">
            <p class="md:col-start-2 lg:col-start-4 text-white mt-5">
                L'initiative est portée par une équipe engagée et expérimentée, soutenue par l'implication de
                ses membres.
            </p>
        </div>

    </div>

</section>

<?php
$nosfrequences = get_field("nos-frequences");

$title_frequences = $nosfrequences["title-frequences"] ?? "";
$num_frequences = $nosfrequences["num-frequences"] ?? "";
?>

<section class="bg-(--color-purple) text-white">
    <div class="p-20">
        <h3 class="text-3xl font-bold"><?php echo esc_html($title_frequences); ?></h3>
        <p><?php echo esc_html($num_frequences); ?></p>
    </div>
</section>

<?php get_footer(); ?>
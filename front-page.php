<?php get_header(); ?>

<?php
$carrousel = get_field("carrousel");

$images = [
    $carrousel["image_1"] ?? null,
    $carrousel["image_2"] ?? null,
    $carrousel["image_3"] ?? null,
    $carrousel["image_4"] ?? null,
    $carrousel["image_5"] ?? null,];
?>

<section class="relative w-full h-screen overflow-hidden">

    <div class="absolute inset-0 overflow-hidden">

        <?php foreach ($images as $image): ?>
            <?php if ($image): ?>

                <div class="slide-JS absolute inset-0">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full h-full object-cover">
                </div>

            <?php endif; ?>
        <?php endforeach; ?>

    </div>

    <div class="absolute inset-0 bg-black/20 z-10 overflow-hidden"></div>

    <div class="relative z-20 h-full flex flex-col">

        <h1 class="text-white">
            <?php bloginfo('name'); ?>
        </h1>

    </div>

</section>

<?php get_footer(); ?>
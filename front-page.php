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

    <div class="absolute inset-0 overflow-hidden h-800 z-0">

        <?php foreach ($images as $image): ?>
            <?php if ($image): ?>

                <div class="slide-JS absolute inset-0">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full h-[90vh] xl:h-[80vh] object-cover">
                </div>

            <?php endif; ?>
        <?php endforeach; ?>

    </div>

    <div class="absolute inset-0 z-10 bg-black/30 pointer-events-none"></div>



    <div class="relative z-20 h-[70vh] flex flex-col container mt-[10vh] mix-blend-difference">



        <div class="text-5xl md:text-7xl xl:text-[6vw] text-white uppercase grid grid-cols-4 flex-col w-full">
            <h1 class="col-span-4">Radio Communautaire</h1>
            <div class="flex flex-col col-span-2 col-start-3">
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
$accueilpub1 = get_field("accueil-pub1-728x90");
$accueilpub2 = get_field("accueil-pub2-728x90");
$accueilpub3 = get_field("accueil-pub3-300x250");
$accueilpub4 = get_field("accueil-pub4-300x250");
$accueilpub5 = get_field("accueil-pub5-300x250");


$nosfrequences = get_field("nos-frequences");

$title_frequences = $nosfrequences["title-frequences"] ?? "";
$num_frequences = $nosfrequences["num-frequences"] ?? "";
?>

<article>
    <?php if (!empty($accueilpub1)) : ?>
        <img src="<?php echo esc_url($accueilpub1["url"] ?? $accueilpub1); ?>" alt="" class="w-full object-cover">
    <?php endif; ?>

    <?php if (!empty($accueilpub2)) : ?>
        <img src="<?php echo esc_url($accueilpub2["url"] ?? $accueilpub2); ?>" alt="" class="w-full object-cover">
    <?php endif; ?>

    <div>
        <div>
            <?php if (!empty($accueilpub3)) : ?>
                <img src="<?php echo esc_url($accueilpub3["url"] ?? $accueilpub3); ?>" alt="" class="w-full object-cover">
            <?php endif; ?>
        </div>

        <div>
            <?php if (!empty($accueilpub4)) : ?>
                <img src="<?php echo esc_url($accueilpub4["url"] ?? $accueilpub4); ?>" alt="" class="w-full object-cover">
            <?php endif; ?>
        </div>

        <div>
            <?php if (!empty($accueilpub5)) : ?>
                <img src="<?php echo esc_url($accueilpub5["url"] ?? $accueilpub5); ?>" alt="" class="w-full object-cover">
            <?php endif; ?>
        </div>
    </div>
</article>

<section class="bg-(--color-purple) text-white">
    <div class="p-20">
        <h3 class="text-3xl font-bold"><?php echo esc_html($title_frequences); ?></h3>
        <p class="text-center text-6xl font-bold m-50"><?php echo esc_html($num_frequences); ?></p>
    </div>
</section>

<section class="">
    <div class="container py-20">

        <h3 class="text-3xl font-semibold">——— Utilitaires</h3>

        <div class="grid grid-cols-4 gap-5">

            <div class="w-full bg-amber-100 p-2 rounded-md">
                <span>Info 1</span>
            </div>

            <div class="w-full bg-amber-100 p-2 rounded-md">
                <span>Info 2</span>
            </div>

            <div class="">

                <div class="flex flex-col gap-10 items-center justify-center bg-amber-100 p-2 w-full aspect-square rounded-md">
                    <p id="meteo-emoji" class="text-6xl"></p>
                    <div class="flex flex-col gap-2 items-center justify-center">
                        <p id="meteo-temp" class="text-3xl font-semibold">Chargement...</p>
                        <p id="meteo-texte" class=""></p>
                    </div>

                </div>
            </div>

            <div class="">
                <div class="flex flex-col gap-10 items-center justify-center bg-amber-100 p-2 w-full aspect-square rounded-md">
                    <p class="text-6xl">💨</p>
                    <div class="flex flex-col gap-2 items-center justify-center">
                        <p class="text-3xl font-semibold" id="meteo-vent"></p>
                        <h4>Vent</h4>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<script>
    const descriptions = {
        0: ["Ciel dégagé", "☀️", "🌙"],
        1: ["Plutôt dégagé", "🌤️", "🌙"],
        2: ["Partiellement nuageux", "⛅", "☁️"],
        3: ["Couvert", "☁️"],
        45: ["Brouillard", "🌫️"],
        51: ["Bruine", "🌦️"],
        61: ["Pluie", "🌧️"],
        63: ["Pluie", "🌧️"],
        65: ["Pluie forte", "🌧️"],
        71: ["Neige", "🌨️"],
        73: ["Neige", "❄️"],
        75: ["Neige forte", "❄️"],
        80: ["Averses", "🌦️"],
        95: ["Orage", "⛈️"]
    };

    const url = "https://api.open-meteo.com/v1/forecast?latitude=48.8467&longitude=-67.5333&current=temperature_2m,wind_speed_10m,weather_code,is_day&timezone=America/Toronto";

    fetch(url)
        .then(function(reponse) {
            return reponse.json();
        })
        .then(function(data) {
            const meteo = data.current;

            const desc = descriptions[meteo.weather_code] || ["Météo indisponible", "❔"];

            let emoji = desc[1];

            if (meteo.is_day === 0 && desc[2]) {
                emoji = desc[2];
            }

            document.getElementById("meteo-emoji").textContent = emoji;
            document.getElementById("meteo-temp").textContent = Math.round(meteo.temperature_2m) + "°C";
            document.getElementById("meteo-texte").textContent = desc[0];
            document.getElementById("meteo-vent").textContent = Math.round(meteo.wind_speed_10m) + " km/h";
        })
        .catch(function() {
            document.getElementById("meteo-temp").textContent = "Météo indisponible";
        });
</script>

<?php get_footer(); ?>
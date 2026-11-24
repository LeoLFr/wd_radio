<?php

/*
Template Name: Devenir membre
*/

get_header();


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
            <h2>Formulaire membre</h2>
            <p>Devenez membre pour participer à la création de la première radio communautaire de La Matanie!</p>
            <p>Remplissez ce formulaire pour devenir membre. Le frais d’adhésion peut être payé par virement à l’adresse : radiolamatanie@gmail.com. Votre adhésion sera valide un an.</p>
            <p>L’échéancier de création de la radio communautaire s’échelonne sur trois ans. En devenant membre dès maintenant, vous ajoutez du poids au projet dans les représentations à venir auprès de partenaires potentiels et du CRTC. De plus, vous contribuez à couvrir certains frais de démarrage, comme les études techniques requises</p>
            <p>Merci pour votre confiance et votre soutien!</p>
            <a href="">Lien</a>
        </div>

        <div>
            <h2>Formulaire partenaire (organisme et entreprises)</h2>
            <p>Ce projet de radio communautaire est une opportunité de montrer votre soutien à un projet structurant. De plus, différentes occasions de visibilité vous sont proposées. Consultez le plan de visibilité et n'hésitez pas à nous contacter pour en discuter.</p>
            <p>L’échéancier de création de la radio communautaire s’échelonne sur trois ans. En devenant partenaire dès maintenant, vous ajoutez du poids au projet dans les représentations à venir auprès du CRTC. De plus, vous contribuez à couvrir certains frais de démarrage, comme les études techniques requises.</p>
            <p>Merci pour votre confiance et votre soutien!</p>
            <a href="">Lien</a>
        </div>
    </div>

</section>


<?php get_footer(); ?>
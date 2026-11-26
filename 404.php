<?php get_header(); ?>

<section class="bg-orange-flash min-h-screen">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/personnage-retro-cassette.png" alt="Personnage rétro cassette" class="flex justify-start object-contain w-45 h-45">
    <div class="flex justify-center p-60">
    <h2 class="text-5xl text-beige">Cette page est introuvable</h2>
    </div>
    <div class="flex justify-center">
     <a class="return text-4xl color border-4 rounded-xl rounded-tl-none bg-orange-light p-6 border-b-9 border-r-9" href="<?php echo home_url(); ?>">Retour à la page d'accueil</a>
    </div>
</section>

<?php get_footer(); ?>
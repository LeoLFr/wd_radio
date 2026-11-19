    </main>

    <footer class="text-2xl container py-5 bg-purple flex text-beige pt-30">
         
        <div class="flex flex-col gap-3">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo-white.svg" class="">
        <p>&copy; <?php echo date('Y'); ?> </p>
        <p class="border-b-2">INSCRIVEZ-VOUS À NOTRE INFOLETTRE</p>
        <p>ENTREZ VOTRE EMAIL ...</p>
        </div>
        <div class="flex flex-col gap-5 justify-end items-end ml-auto">
            <p>Confidentialité</p>
            <p>Accessibilité</p>
            <p>radiolamatanie@gmail.com</p>
            <p>581-232-7434</p>
            <p>Association des radios communautaires du Québec (ARCQ)</p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>

<?php /* bloginfo('name'); */ ?>
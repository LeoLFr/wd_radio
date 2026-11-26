    </main>

    <footer class="text-2xl container py-5 bg-purple flex justify-between text-beige z-10">
        <script> import { FaYoutube } from "react-icons/fa";</script>
        <div class="flex flex-col gap-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo-white.svg" alt="logo de la radio communautaire" class="flex justify-start object-contain w-45 h-45">
            <p>&copy; <?php echo date('Y'); ?></p>

            <div class="flex flex-col w-full">
                <p class="pb-5">
                    INSCRIVEZ-VOUS À NOTRE INFOLETTRE
                </p>

            <div class="border-b-2 border-beige mb-5"></div>

                <p class="pb-5">
                    ENTREZ VOTRE COURRIEL ...
                </p>
            </div>


            <div class="flex gap-4">

                <a href="https://www.youtube.com/" target="_blank">
                    <i class="fa-brands fa-youtube text-4xl"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-facebook text-4xl"></i>
                </a>
                
            </div>
        </div>

            <div class="flex flex-col gap-5 items-end text-right mt-auto">
                <div>
                    <p>Confidentialité</p>
                    <p>Accessibilité</p>
                </div>
                <div>
                    <p>radiolamatanie@gmail.com</p>
                    <p>581-232-7434</p>
                </div>
                <div>
                    <p>Association des radios communautaires du Québec (ARCQ)</p>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>

<?php /* bloginfo('name'); */ ?>
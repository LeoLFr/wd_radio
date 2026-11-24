document.addEventListener("DOMContentLoaded", function () {

    const carrousel = document.querySelector("#carrousel-membres");

    if (!carrousel) return;

    const slides = carrousel.querySelectorAll(".membre-slide");
    const boutonPrecedent = carrousel.querySelector("[data-carousel-prev]");
    const boutonSuivant = carrousel.querySelector("[data-carousel-next]");
    const compteur = carrousel.querySelector("[data-carousel-counter]");

    if (!slides.length || !boutonPrecedent || !boutonSuivant || !compteur) return;

    let indexActuel = 0;
    let animationEnCours = false;

    function afficherMembre(nouvelIndex, direction) {

        if (animationEnCours || nouvelIndex === indexActuel) return;

        animationEnCours = true;

        const ancienSlide = slides[indexActuel];
        const nouveauSlide = slides[nouvelIndex];

        const anciensElements = ancienSlide.querySelectorAll(".membre-animation");
        const nouveauxElements = nouveauSlide.querySelectorAll(".membre-animation");

        nouveauSlide.classList.remove("hidden");
        nouveauSlide.classList.add("flex", "absolute", "inset-0");

        ancienSlide.classList.add("absolute", "inset-0");

        nouveauxElements.forEach(element => {

            element.classList.remove(
                "opacity-0",
                "opacity-100",
                "translate-x-0",
                "translate-x-4",
                "-translate-x-4"
            );

            element.classList.add(
                "opacity-0",
                direction > 0 ? "translate-x-4" : "-translate-x-4"
            );

        });

        nouveauSlide.offsetHeight;

        // anim apparition du membre
        requestAnimationFrame(() => {

            nouveauxElements.forEach(element => {

                element.classList.remove(
                    "opacity-0",
                    "translate-x-4",
                    "-translate-x-4"
                );

                element.classList.add(
                    "opacity-100",
                    "translate-x-0"
                );

            });

            // anim de disparition
            anciensElements.forEach(element => {

                element.classList.remove(
                    "opacity-100",
                    "translate-x-0",
                    "translate-x-4",
                    "-translate-x-4"
                );

                element.classList.add(
                    "opacity-0",
                    direction > 0 ? "-translate-x-4" : "translate-x-4"
                );

            });

            indexActuel = nouvelIndex;
            compteur.textContent = `${indexActuel + 1} / ${slides.length}`;

            setTimeout(() => {
                ancienSlide.classList.remove("flex", "absolute", "inset-0");
                ancienSlide.classList.add("hidden");
                nouveauSlide.classList.remove("absolute", "inset-0");
                animationEnCours = false;
            }, 500);

        });
    }

    // voir le membre d'après
    boutonSuivant.addEventListener("click", function () {
        const suivant = (indexActuel + 1) % slides.length;
        afficherMembre(suivant, 1);
    });

    // voir le membre d'avant
    boutonPrecedent.addEventListener("click", function () {
        const precedent = (indexActuel - 1 + slides.length) % slides.length;
        afficherMembre(precedent, -1);
    });

});

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

        nouveauxElements.forEach(el => {
            el.classList.remove("opacity-100", "translate-x-0");
            el.classList.add("opacity-0", direction > 0 ? "translate-x-8" : "-translate-x-8");
        });

        // force le reflow
        nouveauSlide.offsetHeight;

        requestAnimationFrame(() => {

            nouveauSlide.classList.remove("opacity-0", "pointer-events-none");
            nouveauSlide.classList.add("opacity-100");

            nouveauxElements.forEach(el => {
                el.classList.remove("opacity-0", "translate-x-8", "-translate-x-8");
                el.classList.add("opacity-100", "translate-x-0");
            });

            ancienSlide.classList.remove("opacity-100");
            ancienSlide.classList.add("opacity-0", "pointer-events-none");

            anciensElements.forEach(el => {
                el.classList.remove("opacity-100", "translate-x-0");
                el.classList.add("opacity-0", direction > 0 ? "-translate-x-8" : "translate-x-8");
            });

            indexActuel = nouvelIndex;
            compteur.textContent = `${indexActuel + 1} / ${slides.length}`;

            setTimeout(() => {
                animationEnCours = false;
            }, 500);
        });
    }

    boutonSuivant.addEventListener("click", () => {
        afficherMembre((indexActuel + 1) % slides.length, 1);
    });

    boutonPrecedent.addEventListener("click", () => {
        afficherMembre((indexActuel - 1 + slides.length) % slides.length, -1);
    });

});
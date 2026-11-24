document.addEventListener("DOMContentLoaded", function () {

    const carrousel = document.querySelector("#carrousel-membres");

    if (!carrousel) return;

    const slides = carrousel.querySelectorAll(".membre-slide");
    const boutonPrecedent = carrousel.querySelector("[data-carousel-prev]");
    const boutonSuivant = carrousel.querySelector("[data-carousel-next]");
    const compteur = carrousel.querySelector("[data-carousel-counter]");

    let indexActuel = 0;

    function afficherMembre(index) {
        slides.forEach((slide) => {
            slide.classList.remove("flex");
            slide.classList.add("hidden");
        });
        slides[index].classList.remove("hidden");
        slides[index].classList.add("flex");
        compteur.textContent = `${index + 1} / ${slides.length}`;
    }

    // voir le membre d'après
    boutonSuivant.addEventListener("click", function () {
        indexActuel++;
        if (indexActuel >= slides.length) {
            indexActuel = 0;
        }
        afficherMembre(indexActuel);
    });

    // voir le membre d'avant
    boutonPrecedent.addEventListener("click", function () {
        indexActuel--;
        if (indexActuel < 0) {
            indexActuel = slides.length - 1;
        }
        afficherMembre(indexActuel);
    });

});

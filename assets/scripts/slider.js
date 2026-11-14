document.addEventListener("DOMContentLoaded", () => {

    const DUREE_AFFICHAGE = 4;   
    const DUREE_TRANSITION = 1.5; 

    const slides = gsap.utils.toArray(".slide-JS");

    if (slides.length < 2) return;

    gsap.set(slides, { xPercent: 100 });

    gsap.set(slides[0], { xPercent: 0 });

    let index = 0;

    function allerAuSuivant() {

        const actuel = slides[index];

        index = (index + 1) % slides.length;
        const suivant = slides[index];

        gsap.to(actuel, {
            xPercent: -100,
            duration: DUREE_TRANSITION,
            ease: "power3.inOut",
        });

        gsap.fromTo(
            suivant,
            { xPercent: 100 },
            {
                xPercent: 0,
                duration: DUREE_TRANSITION,
                ease: "power3.inOut",

                onComplete: () => {
                    gsap.delayedCall(DUREE_AFFICHAGE, allerAuSuivant);
                },
            }
        );
    }

    gsap.delayedCall(DUREE_AFFICHAGE, allerAuSuivant);
});
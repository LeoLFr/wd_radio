document.addEventListener("DOMContentLoaded", () => {

    gsap.registerPlugin(SplitText, CustomEase);

    CustomEase.create("menuEase", "0.8, 0, 0.1, 1");

    const bouton = document.querySelector(".menu-JS");
    const boutonFermer = document.querySelector(".menu-close-JS");
    const label = document.querySelector(".menu-label");
    const menu = document.querySelector(".menu-overlay");
    const liens = menu.querySelectorAll("a");

    let estOuvert = false;

    const split = SplitText.create(liens, {
        type: "lines",
        mask: "lines",
    });

    gsap.set(menu, { xPercent: 100, visibility: "visible" });
    gsap.set(split.lines, { yPercent: 100 });

    function ouvrirMenu() {

        document.body.style.overflow = "hidden";

        gsap.to(menu, {
            xPercent: 0,
            duration: 1,
            ease: "menuEase",
            overwrite: true,
        });

        gsap.to(split.lines, {
            yPercent: 0,
            duration: 0.7,
            ease: "power3.out",
            stagger: 0.08,
            delay: 0.85,
            overwrite: true,
        });

        changerLabel("Fermer");

        estOuvert = true;
    }

    function fermerMenu() {

        document.body.style.overflow = "";

        gsap.killTweensOf(split.lines);

        gsap.to(menu, {
            xPercent: 100,
            duration: 1,
            ease: "menuEase",
            overwrite: true,
            onComplete: () => {
                gsap.set(split.lines, { yPercent: 100 });
            },
        });

        changerLabel("Menu");

        estOuvert = false;
    }

    function changerLabel(nouveauTexte) {

        gsap.killTweensOf(label);

        gsap.to(label, {
            yPercent: -100,
            opacity: 0,
            duration: 0.2,
            ease: "power2.in",
            onComplete: () => {
                label.textContent = nouveauTexte;

                gsap.fromTo(
                    label,
                    { yPercent: 100, opacity: 0 },
                    {
                        yPercent: 0,
                        opacity: 1,
                        duration: 0.25,
                        ease: "power2.out"
                    }
                );
            },
        });
    }

    bouton.addEventListener("click", () => {
        estOuvert ? fermerMenu() : ouvrirMenu();
    });

    boutonFermer.addEventListener("click", () => {
        if (estOuvert) {
            fermerMenu();
        }
    });

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && estOuvert) {
            fermerMenu();
        }
    });

});
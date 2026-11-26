const lenis = new Lenis({
  duration: 2.5, 
  easing: (t) => 1 - Math.pow(1 - t, 3),
  smooth: true, 
  smoothTouch: true, 
  touchMultiplier: 1.2 
});

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

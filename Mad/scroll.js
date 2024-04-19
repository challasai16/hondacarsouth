// Smooth scroll for the vertical section
const sectionVertical = document.getElementById("vertical");
const lenisVertical = new Lenis({
  duration: 1.2,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t))
});

function rafVertical(time) {
  lenisVertical.raf(time);
  ScrollTrigger.update();
  requestAnimationFrame(rafVertical);
}

if (sectionVertical) {
  requestAnimationFrame(rafVertical);

  const colLeftVertical = document.querySelector(".col_left");
  const timelineVertical = gsap.timeline({ paused: true });

  timelineVertical.fromTo(colLeftVertical, { y: 0 }, { y: '170vh', duration: 1, ease: 'none' }, 0);

  ScrollTrigger.create({
    animation: timelineVertical,
    trigger: sectionVertical,
    start: 'top top',
    end: 'bottom center',
    scrub: true
  });
}

// Smooth scroll for the horizontal section
const sectionHorizontal = document.getElementById("horizontal");
const boxItems = gsap.utils.toArray(".horizontal__item");

if (sectionHorizontal) {
  gsap.to(boxItems, {
    xPercent: -100 * (boxItems.length - 1),
    ease: "sine.out",
    scrollTrigger: {
      trigger: sectionHorizontal,
      pin: true,
      scrub: 3,
      snap: 1 / (boxItems.length - 1),
      end: "+=" + sectionHorizontal.offsetWidth
    }
  });
}
document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
      link.addEventListener("click", function (e) {
        e.preventDefault();
        const targetId = this.getAttribute("href").substring(1);
        const targetElement = document.getElementById(targetId);
        
        if (targetElement) {
          const offsetTop = targetElement.offsetTop;
          window.scrollTo({
            top: offsetTop,
            behavior: "smooth"
          });
        }
      });
    });
  });
import { gsap } from "gsap";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

// Hero fade in animation

const header = document.querySelector("header");

const heroSection = document.querySelector("#hero");
const heroH1 = heroSection.querySelector("h1");
const heroH3 = heroSection.querySelector("h3");
const heroH4 = heroSection.querySelector("h4");

const heroContent = document.querySelectorAll(".hero__content *");

gsap.defaults({ duration: 2, ease: "power2.easeOut" });

let heroTl = gsap.timeline();

heroTl.from(heroContent, {
  y: 50,
  opacity: 0,
  stagger: 0.4,
  duration: 1.5,
});

if (header.classList.contains("home-page")) {
  heroTl
    .from(
      header,
      {
        opacity: 0,
        duration: 1,
      },
      "<+1"
    )
    .from(
      header,
      {
        y: `-${header.clientHeight / 3}px`,
        duration: 1,
      },
      "<"
    );
}

// --------------------------

// Hero arrow bounce

const heroArrow = heroSection.querySelector(".scroll-arrow");

let heroArrowTl = gsap.timeline({ repeat: -1 });

if (heroArrow) {
  gsap.from(heroArrow, {
    opacity: 0,

    delay: 1.5,
  });

  heroArrowTl
    .to(heroArrow, {
      y: 30,
      duration: 1.5,
    })
    .to(heroArrow, {
      y: 0,
      duration: 1.5,
    });
}

// --------------------------

// General fade in animation

const fadeInElements = document.querySelectorAll(".fade-in");

fadeInElements.forEach((element) => {
  gsap.from(element, {
    opacity: 0,
    y: 50,
    duration: 1.5,
    scrollTrigger: {
      trigger: element,
      start: "top 80%",
    },
  });
});

// --------------------------

// Fade in service cards

const serviceCards = document.querySelectorAll(".service__card");

if (serviceCards.length > 0) {
  gsap.from(serviceCards, {
    opacity: 0,
    duration: 1.5,
    y: 50,
    stagger: 0.2,
    scrollTrigger: {
      trigger: serviceCards[0],
      start: "top 80%",
    },
  });
}

// --------------------------

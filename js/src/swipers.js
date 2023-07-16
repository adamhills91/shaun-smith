// core version + navigation, pagination modules:
import Swiper from "swiper/bundle";
import { Navigation, Pagination, Autoplay } from "swiper";
// import Swiper and modules styles

// init Swiper:
const swiper = new Swiper(".swiper", {
  // configure Swiper to use modules

  loop: true,
  freeMode: true,
  spaceBetween: 15,
  grabCursor: true,
  slidesPerView: 4,
  autoplay: {
    delay: 1,
    disableOnInteraction: false,
  },
  speed: 5000,
  // freeModeMomentum: false,
});

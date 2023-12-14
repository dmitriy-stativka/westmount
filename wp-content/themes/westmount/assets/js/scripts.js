import { barbaInit } from './barba-transition'
import { gsap } from "gsap";
import Swiper from 'swiper';
import 'swiper/css';

document.addEventListener("DOMContentLoaded", function () {
  console.log('start');
  // barbaInit()
  hero_slider()
  slider_with_many_blocks_in_a_row()
});


function hero_slider() {
  const section_hero_slider = document.querySelectorAll(".section_hero_slider")
  section_hero_slider.forEach((el, index) => {

    let animated = false
    const swiper = new Swiper(el.querySelector('.swiper'), {
      loop: true,
      effect: "fade",
    });

    el.querySelector(".button_slider.btn_next").addEventListener('pointerdown', () => {
      if (animated) return
      animated = true
      swiper.slideNext()
    })
    el.querySelector(".button_slider.btn_prev").addEventListener('pointerdown', () => {
      if (animated) return
      animated = true
      swiper.slidePrev()
    })

    const imgs = el.querySelectorAll('img')
    const h2hero = el.querySelectorAll('.h2hero')

    swiper.on('slideChangeTransitionStart', function () {
      gsap.timeline({})
        .fromTo(h2hero, { yPercent: 150, opacity: 0 },
          { opacity: 1, yPercent: 0, duration: 1.5, ease: 'power4' })
        .fromTo(imgs, { opacity: 0, yPercent: 50 }, { opacity: 1, yPercent: 0, duration: 1.5, stagger: 0.3, ease: 'power4', onComplete: () => animated = false }, "<")
    });
  })
}

function slider_with_many_blocks_in_a_row() {
  const section_home_solutions = document.querySelectorAll(".section_home_solutions")
  section_home_solutions.forEach((el, index) => {
    const slides = el.querySelectorAll('.swiper-slide').length

    const swiper = new Swiper(el.querySelector('.swiper'), {
      slidesPerView: 2,
      spaceBetween: 10,
      loop: true,
      // Responsive breakpoints
      breakpoints: {
        // 
        // 320: {
        //   slidesPerView: 2,
        //   spaceBetween: 20
        // },
        // 
        // 480: {
        //   slidesPerView: 3,
        //   spaceBetween: 30
        // },
        1024: {
          slidesPerView: 4,
          spaceBetween: 24
        }
      }
    });
    if (slides > 3) {
      el.querySelector(".button_slider.btn_next").addEventListener('pointerdown', () => {
        swiper.slideNext()
      })

      el.querySelector(".button_slider.btn_prev").addEventListener('pointerdown', () => {
        swiper.slidePrev()
      })
    }
  })


}